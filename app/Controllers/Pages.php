<?php

namespace App\Controllers;

use App\Models\AnggotaModel;

class Pages extends BaseController
{
    protected $session, $validation, $anggotaModel;
    public function __construct()
    {
        $this->anggotaModel = new AnggotaModel();
        $this->session = \Config\Services::session();
        $this->validation = \Config\Services::validation();
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
        $anggota = $this->anggotaModel->asObject()->findAll();

        $data = [
            'title' => 'Table Anggota',
            'slug_title' => 'Table',
            'slug_sub_title' => 'Table Anggota',
            'anggota' => $anggota
        ];

        return view('pages/table/table', $data);
    }

    public function create()
    {
        $this->validation->setRules(['first_name' => 'required']);
        $isDataValid = $this->validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if ($isDataValid) {
            $this->anggotaModel->insert([
                "first_name" => $this->request->getPost('first_name'),
                "last_name" => $this->request->getPost('last_name'),
                "email" => $this->request->getPost('email'),
                "country" => $this->request->getPost('country'),
            ]);
            $this->session->setFlashdata('success', 'Yeay! Success add data');
            return redirect('table');
        }
    }

    public function delete($id)
    {
        // $this->session->setFlashdata('titid', 'delete');
        // unset($_SESSION['titid']);
        $this->anggotaModel->delete($id);
        // return redirect('table');
    }
}
