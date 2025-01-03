<?= $this->extend('layouts/base') ?>
<?= $this->section('title') ?>Admin Agenda<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Agenda</h1>
        <a href="<?= base_url('admin/agenda/tambah') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-500"></i> Tambah</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Agenda</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="initabel" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>tanggal</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Foto</th>
                            <th>Dibuat Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php $no = 1; ?>
                        <?php foreach ($agenda as $a) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= esc($a['tanggal']) ?></td>
                                <td><?= esc($a['nama_agenda']) ?></td>
                                <td><?= esc($a['deskripsi']) ?></td>
                                <td><img src="<?= base_url('foto/agenda/' . $a['foto_agenda']) ?>" alt="<?= $a['nama_agenda'] ?>" style="width: 200px; heigh:10px;"></td>
                                <td><?= esc($a['dibuat_tanggal']) ?></td>
                                <td>
                                    <a href="<?= base_url('admin/agenda/edit/' . $a['id_agenda']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?= base_url('admin/agenda/hapus/' . $a['id_agenda']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus menu ini?')">Hapus</a>
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