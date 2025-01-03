<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\BeritaModels;

class Berita extends BaseController
{
    protected $berita;

    public function __construct()
    {
        $this->berita = new BeritaModels();
    }

    public function index()
    {
        $berita = $this->berita->findAll();
        $data = [
            'title' => 'Data berita',
            'berita' => $berita
        ];
        return view('admin/berita/index', $data);
    }

    public function tambah()
    {
        return view('admin/berita/tambah');
    }

    public function simpan()
    {
        // Validasi input
        $validation = $this->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
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
        $foto = $this->request->getFile('foto');

        if ($foto->isValid() && !$foto->hasMoved()) {
            $newName = $foto->getRandomName();
            $foto->move(ROOTPATH . 'public/foto/berita', $newName);
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal mengupload foto.');
        }

        $this->berita->save([
            'nama' => $nama,
            'deskripsi' => $deskripsi,
            'foto' => $newName,
            'dibuat_tanggal' => date('Y-m-d')
        ]);

        return redirect()->to('/admin/berita')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function edit($id_berita)
    {
        $berita = $this->berita->find($id_berita);

        if (!$berita) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Berita tidak ditemukan.');
        }

        $data = [
            'title' => 'Edit Berita',
            'berita' => $berita
        ];

        return view('admin/berita/edit', $data);
    }

    public function update($id_berita)
    {
        // Validasi input
        $validation = $this->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
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
        $foto = $this->request->getFile('foto');

        $berita = $this->berita->find($id_berita);

        $newName = $berita['foto'];

        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $newName = $foto->getRandomName();
            $foto->move(ROOTPATH . 'public/foto/berita', $newName);
            if (file_exists(ROOTPATH . 'public/foto/berita/' . $berita['foto'])) {
                unlink(ROOTPATH . 'public/foto/berita/' . $berita['foto']);
            }
        }

        $this->berita->update($id_berita, [
            'nama' => $nama,
            'deskripsi' => $deskripsi,
            'foto' => $newName,
        ]);

        return redirect()->to('/admin/berita')->with('success', 'Berita berhasil diupdate.');
    }

    public function hapus($id_berita)
    {
        $berita = $this->berita->find($id_berita);

        if (file_exists(ROOTPATH . 'public/foto/berita/' . $berita['foto'])) {
            unlink(ROOTPATH . 'public/foto/berita/' . $berita['foto']);
        }

        $this->berita->delete($id_berita);

        return redirect()->to('/admin/berita')->with('success', 'Berita berhasil dihapus.');
    }
}
