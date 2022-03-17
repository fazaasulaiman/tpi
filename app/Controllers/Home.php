<?php

namespace App\Controllers;

use \Hermawan\DataTables\DataTable;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function manifest()
    {
        $db = db_connect();
        $builder = $db->table('manifest')->select('riksa,waktu, terminal, no_flight, kru, wni,wna,doc,keterangan');

        return DataTable::of($builder)->toJson();
    }
}
