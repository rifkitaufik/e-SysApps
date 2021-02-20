<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function tentang()
    {
        $data = [
            'title' => 'e-Sys Application'
        ];
        return view('page/tentang', $data);
    }

    public function whatesis()
    {
        $data = [
            'title' => 'Apa itu e-Sys Application'
        ];
        return view('page/what-esis', $data);
    }

    public function kerjasama()
    {
        $data = [
            'title' => 'Kerjasama e-Sys Application'
        ];
        return view('page/kerjasama', $data);
    }
}
