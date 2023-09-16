<?php

namespace App\Controllers;

use App\Models\AnggotaModel;

class Pages extends BaseController
{
    protected $anggotaModel;
    protected $session;
    public function __construct()
    {
        $this->anggotaModel = new AnggotaModel();
        $this->session = \Config\Services::session();
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

    public function formtambah()
    {

        $data = [
            'title' => 'Tambah Anggota',
        ];


        return view('pages/formtambah', $data);
    }

    public function delete($id)
    {
        // $this->session->setFlashdata('titid', 'delete');
        // unset($_SESSION['titid']);
        $this->anggotaModel->delete($id);
        // return redirect('table');
    }
}
