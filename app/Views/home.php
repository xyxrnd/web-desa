<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .hero {
            background: linear-gradient(to right, #0d6efd, #6c757d);
            color: white;
            padding: 100px 20px;
            text-align: center;
        }

        .feature {
            padding: 50px 20px;
        }

        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Desai Web</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Selamat Datang di Desai Web</h1>
            <p>Membangun web yang elegan dan responsif dengan desain modern.</p>
            <a href="#about" class="btn btn-primary">Pelajari Lebih Lanjut</a>
        </div>
    </section>

    <!-- Features Section -->


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
    <section id="about" class="feature">
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


    <!-- Contact Section -->
    <section id="contact" class="feature">
        <div class="container text-center">
            <h2 class="mb-4">Kontak Kami</h2>
            <p>Hubungi kami untuk solusi desain web terbaik.</p>
            <a href="mailto:info@desaiweb.com" class="btn btn-outline-primary">Email Kami</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <p>&copy; 2025 Desai Web. Semua Hak Dilindungi.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>