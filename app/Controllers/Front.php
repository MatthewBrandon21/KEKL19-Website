<?php

namespace App\Controllers;

use App\Models\NewsModel;

class Front extends BaseController
{
    protected $db;
    protected $newsModel;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->newsModel = new NewsModel();
    }
    public function index()
    {
        $data = [
            'news' => $this->newsModel->getNews()
        ];
        return view('front/home', $data);
    }

    public function aboutus()
    {
        return view('front/aboutus');
    }
}
