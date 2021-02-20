<?php

namespace App\Controllers;

class Aplikasi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Demo Aplikasi',
            'penulis' => 'Rifki Taufik'
        ];
        return view('aplikasi/demo', $data);
    }
    public function regular()
    {
        $data = [
            'title' => 'Paket Aplikasi Regular',
            'penulis' => 'Rifki Taufik'
        ];
        return view('aplikasi/regular', $data);
    }
    public function premium()
    {
        $data = [
            'title' => 'Paket Aplikasi Premium',
            'penulis' => 'Rifki Taufik'
        ];
        return view('aplikasi/premium', $data);
    }
}
