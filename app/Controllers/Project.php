<?php

namespace App\Controllers;

use App\Models\ProjectModel;

class Project extends BaseController
{
    protected $session, $validation, $projectModel, $db;
    public function __construct()
    {
        $this->projectModel = new ProjectModel();
        $this->session = \Config\Services::session();
        $this->validation = \Config\Services::validation();
        $this->db = \Config\Database::connect();
    }

    public function table()
    {
        // $project = $this->projectModel->asObject()->findAll();
        $result = [];
        $tampungan = [];
        $project = $this->db->query("SELECT * FROM project")->getResultArray();
        // array_push($result, $project);
        foreach ($project as $key => $loop_project) {
            $raw = $this->db->query("SELECT first_name FROM anggota WHERE id_project = '" . $loop_project['id'] . "'")->getResultArray();
            foreach ($raw as $raw_key => $raw_result) {
                $project[$key]['anggota'][] = $raw_result['first_name'];
                array_push($project);
            }
            // $result_raw['anggota'] = $raw;
            // array_push($project[$key], $result_raw);
        }



        $data = [
            'title' => 'Table Project',
            'slug_title' => 'Table',
            'slug_sub_title' => 'Table Project',
            'project' => $project
        ];

        return view('pages/table/project', $data);

        // return json_encode($project);
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
