<?php

namespace App\Controllers;

use App\Models\AgendaModels;

class Agenda extends BaseController
{
    protected $agenda;

    public function __construct()
    {
        $this->agenda = new AgendaModels();
    }

    // Method untuk menampilkan daftar agenda
    public function index()
    {
        $agenda = $this->agenda->findAll();

        $data = [
            'agenda' => $agenda,
        ];

        return view('agenda', $data);  // View untuk halaman utama agenda
    }

    // Method untuk menampilkan detail agenda berdasarkan ID
    public function detail($id_agenda)
    {
        // Ambil data agenda berdasarkan ID
        $agenda = $this->agenda->find($id_agenda);

        // Jika agenda tidak ditemukan, tampilkan pesan error
        if (!$agenda) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("agenda dengan ID $id_agenda tidak ditemukan.");
        }

        // Kirim data ke view
        $data = [
            'title' => $agenda['nama'], // Judul di tab browser
            'agenda' => $agenda,       // Data agenda
        ];

        return view('detail_agenda', $data);
    }
}
