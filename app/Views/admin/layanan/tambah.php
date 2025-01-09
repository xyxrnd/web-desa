<?= $this->extend('layouts/base') ?>

<?= $this->section('title') ?>Tambah Layanan<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Layanan</h1>
        <a href="<?= base_url('admin/layanan') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-500"></i> Kembali
        </a>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="<?= base_url('admin/layanan/store'); ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nama_layanan" class="form-label">Nama Layanan</label>
                            <input type="text" name="nama_layanan" id="nama_layanan" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-save mr-2"></i>Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>