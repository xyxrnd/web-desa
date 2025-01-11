<?= $this->extend('layouts/front/base') ?>
<?= $this->section('title') ?>Layanan<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section id="services" class="feature py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2>Layanan Kami</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($layanan as $l) : ?>
                <div class="col-md-4 mb-4">
                    <div class="card p-3 h-100">
                        <h5 class="card-title"><?= esc($l['nama_layanan']); ?></h5>
                        <p class="card-text"><?= esc($l['deskripsi']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?= $this->endSection() ?>