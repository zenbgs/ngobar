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

    public function create()
    {
        // lakukan validasi
        $data = [
            'title' => 'Tambah Anggota',
        ];
        $validation =  \Config\Services::validation();
        $validation->setRules(['first_name' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if ($isDataValid) {
            $this->anggotaModel->insert([
                "first_name" => $this->request->getPost('firs_tname'),
                "last_name" => $this->request->getPost('last_name'),
                "email" => $this->request->getPost('email'),
                "kota" => $this->request->getPost('kota'),
            ]);
            return redirect('pages/table');
        }

        // tampilkan form create
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
