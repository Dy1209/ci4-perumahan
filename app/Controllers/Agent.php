<?php

namespace App\Controllers;

use App\Models\AgentModel;

class Agent extends BaseController
{
    protected $AgentModel;
    public function __construct()
    {
        $this->AgentModel = new AgentModel();
    }
    
    public function index(){

        $data = [
            'title' => 'Daftar Agent',
            'agent' => $this->AgentModel->getAgent()
        ];

        return view('admin/agent/index', $data);
    }
    
    public function detailAgent($slug){
        $data = [
            'title' => 'Detail Agent',
            'agent' => $this->AgentModel->getAgent($slug)
        ];

        //jika data tidak ada di tabel
        if(empty($data['agent'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama agent '. $slug . ' tidak ditemukan');
        }

        return view('admin/agent/detailAgent', $data);
    }

    public function create(){
        $data = [
            'title' => 'Tambah Data Agent | Admin GOSIPP',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/pages/tambahAgent', $data);
    }

    public function save(){

        //validasi
        if(!$this->validate([
            'nama_agent' => [
                'rules' => 'required|max_length[255]|is_unique[agent.nama_agent]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'max_length' => 'input {field} terlalu banyak.',
                    'is_unique' => '{field} tersebut terdaftar.'
                ]
                ],
            'email_agent' => [
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'max_length' => 'input {field} terlalu banyak.'
                ]
                ],
            'wa_agent' => [
                'rules' => 'required|max_length[13]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'max_length' => 'input {field} terlalu banyak.'
                ]
                ],
            'jk_agent' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
                ],
                'foto_agent' => [
                    'rules' => 'is_image[foto_agent]|mime_in[foto_agent,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'is_image' => 'yang anda pilih bukan sebuah foto',
                        'mime_in' => 'yang anda pilih bukan sebuah foto'
                    ]
                    ],
            'alamat_agent' => [
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'max_length' => 'input {field} terlalu banyak.'
                ]
            ]
            
        ])){
            return redirect()->to('/agent/create')->withInput();
        }

        //ambil gambar
        $fileFoto_agent = $this->request->getFile('foto_agent');
        //ada foto_agent yg diupload apa engga
        if($fileFoto_agent->getError() == 4){
            $namaFoto_agent = 'default.jpg';
        }
        //pindahkan file ke folder img
        $fileFoto_agent->move('img/agent');
        //ambil nama file
        $namaFoto_agent = $fileFoto_agent->getName();

        $slug = url_title($this->request->getVar('nama_agent'), '-', true);
        $this->AgentModel->save([
            'nama_agent' => $this->request->getVar('nama_agent'),
            'slug' => $slug,
            'email_agent' => $this->request->getVar('email_agent'),
            'wa_agent' => $this->request->getVar('wa_agent'),
            'jk_agent' => $this->request->getVar('jk_agent'),
            'foto_agent' => $namaFoto_agent,
            'alamat_agent' => $this->request->getVar('alamat_agent')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('agent');
    }

    public function delete($id_agent){

        //cari gambar berdasarkan id
        $agent = $this->AgentModel->find($id_agent);

        //cek default
        if($agent['foto_agent'] != 'default.jpg'){
            //hapus gambar
            unlink('img/agent/' . $agent['foto_agent']);
        }

        $this->AgentModel->delete($id_agent);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        
        return redirect()->to('/agent');
    }

    public function edit($slug){

        $data = [
            'title' => 'Edit Data Agent | Admin GOSIPP',
            'validation' => \Config\Services::validation(),
            'agent' => $this->AgentModel->getAgent($slug)
        ];

        return view('admin/pages/editAgent', $data);
    }

    public function update($id_agent){

        //cek
        $agentLama = $this->AgentModel->getAgent($this->request->getVar('slug'));
        if($agentLama['nama_agent'] == $this->request->getVar('nama_agent')){
            $rule_nama_agent = 'required';
        }else{
            $rule_nama_agent = 'required|max_length[255]|is_unique[agent.nama_agent]';
        }

        //validasi
        if(!$this->validate([
            'nama_agent' => [
                'rules' => $rule_nama_agent,
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'max_length' => 'input {field} terlalu banyak.',
                    'is_unique' => '{field} tersebut terdaftar.'
                ]
                ],
            'email_agent' => [
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'max_length' => 'input {field} terlalu banyak.'
                ]
                ],
            'wa_agent' => [
                'rules' => 'required|max_length[13]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'max_length' => 'input {field} terlalu banyak.'
                ]
                ],
            'jk_agent' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
                ],
                'foto_agent' => [
                    'rules' => 'is_image[foto_agent]|mime_in[foto_agent,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'is_image' => 'yang anda pilih bukan sebuah foto',
                        'mime_in' => 'yang anda pilih bukan sebuah foto'
                    ]
                    ],
            'alamat_agent' => [
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'max_length' => 'input {field} terlalu banyak.'
                ]
            ]
            
        ])){
            return redirect()->to('/agent/edit/' . $this->request->getVar('slug'))->withInput();
        }

        //ambil gambar
        $fileFoto_agent = $this->request->getFile('foto_agent');
        //cek foto_agent apakah tetap foto_agent lama
        if($fileFoto_agent->getError() == 4){
            $namaFoto_agent = $this->request->getVar('foto_agentLama');
        }else{
            //ambil foto_agent
            $fileFoto_agent = $this->request->getFile('foto_agent');
            //pindahkan file ke folder img
            $fileFoto_agent->move('img/agent');
            //ambil nama file
            $namaFoto_agent = $fileFoto_agent->getName();
            unlink('img/agent/' . $this->request->getVar('foto_agentLama'));

        }

        $slug = url_title($this->request->getVar('nama_agent'), '-', true);
        $this->AgentModel->save([
            'id_agent' => $id_agent,
            'nama_agent' => $this->request->getVar('nama_agent'),
            'slug' => $slug,
            'email_agent' => $this->request->getVar('email_agent'),
            'wa_agent' => $this->request->getVar('wa_agent'),
            'jk_agent' => $this->request->getVar('jk_agent'),
            'foto_agent' => $namaFoto_agent,
            'alamat_agent' => $this->request->getVar('alamat_agent')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('agent');
    }

}