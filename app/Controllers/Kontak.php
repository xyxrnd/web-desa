<?php

namespace App\Controllers;

class Kontak extends BaseController
{
    // Method untuk menampilkan daftar layanan
    public function index()
    {
        return view('kontak');  // View untuk halaman utama layanan
    }
}
