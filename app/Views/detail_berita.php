<?= $this->extend('layouts/front/base') ?>
<?= $this->section('title') ?><?= esc($title) ?><?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="card">
                <img src="<?= base_url('foto/berita/' . $berita['foto']) ?>" class="card-img-top w-50 mx-auto mt-3" alt="<?= esc($berita['nama']) ?>">
                <div class="card-body">
                    <h3 class="card-title"><?= esc($berita['nama']) ?></h3>
                    <p class="text-muted">Dibuat pada: <?= date('d F Y', strtotime($berita['dibuat_tanggal'])) ?></p>
                    <p><?= esc($berita['deskripsi']) ?></p>
                </div>
                <div class="card-footer text-center">
                    <a href="<?= base_url('berita') ?>" class="btn btn-secondary">Kembali ke Halaman Berita</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>