<?= $this->extend('layouts/base') ?>
<?= $this->section('title') ?>Admin Galeri<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Galeri</h1>
        <a href="<?= base_url('admin/galeri/tambah') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-500"></i> Tambah</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Galeri</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="initabel" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Foto</th>
                            <th>Dibuat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php $no = 1; ?>
                        <?php foreach ($galeri as $g) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= esc($g['judul']) ?></td>
                                <td><img src="<?= base_url('foto/galeri/' . $g['foto']) ?>" alt="<?= $g['judul'] ?>" style="width: 200px; heigh:10px;"></td>
                                <td><?= esc($g['dibuat']) ?></td>
                                <td>
                                    <a href="<?= base_url('admin/galeri/edit/' . $g['id_galeri']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?= base_url('admin/galeri/hapus/' . $g['id_galeri']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus menu ini?')">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <!-- Tambahkan baris lainnya -->
                    </tbody>
                </table>


                <!-- <table id="dataTable" class="table table-striped table-bordered">
                    
                </table> -->
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>