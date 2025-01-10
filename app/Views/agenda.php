<?= $this->extend('layouts/front/base') ?>
<?= $this->section('title') ?>Agenda<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section id="about" class="feature py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="mb-4">Agenda</h2>
            </div>
        </div>
        <div class="row">
            <?php if (count($agenda) > 0): ?>
                <?php foreach ($agenda as $a) : ?>
                    <div class="col-md-4 mb-4">
                        <div class="card p-3 h-100">
                            <img src="<?= base_url('foto/agenda/' . $a['foto_agenda']) ?>" class="card-img-top" alt="<?= esc($a['nama_agenda']) ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= esc($a['nama_agenda']); ?></h5>
                                <h6 class="card-title"><?= esc($a['tanggal']); ?></h6>
                                <p class="card-text"><?= esc(substr($a['deskripsi'], 0, 100)) ?>...</p>
                                <a href="<?= base_url('agenda/detail/' . $a['id_agenda']) ?>" class="btn btn-primary">Baca Selengkapnya</a>
                            </div>
                            <div class="card-footer text-muted">
                                <small>Dibuat pada: <?= date('d F Y', strtotime($a['dibuat_tanggal'])); ?></small>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center">
                    <p class="text-muted">Tidak ada agenda yang tersedia.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?= $this->endSection() ?>