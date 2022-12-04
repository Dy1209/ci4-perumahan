<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $useTimrstamps = true;

    public function getAdmin($slug = false){
        if($slug == false){
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}