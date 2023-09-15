<?php

namespace App\Controllers;

use App\Models\AnggotaModel;

class Pages extends BaseController
{
    protected $anggotaModel;
    public function __construct()
    {
        $this->anggotaModel = new AnggotaModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Ade | BelajarWeb'
        ];
        return view('pages/index', $data);
    }


    public function table()
    {
        $anggota = $this->anggotaModel->findAll();

        $data = [
            'title' => 'Tabel Anggota',
            'anggota' => $anggota
        ];


        return view('pages/table', $data);
    }
}
