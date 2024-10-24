<?php

include 'assets/inc/SubHeader.php';
include 'assets/inc/PageHeader.php';
include 'assets/inc/SubFooter.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Project</title>

    <!-- Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/venobox.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/keyframe-animation.css">
    <link rel="stylesheet" href="assets/css/daterangepicker.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <?= $SubHeader ?>
    <?= PageHeader("Detail Project") ?>
    <!-- Content Start -->

    <section class="project-details pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="project-details-wrap">
                        <div class="project-details-thumb">
                            <img src="assets/img/project/project-details-img.jpg" alt="img">
                            <div class="details-list-wrap">
                                <h4 class="list-title">Informasi Project</h4>
                                <ul class="details-list">
                                    <li>
                                        <div class="icon"><i class="fa-solid fa-user"></i></div>
                                        <div class="content">
                                            <span>Klien:</span>
                                            <h4 class="title">Willam Henry</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fa-solid fa-layer-group"></i></div>
                                        <div class="content">
                                            <span>Kategory:</span>
                                            <h4 class="title">Bisnis, Solusi, Layanan</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fa-sharp fa-solid fa-calendar-days"></i></div>
                                        <div class="content">
                                            <span>Tanggal:</span>
                                            <h4 class="title">25 Maret, 2024</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fa-sharp fa-solid fa-location-dot"></i></div>
                                        <div class="content">
                                            <span>Alamat:</span>
                                            <h4 class="title">Denpasar, Bali</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h3 class="details-title">Tujuan</h3>
                        <p class="mb-50 desc">Merombak sistem IT perusahaan ritel besar untuk meningkatkan efisiensi operasional dan pengalaman pelanggan dengan solusi perangkat lunak kustom dan strategi pemasaran digital.</p>
                        <h3 class="details-title">Tantangan</h3>
                        <p class="mb-30">Migrasi data tanpa mengganggu operasional, serta integrasi sistem lama dengan platform e-commerce baru yang harus menangani transaksi tinggi.</p>
                        <div class="mb-30 row gy-lg-0 gy-4 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="project-details-img img-reveal">
                                    <div class="img-overlay"></div>
                                    <img src="assets/img/project/project-details-img-1.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="project-details-img img-reveal">
                                    <div class="img-overlay"></div>
                                    <img src="assets/img/project/project-details-img-2.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="project-details-img img-reveal">
                                    <div class="img-overlay"></div>
                                    <img src="assets/img/project/project-details-img-3.png" alt="">
                                </div>
                            </div>
                        </div>
                        <h3 class="details-title">Solusi</h3>
                        <p class="mt-10 mb-0">Mengimplementasikan sistem manajemen inventaris dan platform e-commerce terintegrasi, serta kampanye pemasaran digital yang mencakup SEO dan media sosial.</p>
                        <h3 class="details-title">Hasil</h3>
                        <p class="mt-10 mb-0">Peningkatan efisiensi operasional sebesar 30%, penjualan online naik 25%, dan kepuasan pelanggan meningkat dari 75% menjadi 90%.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content End -->
    <?= $SubFooter ?>
</body>

</html>