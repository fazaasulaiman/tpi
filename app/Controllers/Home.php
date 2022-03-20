<?php

namespace App\Controllers;



class Home extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->form_validation = \Config\Services::validation();
    }
    public function index()
    {
        return view('welcome_message');
    }
    public function login()
    {
        $data = $this->request->getPost();
        if (!$this->form_validation->run($data, 'login')) {
            echo json_encode(array('status' => false, 'ket' => $this->form_validation->getErrors()['password']));
            exit();
        }
        echo json_encode(array('status' => true));
        exit();
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('home');
    }
   
}
