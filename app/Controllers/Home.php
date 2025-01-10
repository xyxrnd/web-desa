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
        $berita = $this->berita->orderBy('dibuat_tanggal', 'DESC')->limit(2)->findAll();
        $agenda = $this->agenda->orderBy('dibuat_tanggal', 'DESC')->limit(2)->findAll();
        $layanan = $this->layananModel->findAll(3);
        $data = [
            'berita' => $berita,
            'agenda' => $agenda,
            'layanan' => $layanan
        ];
        return view('home', $data);
    }
}
