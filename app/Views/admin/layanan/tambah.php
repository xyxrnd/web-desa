<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Layanan</title>
</head>

<body>
    <h1>Tambah Layanan Baru</h1>
    <form action="<?= base_url('admin/layanan/store'); ?>" method="post">
        <label for="nama_layanan">Nama Layanan</label><br>
        <input type="text" name="nama_layanan" id="nama_layanan" required><br><br>

        <label for="deskripsi">Deskripsi</label><br>
        <textarea name="deskripsi" id="deskripsi" required></textarea><br><br>

        <button type="submit">Simpan</button>
        <a href="<?= base_url('layanan'); ?>">Kembali</a>
    </form>
</body>

</html>