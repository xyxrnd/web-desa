<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\AgendaModels;

class Agenda extends BaseController
{
    protected $agenda;

    public function __construct()
    {
        $this->agenda = new AgendaModels();
    }

    public function index()
    {
        $agenda = $this->agenda->findAll();
        $data = [
            'title' => 'Data agenda',
            'agenda' => $agenda
        ];
        return view('admin/agenda/index', $data);
    }

    public function tambah()
    {
        return view('admin/agenda/tambah');
    }

    public function simpan()
    {
        // Validasi input
        $validation = $this->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'foto' => [
                'rules' => 'uploaded[foto]|is_image[foto]',
                'errors' => [
                    'uploaded' => 'Foto wajib diupload.',
                    'is_image' => 'File yang diupload harus berupa gambar.'
                ]
            ]
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $nama = $this->request->getPost('nama');
        $deskripsi = $this->request->getPost('deskripsi');
        $tanggal = $this->request->getPost('tanggal');
        $foto = $this->request->getFile('foto');

        if ($foto->isValid() && !$foto->hasMoved()) {
            $newName = $foto->getRandomName();
            $foto->move(ROOTPATH . 'public/foto/agenda', $newName);
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal mengupload foto.');
        }

        $this->agenda->save([
            'nama_agenda' => $nama,
            'deskripsi' => $deskripsi,
            'foto_agenda' => $newName,
            'dibuat_tanggal' => date('Y-m-d'),
            'tanggal' => $tanggal
        ]);

        return redirect()->to('/admin/agenda')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function edit($id_agenda)
    {
        $agenda = $this->agenda->find($id_agenda);
        $data = [
            'title' => 'Edit Berita',
            'agenda' => $agenda
        ];

        return view('admin/agenda/edit', $data);
    }

    public function update($id_agenda)
    {
        // Validasi input
        $validation = $this->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'foto' => [
                'rules' => 'is_image[foto]',
                'errors' => [
                    'is_image' => 'File yang diupload harus berupa gambar.'
                ]
            ]
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $nama = $this->request->getPost('nama');
        $deskripsi = $this->request->getPost('deskripsi');
        $tanggal = $this->request->getPost('tanggal');
        $foto = $this->request->getFile('foto');

        $agenda = $this->agenda->find($id_agenda);

        $newName = $agenda['foto_agenda'];

        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $newName = $foto->getRandomName();
            $foto->move(ROOTPATH . 'public/foto/agenda', $newName);
            if (file_exists(ROOTPATH . 'public/foto/agenda/' . $agenda['foto'])) {
                unlink(ROOTPATH . 'public/foto/agenda/' . $agenda['foto']);
            }
        }

        $this->agenda->update($id_agenda, [
            'nama_agenda' => $nama,
            'deskripsi' => $deskripsi,
            'foto_agenda' => $newName,
            'tanggal' => $tanggal,
        ]);

        return redirect()->to('/admin/agenda')->with('success', 'Berita berhasil diupdate.');
    }

    public function hapus($id_agenda)
    {
        $agenda = $this->agenda->find($id_agenda);

        if (file_exists(ROOTPATH . 'public/foto/agenda/' . $agenda['foto_agenda'])) {
            unlink(ROOTPATH . 'public/foto/agenda/' . $agenda['foto_agenda']);
        }

        $this->agenda->delete($id_agenda);

        return redirect()->to('/admin/agenda')->with('success', 'Berita berhasil dihapus.');
    }
}
