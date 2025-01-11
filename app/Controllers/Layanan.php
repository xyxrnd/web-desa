<?php

namespace App\Controllers;

use App\Models\LayananModel;

class Layanan extends BaseController
{
    protected $layanan;

    public function __construct()
    {
        $this->layanan = new LayananModel();
    }

    // Method untuk menampilkan daftar layanan
    public function index()
    {
        $layanan = $this->layanan->findAll();

        $data = [
            'title' => 'layanan Terbaru',
            'layanan' => $layanan,
        ];

        return view('layanan', $data);  // View untuk halaman utama layanan
    }
}
