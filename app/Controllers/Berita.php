<?php

namespace App\Controllers;

use App\Models\BeritaModels;

class Berita extends BaseController
{
    protected $berita;

    public function __construct()
    {
        $this->berita = new BeritaModels();
    }

    // Method untuk menampilkan daftar berita
    public function index()
    {
        $berita = $this->berita->findAll();

        $data = [
            'title' => 'Berita Terbaru',
            'berita' => $berita,
        ];

        return view('berita', $data);  // View untuk halaman utama berita
    }

    // Method untuk menampilkan detail berita berdasarkan ID
    public function detail($id_berita)
    {
        // Ambil data berita berdasarkan ID
        $berita = $this->berita->find($id_berita);

        // Jika berita tidak ditemukan, tampilkan pesan error
        if (!$berita) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Berita dengan ID $id_berita tidak ditemukan.");
        }

        // Kirim data ke view
        $data = [
            'title' => $berita['nama'], // Judul di tab browser
            'berita' => $berita,       // Data berita
        ];

        return view('detail_berita', $data);
    }
}
