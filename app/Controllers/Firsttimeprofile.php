<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Firsttimeprofile extends BaseController
{
    protected $db;
    protected $usersModel;
    protected $usersAuth;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->usersModel = new UsersModel();
        $this->usersAuth = new \Myth\Auth\Models\UserModel();
    }
    public function profile_edit_data_action($id)
    {
        if (!$this->validate([
            'fullname' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Fullname must be filled'
                ]
            ],
            'birthdate' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Birthdate must be filled'
                ]
            ],
            'kelasx' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Class X must be filled'
                ]
            ],
            'kelasxi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Class XI must be filled'
                ]
            ],
            'kelasxii' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Class XII must be filled'
                ]
            ],
            'tempatstudikerja' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tempat Studi / Kerja must be filled'
                ]
            ],
            'jurusanbagian' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jurusan / Bagian must be filled'
                ]
            ],
            'location' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Location must be filled'
                ]
            ]
        ])) {
            return redirect()->to('/profile-form')->withInput();
        }
        $this->usersModel->save([
            'id' => $id,
            'fullname' => $this->request->getVar('fullname'),
            'birthdate' => $this->request->getVar('birthdate'),
            'kelasx' => $this->request->getVar('kelasx'),
            'kelasxi' => $this->request->getVar('kelasxi'),
            'kelasxii' => $this->request->getVar('kelasxii'),
            'tempatstudikerja' => $this->request->getVar('tempatstudikerja'),
            'jurusanbagian' => $this->request->getVar('jurusanbagian'),
            'mobilenumber' => $this->request->getVar('mobilenumber'),
            'line' => $this->request->getVar('line'),
            'instagram' => $this->request->getVar('instagram'),
            'facebook' => $this->request->getVar('facebook'),
            'twitter' => $this->request->getVar('twitter'),
            'youtube' => $this->request->getVar('youtube'),
            'linkedin' => $this->request->getVar('linkedin'),
            'website' => $this->request->getVar('website'),
            'sec_email' => $this->request->getVar('sec_email'),
            'location' => $this->request->getVar('location'),
            'bio' => $this->request->getVar('bio'),
        ]);
        session()->setFlashdata('pesan', 'Success Edit Profile');
        return redirect()->to('/profile');
    }
    public function profile_form()
    {
        $usersdata = $this->usersAuth->find(user_id());
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Welcome !!']),
            'page_title' => view('partials/page-title', ['title' => 'Welcome !!', 'li_1' => 'Welcome Page']),
            'validation' => \Config\Services::validation(),
            'users' => $usersdata
        ];
        return view('dashboard/firsttime-profile-form', $data);
    }
}
