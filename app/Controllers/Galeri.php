<?php

namespace App\Controllers;

use App\Models\GaleriModels;

class Galeri extends BaseController
{
    protected $galeri;

    public function __construct()
    {
        $this->galeri = new GaleriModels();
    }

    // Method untuk menampilkan daftar galeri
    public function index()
    {
        $galeri = $this->galeri->findAll();

        $data = [
            'title' => 'galeri Terbaru',
            'galeri' => $galeri,
        ];

        return view('galeri', $data);  // View untuk halaman utama layanan
    }
}
