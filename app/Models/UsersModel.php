<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $useTimestamps = true;
    protected $allowedFields = ['fullname', 'birthdate', 'kelasx', 'kelasxi', 'kelasxii', 'tempatstudikerja', 'jurusanbagian', 'mobilenumber', 'line', 'instagram', 'facebook', 'twitter', 'youtube', 'linkedin', 'website', 'sec_email', 'location', 'bio', 'user_image', 'active', 'banned'];

    public function getUsers($username = false)
    {
        if ($username == false) {
            return $this->findAll();
        }
        return $this->where(['username' => $username])->first();
    }
    public function search($keyword)
    {
        return $this->table('users')->like('fullname', $keyword)->orLike('username', $keyword);
    }
    public function count()
    {
        return $this->table('users')->countAll();
    }
}
