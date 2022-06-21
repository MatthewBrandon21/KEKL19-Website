<?php

namespace App\Models;

use CodeIgniter\Model;

class ReportModel extends Model
{
    protected $table = 'report';
    protected $useTimestamps = true;
    protected $allowedFields = ['userid', 'title', 'body', 'report_image', 'response', 'status'];

    public function getReport($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
    public function getReportUser($userid)
    {
        return $this->where(['userid' => $userid])->findAll();
    }
    public function search($keyword)
    {
        return $this->table('report')->like('title', $keyword)->orLike('body', $keyword);
    }
}
