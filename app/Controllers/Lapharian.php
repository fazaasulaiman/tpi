<?php

namespace App\Controllers;

use \Hermawan\DataTables\DataTable;
use App\Models\LapharianModel;

class Lapharian extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->form_validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        return view('manifest/list');
    }
    public function tambah()
    {
        
        return view('manifest/add');
    }
    public function process()
    {
        $dokumen = $this->request->getFile('doc');
        $data = $this->request->getPost();

        $data['doc'] = $dokumen;
        $tgl = formatdate($data['waktu']);
        if (!empty($data['waktu'])) {
            $data['waktu'] = formatdatetime($data['waktu']);
        }
        if (!$this->form_validation->run($data, 'lapharian')) {

            echo json_encode(array('status' => false, 'text' => $this->form_validation->getErrors()));
            exit();
        }
        $lapharian = new LapharianModel();
        $dokumen->move(ROOTPATH . 'public/upload/dokumen', preg_replace('/\s+/', '_', $data['no_flight']) . '(' . $tgl . ').' . $dokumen->guessExtension(), true);
        $data['doc'] = $dokumen->getName();
        $lapharian->insert($data);
        echo json_encode(array('status' => true));
        exit();
    }
    public function list()
    {
        $db = db_connect();
        $builder = $db->table('lap_harian')->select('id,no_flight, waktu, terminal,  kru, wna,wni,keterangan,doc,riksa');
        return DataTable::of($builder)
            ->hide('doc')
            ->hide('id')
            ->filter(function ($builder, $request) {

                parse_str($request->cari, $data);
                unset($data["csrf_test_name"]);
                $filter = array_filter($data);

                if ($filter['riksa'])
                    $builder->where('riksa', $filter['riksa']);
                if ($filter['terminal'])
                    $builder->where('terminal', $filter['terminal']);
                if ($filter['no_flight'])
                    $builder->like('no_flight', $filter['no_flight']);
                if (!empty($filter['waktu1']) & !empty($filter['waktu2'])) {
                    $waktu1 = formatdatetime($filter['waktu1']);
                    $waktu2 = formatdatetime($filter['waktu2']);
                    $builder->where("waktu BETWEEN '{$waktu1}' AND '{$waktu2}'");
                }
                // if (!empty($filter['waktu2'])) {
                //     $filter['2'] = formatdatetime($filter['waktu2']);
                // }
            })
            ->add('action', function ($row) {
                return '<a href="' . base_url() . '/upload/dokumen/' . $row->doc . '" target="_blank"><button type="button" class="btn btn-success btn-sm">Lampiran</button></a> </br>
            <button type="button" class="btn btn-danger btn-sm" onclick="hapus(' . "'" . $row->id . "'" . ',' . "'" . $row->no_flight . "'" . ',' . "'" . $row->waktu . "'" . ')">Hapus</button> </br>';
            }, 'last')->toJson();
    }
    public function remove()
    {
        $data = $this->request->getPost();
        // if (!$this->form_validation->run($data, 'removeLapharian')) {

        //     echo json_encode(array('status' => false, 'text' => $this->form_validation->getErrors()));
        //     exit();
        // }
        $id = $this->request->getVar('id');
        $lapharian = new LapharianModel();
        if ($lapharian->find($id)) {
            $dokumen = $lapharian->find($id)->doc;
            $lapharian->delete($id);
            echo json_encode(array("status" => TRUE));
            $path = ROOTPATH . 'public/upload/dokumen/' . $dokumen;
            chmod($path, 0777);
            unlink($path);
            exit();
        } else {
            echo json_encode(array("status" => false));
            exit();
        }
    }
}
