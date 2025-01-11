<?= $this->extend('layouts/base') ?>
<?= $this->section('title') ?>Tambah Galeri<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Galeri</h1>
        <a href="<?= base_url('admin/galeri') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-500"></i> Kembali</a>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="<?= base_url('admin/galeri/simpan') ?>" method="post" enctype="multipart/form-data">
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
                            <label for="judul">Judul Galeri</label>
                            <input type="text" class="form-control mb-3" id="judul" name="judul" placeholder="Masukkan judul galeri">
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto Berita</label>
                            <input type="file" class="form-control mb-3" id="foto" name="foto" accept="image/*">
                            <img id="preview" class="img-preview d-none w-50" alt="Preview foto">
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