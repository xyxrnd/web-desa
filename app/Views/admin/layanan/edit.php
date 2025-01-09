<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Layanan</title>
</head>

<body>
    <h1>Edit Layanan</h1>
    <form action="<?= base_url('admin/layanan/update/' . $layanan['id_layanan']); ?>" method="post">
        <label for="nama_layanan">Nama Layanan</label><br>
        <input type="text" name="nama_layanan" id="nama_layanan" value="<?= $layanan['nama_layanan']; ?>" required><br><br>

        <label for="deskripsi">Deskripsi</label><br>
        <textarea name="deskripsi" id="deskripsi" required><?= $layanan['deskripsi']; ?></textarea><br><br>

        <button type="submit">Update</button>
        <a href="<?= base_url('layanan'); ?>">Kembali</a>
    </form>
</body>

</html>