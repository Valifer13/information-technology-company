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
    <title>Pricing Plan</title>

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
    <?= PageHeader("Paket Harga") ?>
    <!-- Content Start -->

    <section class="pricing-section pt-120 pb-120">
        <div class="container-2">
            <div class="row gy-lg-0 gy-4 fade-wrapper justify-content-center">
                <div class="col-lg-4 col-md-6 fade-top">
                    <div class="pricing-item">
                        <div class="icon"><img src="assets/img/icon/pricing-1.png" alt="icon"></div>
                        <h3 class="title">Plan Dasar</h3>
                        <p>Paket harga untuk perusahaan kecil atau Start up</p>
                        <h3 class="price">$500 <span>/Bulan</span></h3>
                        <ul class="pricing-list">
                            <li>Kontrol Pintar Ringan</li>
                            <li>Keamanan Sistem Dasar</li>
                            <li>Perangkat Instalasi Gratis</li>
                            <li>24/7 Layanan Kustomer</li>
                        </ul>
                        <a href="#" class="bz-primary-btn pricing-btn">Baca Detail <i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 fade-top">
                    <div class="pricing-item active">
                        <div class="icon"><img src="assets/img/icon/pricing-2.png" alt="icon"></div>
                        <span class="active-text">Populer</span>
                        <h3 class="title">Plan Bisnis</h3>
                        <p>Paket terbaik untuk setiap perusahaan</p>
                        <h3 class="price">$1,000 <span>/Bulan</span></h3>
                        <ul class="pricing-list">
                            <li>Kontrol Cerdas Expert</li>
                            <li>Keamanan Sistem Tinggi</li>
                            <li>Integrasi AI</li>
                            <li>Penginstalan Perangkat Gratis</li>
                            <li>24/7 Layanan Kustomer</li>
                        </ul>
                        <a href="#" class="bz-primary-btn pricing-btn">Baca Detail <i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 fade-top">
                    <div class="pricing-item">
                        <div class="icon"><img src="assets/img/icon/pricing-3.png" alt="icon"></div>
                        <h3 class="title">Plan Enterprise</h3>
                        <p>Paket terbaik untuk perusahaan besar dengan sistem kontrol penuh</p>
                        <h3 class="price">$1,500 <span>/Bulan</span></h3>
                        <ul class="pricing-list">
                            <li>Kontrol Cerdas Expert</li>
                            <li>Keamanan Sistem Tertinggi</li>
                            <li>Intergrasi AI</li>
                            <li>Penginstalan Perangkat Gratis</li>
                            <li>24/7 Layanan Kustomer</li>
                        </ul>
                        <a href="#" class="bz-primary-btn pricing-btn">Baca Detail <i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ pricing-section -->

    <div class="running-text">
        <div class="bg-img include-bg" data-background="assets/img/bg-img/running-text-bg.png"></div>
        <div class="overlay"></div>
        <div class="container">
            <div class="scroller" data-speed="fast">
                <ul class="text-anim scroller__inner">
                    <li>Bisnis Digital</li>
                    <li>Agensi Konsultasi</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ./ running-text -->

    <section class="feature-section pt-120 pb-120">
        <div class="container">
            <div class="section-heading">
                <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span class="left-shape"></span>Fitur Kami</h4>
                <h2 class="section-title mb-0" data-text-animation data-split="word" data-duration="1">Fitur Unik Yang Kami Tawarkan</h2>
            </div>
            <div class="row gy-lg-0 gy-4 justify-content-center fade-wrapper">
                <div class="col-lg-4 col-md-6 fade-top">
                    <div class="feature-item">
                        <div class="bg-img"><img src="assets/img/images/feature-img-1.png" alt="feature"></div>
                        <div class="icon"><img src="assets/img/icon/feature-1.png" alt="feature"></div>
                        <div class="feature-content">
                            <h3 class="title">Konsultasi Bisnis</h3>
                            <p>Kami membantu merumuskan strategi bisnis yang efektif dan disesuaikan untuk meningkatkan efisiensi dan profitabilitas.</p>
                            <a href="service-details.php" class="read-more">Baca Detail<i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 fade-top">
                    <div class="feature-item">
                        <div class="bg-img"><img src="assets/img/images/feature-img-2.png" alt="feature"></div>
                        <div class="icon"><img src="assets/img/icon/feature-2.png" alt="feature"></div>
                        <div class="feature-content">
                            <h3 class="title">Pendekatan Klien-Sentris</h3>
                            <p>Kami fokus pada memahami kebutuhan klien dan memberikan solusi yang dipersonalisasi untuk mencapai hasil yang optimal.</p>
                            <a href="service-details.php" class="read-more">Baca Detail<i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 fade-top">
                    <div class="feature-item">
                        <div class="bg-img"><img src="assets/img/images/feature-img-1.png" alt="feature"></div>
                        <div class="icon"><img src="assets/img/icon/process-2.png" alt="feature"></div>
                        <div class="feature-content">
                            <h3 class="title">Teknologi Terkini</h3>
                            <p>Kami memanfaatkan teknologi terbaru untuk memastikan bahwa layanan kami tetap relevan dan efektif dalam memenuhi kebutuhan klien.</p>
                            <a href="service-details.php" class="read-more">Baca Detail<i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ feature-section -->

    <!-- Content End -->
    <?= $SubFooter ?>
</body>

</html>