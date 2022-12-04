<?php

namespace App\Controllers;

use App\Models\RumahModel;
use App\Models\AgentModel;

class Pages extends BaseController
{
    protected $RumahModel;
    protected $AgentModel;
    public function __construct()
    {
        $this->RumahModel = new RumahModel();
        $this->AgentModel = new AgentModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Home | GOSIPP',
            'rumah' => $this->RumahModel->getRumah(),
            'agent' => $this->AgentModel->getAgent()
        ];
        return view('pages/home', $data);
    }
    
    public function about(){
        $data = [
            'title' => 'About | GOSIPP'
        ];
        return view('pages/about', $data);
    }

    public function properties(){
        $data = [
            'title' => 'Property | GOSIPP',
            'rumah' => $this->RumahModel->getRumah()
        ];
        return view('pages/properties', $data);
    }

    public function agents(){
        $data = [
            'title' => 'Agents | GOSIPP',
            'agent' => $this->AgentModel->getAgent()
        ];
        return view('pages/agents', $data);
    }

    public function contact(){
        $data = [
            'title' => 'Contact | GOSIPP'
        ];
        return view('pages/contact', $data);
    }

    public function detail($slug){
        $data = [
            'title' => 'Detail Properties',
            'rumah' => $this->RumahModel->getRumah($slug)
        ];

        //jika data tidak ada di tabel
        if(empty($data['rumah'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Properties '. $slug . ' tidak ditemukan');
        }

        return view('pages/detail/detail', $data);
    }
    
}

?>