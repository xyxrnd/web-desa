<?= $this->extend('layouts/base') ?>
<?= $this->section('title') ?>Edit Berita<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Berita</h1>
        <a href="<?= base_url('admin/berita') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-arrow-left fa-sm text-white-500"></i> Kembali</a>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="<?= base_url('admin/berita/update/' . $berita['id_berita']) ?>" method="post" enctype="multipart/form-data">
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
                            <label for="nama">Nama Berita</label>
                            <input type="text" class="form-control mb-3" id="nama" name="nama" value="<?= $berita['nama'] ?>" placeholder="Masukkan nama Berita">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Berita</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control mb-3"><?= $berita['deskripsi'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto Berita</label>
                            <input type="file" class="form-control mb-3" id="foto" name="foto" accept="image/*">
                            <?php if ($berita['foto']): ?>
                                <img src="<?= base_url('foto/berita/' . $berita['foto']) ?>" alt="Preview foto" class="img-fluid img-preview mt-3">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-save mr-2"></i>Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>