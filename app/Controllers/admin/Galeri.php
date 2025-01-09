<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\GaleriModels;

class Galeri extends BaseController
{
    protected $galeri;

    public function __construct()
    {
        $this->galeri = new GaleriModels();
    }

    public function index()
    {
        $galeri = $this->galeri->findAll();
        $data = [
            'title' => 'Data galeri',
            'galeri' => $galeri
        ];
        return view('admin/galeri/index', $data);
    }

    public function tambah()
    {
        return view('admin/galeri/tambah');
    }

    public function simpan()
    {
        // Validasi input
        $validation = $this->validate([
            'judul' => 'required',
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

        $judul = $this->request->getPost('judul');
        $foto = $this->request->getFile('foto');

        if ($foto->isValid() && !$foto->hasMoved()) {
            $newName = $foto->getRandomName();
            $foto->move(ROOTPATH . 'public/foto/galeri', $newName);
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal mengupload foto.');
        }

        $this->galeri->save([
            'judul' => $judul,
            'foto' => $newName,
            'dibuat' => date('Y-m-d')
        ]);

        return redirect()->to('/admin/galeri')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function edit($id_galeri)
    {
        $galeri = $this->galeri->find($id_galeri);

        if (!$galeri) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Berita tidak ditemukan.');
        }

        $data = [
            'galeri' => $galeri
        ];

        return view('admin/galeri/edit', $data);
    }

    public function update($id_galeri)
    {
        // Validasi input
        $validation = $this->validate([
            'judul' => 'required',
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

        $judul = $this->request->getPost('judul');
        $foto = $this->request->getFile('foto');

        $galeri = $this->galeri->find($id_galeri);

        $newName = $galeri['foto'];

        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $newName = $foto->getRandomName();
            $foto->move(ROOTPATH . 'public/foto/galeri', $newName);
            if (file_exists(ROOTPATH . 'public/foto/galeri/' . $galeri['foto'])) {
                unlink(ROOTPATH . 'public/foto/galeri/' . $galeri['foto']);
            }
        }

        $this->galeri->update($id_galeri, [
            'judul' => $judul,
            'foto' => $newName,
        ]);

        return redirect()->to('/admin/galeri')->with('success', 'Berita berhasil diupdate.');
    }

    public function hapus($id_galeri)
    {
        $galeri = $this->galeri->find($id_galeri);

        if (file_exists(ROOTPATH . 'public/foto/galeri/' . $galeri['foto'])) {
            unlink(ROOTPATH . 'public/foto/galeri/' . $galeri['foto']);
        }

        $this->galeri->delete($id_galeri);

        return redirect()->to('/admin/galeri')->with('success', 'Berita berhasil dihapus.');
    }
}
