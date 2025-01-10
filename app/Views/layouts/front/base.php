<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?></title>
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

        .carousel-inner img {
            width: 100%;
            height: 500px;
            /* Sesuaikan tinggi gambar sesuai kebutuhan */
            object-fit: cover;
            /* Menjaga proporsi dan memotong bagian yang melampaui */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <?= $this->include('layouts/front/nav'); ?>

    <!-- Contact Section -->
    <?= $this->renderSection('content') ?>




    <!-- Footer -->
    <?= $this->include('layouts/front/footer'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>