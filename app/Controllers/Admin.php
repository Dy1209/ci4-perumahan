<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        /* return view('auth/login'); */
        $data = [
            'title' => 'Home | Admin GOSIPP'
        ];
        return view('admin/pages/homeAdmin', $data);
    }

    /* public function registrasi(){
        return view('auth/register');
    }
 */
    /* public function tambahRumah(){
        $data = [
            'title' => 'Tambah Data Rumah | Admin GOSIPP'
        ];
        return view('admin/pages/tambahRumah', $data);
    } */

    /* public function tambahAgent(){
        $data = [
            'title' => 'Tambah Data Agent | Admin GOSIPP'
        ];
        return view('admin/pages/tambahAgent', $data);
    } */

    /* public function daftarRumah(){
        $data = [
            'title' => 'Tambah Data Agent | Admin GOSIPP'
        ];
        return view('admin/pages/daftarRumah', $data);
    }
 */
}
