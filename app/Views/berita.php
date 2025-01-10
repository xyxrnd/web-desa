<?= $this->extend('layouts/front/base') ?>
<?= $this->section('title') ?>Berita<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section id="about" class="feature py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="mb-4">Berita</h2>
            </div>
        </div>
        <div class="row">
            <?php if (count($berita) > 0): ?>
                <?php foreach ($berita as $b) : ?>
                    <div class="col-md-4 mb-4">
                        <div class="card p-3 h-100">
                            <img src="<?= base_url('foto/berita/' . $b['foto']) ?>" class="card-img-top" alt="<?= esc($b['nama']) ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= esc($b['nama']); ?></h5>
                                <p class="card-text"><?= esc(substr($b['deskripsi'], 0, 100)) ?>...</p>
                                <a href="<?= base_url('berita/detail/' . $b['id_berita']) ?>" class="btn btn-primary">Baca Selengkapnya</a>
                            </div>
                            <div class="card-footer text-muted">
                                <small>Dibuat pada: <?= date('d F Y', strtotime($b['dibuat_tanggal'])); ?></small>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center">
                    <p class="text-muted">Tidak ada berita yang tersedia.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?= $this->endSection() ?>