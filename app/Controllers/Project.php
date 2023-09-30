<?php

namespace App\Controllers;

use App\Models\ProjectModel;

class Project extends BaseController
{
    protected $session, $validation, $projectModel;
    public function __construct()
    {
        $this->projectModel = new ProjectModel();
        $this->session = \Config\Services::session();
        $this->validation = \Config\Services::validation();
    }

    public function table()
    {
        $project = $this->projectModel->asObject()->findAll();

        $data = [
            'title' => 'Table Project',
            'slug_title' => 'Table',
            'slug_sub_title' => 'Table Project',
            'project' => $project
        ];

        return view('pages/table/project', $data);
    }

    public function create()
    {
        $this->validation->setRules(['nama_project' => 'required']);
        $isDataValid = $this->validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if ($isDataValid) {
            $this->projectModel->insert([
                "nama_project" => $this->request->getPost('nama_project'),
                "client_project" => $this->request->getPost('client_project'),
                "teknologi_project" => $this->request->getPost('teknologi_project'),
                "biaya_project" => $this->request->getPost('biaya_project'),
                "status_project" => $this->request->getPost('status_project'),
                "lampiran_project" => $this->request->getPost('lampiran_project'),
            ]);
            $this->session->setFlashdata('success', 'Yeay! Success add data');
            return redirect('table/project');
        }
    }

    public function edit()
    {
        $this->validation->setRules([
            'id' => 'required',
            'nama_project' => 'required',
            'client_project' => 'required',
            'teknologi_project' => 'required',
            'biaya_project' => 'required',
            'status_project' => 'required',
            'lampiran_project' => 'required'
        ]);
        $isDataValid = $this->validation->withRequest($this->request)->run();
        if ($isDataValid) {
            $id = $this->request->getPost('id');
            $this->projectModel->update($id, [
                "nama_project" => $this->request->getPost('nama_project'),
                "client_project" => $this->request->getPost('client_project'),
                "teknologi_project" => $this->request->getPost('teknologi_project'),
                "biaya_project" => $this->request->getPost('biaya_project'),
                "status_project" => $this->request->getPost('status_project'),
                "lampiran_project" => $this->request->getPost('lampiran_project')
            ]);
            $this->session->setFlashdata('success', 'Yeay! success edit data');
            return redirect('table/project');
        }
    }

    public function delete($id)
    {
        $this->projectModel->delete($id);
        $this->session->setFlashdata('success', 'Yeay! success remove data');
    }
}
