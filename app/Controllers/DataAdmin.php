<?php

namespace App\Controllers;

use App\Models\AdminModel;

class DataAdmin extends BaseController
{
    protected $AdminModel;
    public function __construct()
    {
        $this->AdminModel = new AdminModel();
    }
    
    public function index(){

        $data = [
            'title' => 'Daftar Admin',
            'dataadmin' => $this->AdminModel->getAdmin()
        ];

        return view('admin/dataadmin/index', $data);
    }
    
    /* public function detailAdmin($slug){
        $data = [
            'title' => 'Detail Admin',
            'dataadmin' => $this->AdminModel->getAdmin($slug)
        ];

        return view('admin/dataadmin/detailAdmin', $data);
    } */

}

?>