<?= $this->extend('layouts/base') ?>
<?= $this->section('title') ?>Edit Agenda<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Agenda</h1>
        <a href="<?= base_url('admin/agenda') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-500"></i> Kembali
        </a>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="<?= base_url('admin/agenda/update/' . $agenda['id_agenda']) ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="card-body">
                        <?php if (session()->getFlashdata('errors')): ?>
                            <div class="alert alert-danger">
                                <i class="fa fa-exclamation-circle"></i> Ada kesalahan dalam pengisian form:
                                <ul class="mt-2">
                                    <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                        <li><?= $error ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <?php if (session()->getFlashdata('error')): ?>
                            <div class="alert alert-danger">
                                <i class="fa fa-exclamation-circle"></i> <?= session()->getFlashdata('error') ?>
                            </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <label for="nama">Nama Agenda</label>
                            <input type="text" class="form-control mb-3" id="nama" name="nama" placeholder="Masukkan nama agenda" value="<?= $agenda['nama_agenda'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Agenda</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control mb-3"><?= $agenda['deskripsi'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal Agenda</label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control mb-3" value="<?= $agenda['tanggal'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto Agenda</label>
                            <input type="file" class="form-control mb-3" id="foto" name="foto" accept="image/*">
                            <?php if ($agenda['foto_agenda']): ?>
                                <img src="<?= base_url('foto/agenda/' . $agenda['foto_agenda']) ?>" alt="Foto Agenda" class="img-thumbnail mt-3" style="width: 200px; height: auto;">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-save mr-2"></i>Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>