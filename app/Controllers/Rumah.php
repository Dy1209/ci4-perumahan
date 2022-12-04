<?php

namespace App\Controllers;

use App\Models\RumahModel;

class Rumah extends BaseController
{
    protected $RumahModel;
    public function __construct()
    {
        $this->RumahModel = new RumahModel();
    }
    
    public function index(){

        $data = [
            'title' => 'Daftar Rumah',
            'rumah' => $this->RumahModel->getRumah()
        ];

        return view('admin/rumah/index', $data);
    }
    
    public function detailRumah($slug){
        $data = [
            'title' => 'Detail Rumah',
            'rumah' => $this->RumahModel->getRumah($slug)
        ];

        //jika data tidak ada di tabel
        if(empty($data['rumah'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Alamat rumah '. $slug . ' tidak ditemukan');
        }

        return view('admin/rumah/detailRumah', $data);
    }

    public function create(){
        //session();
        $data = [
            'title' => 'Tambah Data Rumah | Admin GOSIPP',
            'validation' => \Config\Services::validation()
        ];
        
        return view('admin/pages/tambahRumah', $data);
    }

    public function save(){

        //validasi
        if(!$this->validate([
            'kode_rumah' => [
                'rules' => 'required|max_length[3]|is_unique[rumah.kode_rumah]',
                'errors' => [
                    'required' => 'Kode rumah harus diisi.',
                    'max_length' => 'Kode rumah terdiri dari 3 karakter. (contoh: A01)',
                    'is_unique' => 'Kode rumah tersebut sudah ada, silahkan gunakan kode rumah yang lain.'
                ]
            ],
            'alamat' => [
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => '{field} rumah harus diisi.',
                    'max_length' => 'Input {field} terlalu banyak'
                ]
                ],
            'harga' => [
                'rules' => 'required|max_length[50]',
                'errors' => [
                    'required' => '{field} rumah harus diisi.',
                    'max_length' => 'Input {field} terlalu banyak'
                ]
                ],
            'luas_area' => [
                'rules' => 'required|max_length[50]',
                'errors' => [
                    'required' => '{field} rumah harus diisi.',
                    'max_length' => 'Input {field} terlalu banyak'
                ]
                ],
            'kamar_tidur' => [
                'rules' => 'required|max_length[50]',
                'errors' => [
                    'required' => '{field} rumah harus diisi.',
                    'max_length' => 'Input {field} terlalu banyak'
                ]
                ],
            'kamar_mandi' => [
                'rules' => 'required|max_length[50]',
                'errors' => [
                    'required' => '{field} rumah harus diisi.',
                    'max_length' => 'Input {field} terlalu banyak'
                ]
                ],
            'garasi' => [
                'rules' => 'required|max_length[50]',
                'errors' => [
                    'required' => '{field} rumah harus diisi.',
                    'max_length' => 'Input {field} terlalu banyak'
                ]
                ],
                'gambar' => [
                    'rules' => 'is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'is_image' => 'yang anda pilih bukan gambar',
                        'mime_in' => 'yang anda pilih bukan gambar'
                    ]
                    ]
        ])){

            return redirect()->to('/rumah/create')->withInput();
        }

        //ambil gambar
        $fileGambar = $this->request->getFile('gambar');
        //ada gambar yg diupload apa engga
        if($fileGambar->getError() == 4){
            $namaGambar = 'default.jpg';
        }
        //pindahkan file ke folder img
        $fileGambar->move('img/rumah');
        //ambil nama file
        $namaGambar = $fileGambar->getName();

        $slug = url_title($this->request->getVar('kode_rumah'), '-', true);
        $this->RumahModel->save([
            'kode_rumah' => $this->request->getVar('kode_rumah'),
            'slug' => $slug,
            'alamat' => $this->request->getVar('alamat'),
            'harga' => $this->request->getVar('harga'),
            'luas_area' => $this->request->getVar('luas_area'),
            'kamar_tidur' => $this->request->getVar('kamar_tidur'),
            'kamar_mandi' => $this->request->getVar('kamar_mandi'),
            'garasi' => $this->request->getVar('garasi'),
            'gambar' => $namaGambar
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('rumah');
    }

    public function delete($id){

        //cari gambar berdasarkan id
        $rumah = $this->RumahModel->find($id);

        //cek default
        if($rumah['gambar'] != 'default.jpg'){
            //hapus gambar
            unlink('img/rumah/' . $rumah['gambar']);
        }

        $this->RumahModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        
        return redirect()->to('/rumah');
    }


    public function edit($slug){
        
        $data = [
            'title' => 'Ubah Data Rumah | Admin GOSIPP',
            'validation' => \Config\Services::validation(),
            'rumah' => $this->RumahModel->getRumah($slug)
        ];
        
        return view('admin/pages/editRumah', $data);
    }

    public function update($id){

        //cek

        $rumahLama = $this->RumahModel->getRumah($this->request->getVar('slug'));
        if($rumahLama['kode_rumah'] == $this->request->getVar('kode_rumah')){
            $rule_kode_rumah = 'required';
        }else{
            $rule_kode_rumah = 'required|max_length[3]|is_unique[rumah.kode_rumah]';
        }


        //validasi
        if(!$this->validate([
            'kode_rumah' => [
                'rules' => $rule_kode_rumah,
                'errors' => [
                    'required' => 'Kode rumah harus diisi.',
                    'max_length' => 'Kode rumah terdiri dari 3 karakter. (contoh: A01)',
                    'is_unique' => 'Kode rumah tersebut sudah ada, silahkan gunakan kode rumah yang lain.'
                ]
            ],
            'alamat' => [
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => '{field} rumah harus diisi.',
                    'max_length' => 'Input {field} terlalu banyak'
                ]
                ],
            'harga' => [
                'rules' => 'required|max_length[50]',
                'errors' => [
                    'required' => '{field} rumah harus diisi.',
                    'max_length' => 'Input {field} terlalu banyak'
                ]
                ],
            'luas_area' => [
                'rules' => 'required|max_length[50]',
                'errors' => [
                    'required' => '{field} rumah harus diisi.',
                    'max_length' => 'Input {field} terlalu banyak'
                ]
                ],
            'kamar_tidur' => [
                'rules' => 'required|max_length[50]',
                'errors' => [
                    'required' => '{field} rumah harus diisi.',
                    'max_length' => 'Input {field} terlalu banyak'
                ]
                ],
            'kamar_mandi' => [
                'rules' => 'required|max_length[50]',
                'errors' => [
                    'required' => '{field} rumah harus diisi.',
                    'max_length' => 'Input {field} terlalu banyak'
                ]
                ],
            'garasi' => [
                'rules' => 'required|max_length[50]',
                'errors' => [
                    'required' => '{field} rumah harus diisi.',
                    'max_length' => 'Input {field} terlalu banyak'
                ]
                ],
            'gambar' => [
                'rules' => 'is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'is_image' => 'yang anda pilih bukan gambar',
                    'mime_in' => 'yang anda pilih bukan gambar'
                ]
                ]
        ])){

            return redirect()->to('/rumah/edit/' . $this->request->getVar('slug'))->withInput();
        }

        //ambil gambar
        $fileGambar = $this->request->getFile('gambar');
        //cek gambar apakah tetap gambar lama
        if($fileGambar->getError() == 4){
            $namaGambar = $this->request->getVar('gambarLama');
        }else{
            //ambil gambar
            $fileGambar = $this->request->getFile('gambar');
            //pindahkan file ke folder img
            $fileGambar->move('img/rumah');
            //ambil nama file
            $namaGambar = $fileGambar->getName();
            unlink('img/rumah/' . $this->request->getVar('gambarLama'));

        }

        $slug = url_title($this->request->getVar('kode_rumah'), '-', true);
        $this->RumahModel->save([
            'id' => $id,
            'kode_rumah' => $this->request->getVar('kode_rumah'),
            'slug' => $slug,
            'alamat' => $this->request->getVar('alamat'),
            'harga' => $this->request->getVar('harga'),
            'luas_area' => $this->request->getVar('luas_area'),
            'kamar_tidur' => $this->request->getVar('kamar_tidur'),
            'kamar_mandi' => $this->request->getVar('kamar_mandi'),
            'garasi' => $this->request->getVar('garasi'),
            'gambar' => $namaGambar
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('rumah');
    }
}