<?php

namespace App\Models;

use CodeIgniter\Model;

class ViewRumahModel extends Model
{
    protected $table      = 'rumah';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['kode_rumah', 'slug', 'alamat', 'harga', 'luas_area', 'kamar_tidur', 'kamar_mandi', 'garasi', 'gambar'];

    public function getRumah($slug = false){
        if($slug == false){
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
    
}