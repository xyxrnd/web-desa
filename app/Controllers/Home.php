<?php

namespace App\Controllers;

use App\Models\LayananModel;
use App\Models\BeritaModels;
use App\Models\AgendaModels;

class Home extends BaseController
{
    protected $layananModel, $berita, $agenda;

    public function __construct()
    {
        $this->layananModel = new LayananModel();
        $this->berita = new BeritaModels();
        $this->agenda = new AgendaModels();
    }

    // Method untuk menampilkan semua data
    public function index()
    {
        $berita = $this->berita->findAll();
        $agenda = $this->agenda->findAll();
        $layanan = $this->layananModel->findAll();
        $data = [
            'berita' => $berita,
            'agenda' => $agenda,
            'layanan' => $layanan
        ];
        return view('home', $data);  // Tampilkan ke view
    }
}
