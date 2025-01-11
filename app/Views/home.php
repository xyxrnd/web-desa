<?= $this->extend('layouts/front/base') ?>
<?= $this->section('title') ?>Beranda<?= $this->endSection() ?>
<?= $this->section('content') ?>
<!-- Hero Section -->
<section id="slider" class="mb-5">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('foto/banner/1.webp') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('foto/banner/2.webp') ?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>


<!-- Features Section -->
<section id="contact" class="feature">
    <div class="container text-center">
        <h2 class="mb-4">Tentang Kami</h2>
        <p>Kelurahan Cigadung adalah salah satu dari delapan kelurahan yang terletak di Kecamatan Subang, Kabupaten Subang, Provinsi Jawa Barat, Indonesia. Kelurahan ini memiliki kode wilayah administrasi 32.13.03.1002 dan kode pos 41213. Di wilayah Kelurahan Cigadung, terdapat beberapa institusi pendidikan, antara lain SD Negeri Sompi yang berlokasi di Jalan Panji No. 14 dan SMP Negeri 4 Subang yang beralamat di Jalan D. Kartawigenda No. 31.</p>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="feature bg-light">
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
<section id="about" class="feature py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="mb-4">Berita Terbaru</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($berita as $b) : ?>
                <div class="col-md-4 mb-4">
                    <div class="card p-3 h-100">
                        <img src="<?= base_url('foto/berita/' . $b['foto']) ?>" class="card-img-top" alt="<?= $b['nama'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= esc($b['nama']); ?></h5>
                            <p class="card-text"><?= esc($b['deskripsi']); ?></p>
                            <a href="<?= base_url('berita/detail/' . $b['id_berita']) ?>" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                        <div class="card-footer text-muted">
                            <small>Dibuat pada: <?= esc($b['dibuat_tanggal']); ?></small>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section id="about" class="feature">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="mb-4">Agenda Terbaru</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($agenda as $a) : ?>
                <div class="col-md-4 mb-4">
                    <div class="card p-3 h-100">
                        <img src="<?= base_url('foto/agenda/' . $a['foto_agenda']) ?>" class="card-img-top" alt="<?= $a['nama_agenda'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= esc($a['nama_agenda']); ?></h5> <small><?= $a['tanggal']; ?></small>
                            <p class="card-text"><?= esc($a['deskripsi']); ?></p>
                        </div>
                        <div class="card-footer text-muted">
                            <small>Dibuat pada: <?= esc($b['dibuat_tanggal']); ?></small>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?= $this->endSection() ?>