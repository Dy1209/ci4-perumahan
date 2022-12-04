<?php

namespace App\Models;

use CodeIgniter\Model;

class AgentModel extends Model
{
    protected $table      = 'agent';
    protected $primaryKey = 'id_agent';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_agent', 'slug', 'email_agent', 'wa_agent', 'jk_agent', 'foto_agent', 'alamat_agent'];

    public function getAgent($slug = false){
        if($slug == false){
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}