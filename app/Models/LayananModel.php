<?php

namespace App\Models;

use CodeIgniter\Model;

class LayananModel extends Model
{
    protected $table = 'tbl_layanan';  // Nama tabel
    protected $primaryKey = 'id_layanan';  // Primary key
    protected $allowedFields = ['nama_layanan', 'deskripsi'];  // Kolom yang boleh diisi
    // protected $useTimestamps = true;  // Tambahkan jika Anda menggunakan created_at dan updated_at

    // Tambahkan metode tambahan jika diperlukan
}
