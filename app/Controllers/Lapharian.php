<?php

namespace App\Controllers;

use \Hermawan\DataTables\DataTable;

class Lapharian extends BaseController
{
    public function index()
    {
        return view('manifest/read');
    }
    public function tambah()
    {
        return view('manifest/add');
    }
}
