<?php
namespace App\Controllers;

class SelamatDatang extends BaseController {

    public function hal_awal(){
        return 'hello saya belajar ci4';
    }

    public function beranda_login(){
        return view('halaman/login');

        return view('halaman/login',[
            'vd' => $this->session->getFlashData('validator'),
            'email' => $this->session->get('email'),
            'sandi' => $this->session->get('sandi')
        ]);
    }
     public function daftar_member(){
                return view('halaman/daftar_member');
            }
        
            public function hal_beranda(){
                return view('halaman/beranda', [
                    'email' => $this->session->get('email'),
                    'sandi' => $this->session->get('sandi')
                ]);
            }
        } 