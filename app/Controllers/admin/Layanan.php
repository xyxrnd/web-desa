<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\LayananModel;

class Layanan extends BaseController
{
    protected $layananModel;

    public function __construct()
    {
        $this->layananModel = new LayananModel();
    }

    // Method untuk menampilkan semua data
    public function index()
    {
        $data['layanan'] = $this->layananModel->findAll();
        return view('admin/layanan/index', $data);  // Tampilkan ke view
    }

    // Method untuk menampilkan form tambah
    public function tambah()
    {
        return view('admin/layanan/tambah');  // Tampilkan form tambah
    }

    // Method untuk menyimpan data
    public function store()
    {
        $this->layananModel->save([
            'nama_layanan' => $this->request->getPost('nama_layanan'),
            'deskripsi'    => $this->request->getPost('deskripsi'),
        ]);
        return redirect()->to('/admin/layanan');  // Redirect ke halaman utama
    }

    // Method untuk menampilkan form edit
    public function edit($id_layanan)
    {
        $data['layanan'] = $this->layananModel->find($id_layanan);
        return view('admin/layanan/edit', $data);
    }

    // Method untuk memperbarui data
    public function update($id_layanan)
    {
        $this->layananModel->update($id_layanan, [
            'nama_layanan' => $this->request->getPost('nama_layanan'),
            'deskripsi'    => $this->request->getPost('deskripsi'),
        ]);
        return redirect()->to('/admin/layanan');
    }

    // Method untuk menghapus data
    public function delete($id_layanan)
    {
        $this->layananModel->delete($id_layanan);
        return redirect()->to('/admin/layanan');
    }
}
