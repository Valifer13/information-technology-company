<?php

include 'assets/inc/Header.php';
include 'assets/inc/Footer.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>

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
    <?= $Header ?>
    <!-- Content Start -->

    <section class="hero-section">
        <div class="hero-mask-img">
            <div class="overlay"></div>
            <div class="overlay-2"></div>
            <img src="assets/img/images/hero-img.webp" alt="hero">
        </div>
        <div class="shapes">
            <div class="shape shape-1"><img src="assets/img/shapes/hero-shape-1.png" alt="shape"></div>
            <div class="shape shape-2"><img src="assets/img/shapes/hero-shape-2.png" alt="shape"></div>
            <div class="shape shape-3"><img src="assets/img/shapes/hero-shape-3.png" alt="shape"></div>
            <div class="shape shape-4"><img src="assets/img/shapes/hero-shape-4.png" alt="shape"></div>
            <div class="round-shape"></div>
        </div>
        <div class="container">
            <div class="hero-wrap">
                <div class="hero-content">
                    <div class="section-heading mb-40">
                        <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span class="left-shape"></span>Kami membangun merek yang luar biasa</h4>
                        <h2 class="section-title text-animation-effect">Membangun<br> Bisnis Cerdas <br>Dari Awal</h2>
                        <p>Kami mengkhususkan diri dalam memberikan solusi komprehensif untuk membantu para pebisnis mengatasi masalah mereka yang paling mendesak.</p>
                    </div>
                    <div class="hero-btn-wrap">
                        <a href="contact.html" class="bz-primary-btn">Kontak Kami<i class="fa-regular fa-arrow-right"></i></a>
                        <a href="service.html" class="bz-primary-btn hero-btn">Layanan Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ hero-section -->

    <section class="about-section pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-img-wrap">
                        <div class="about-img img-reveal">
                            <div class="img-overlay"></div>
                            <img src="assets/img/images/about-img-1.png.webp" alt="img">
                        </div>
                        <div class="shape"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-content fade-wrapper">
                        <div class="section-heading heading-2 mb-30">
                            <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span class="left-shape"></span>Tentang Perusahaan Kami</h4>
                            <h2 class="section-title" data-text-animation data-split="word" data-duration="1">Satu-satunya Sumber Pengetahuan adalah Pengalaman</h2>
                            <p class="fade-top">ITC menawarkan solusi inovatif dengan pengalaman bertahun-tahun, didukung teknologi terbaru, fokus pada kebutuhan klien, dan tim profesional berpengalaman yang berdedikasi untuk memberikan hasil optimal.</p>
                        </div>
                        <div class="about-items">
                            <div class="about-item fade-top">
                                <div class="icon"><img src="assets/img/icon/about-icon-1.png" alt="img"></div>
                                <div class="content">
                                    <h4 class="title">Menawarkan <br>Layanan Terbaik</h4>
                                </div>
                            </div>
                            <div class="about-item fade-top">
                                <div class="icon"><img src="assets/img/icon/about-icon-2.png" alt="img"></div>
                                <div class="content">
                                    <h4 class="title">Pendekatan <br>Klien-sentris</h4>
                                </div>
                            </div>
                        </div>
                        <div class="about-btn-wrap fade-top">
                            <a href="contact.html" class="bz-primary-btn">Kontak Kami<i class="fa-regular fa-arrow-right"></i></a>
                            <a href="tel:+6283119587745" class="bz-transparent-btn"><i class="fa-sharp fa-solid fa-phone-volume"></i>+62 831 1958 7745</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ about-section -->

    <section class="counter-section pt-120 pb-120" data-background="assets/img/bg-img/counter-bg.jpg">
        <div class="overlay"></div>
        <div class="shapes">
            <div class="shape shape-1"><img src="assets/img/shapes/counter-shape-1.png" alt="shape"></div>
            <div class="shape shape-2"><img src="assets/img/shapes/counter-shape-2.png" alt="shape"></div>
        </div>
        <div class="container">
            <div class="row gy-lg-0 gy-4 fade-wrapper">
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item fade-top">
                        <div class="icon">
                            <div class="icon-inner">
                                <img src="assets/img/icon/counter-icon-1.png" alt="icon">
                            </div>
                            <div class="shape"></div>
                        </div>
                        <div class="counter-content">
                            <h3 class="title"><span class="odometer" data-count="858">0</span></h3>
                            <p>Projek Diselesaikan</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item fade-top">
                        <div class="icon">
                            <div class="icon-inner">
                                <img src="assets/img/icon/counter-icon-2.png" alt="icon">
                            </div>
                            <div class="shape"></div>
                        </div>
                        <div class="counter-content">
                            <h3 class="title"><span class="odometer" data-count="655">0</span></h3>
                            <p>Aktivitas Media</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item fade-top">
                        <div class="icon">
                            <div class="icon-inner">
                                <img src="assets/img/icon/counter-icon-3.png" alt="icon">
                            </div>
                            <div class="shape"></div>
                        </div>
                        <div class="counter-content">
                            <h3 class="title"><span class="odometer" data-count="567">0</span></h3>
                            <p>Ahli yang Terampil</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item fade-top">
                        <div class="icon">
                            <div class="icon-inner">
                                <img src="assets/img/icon/counter-icon-4.png" alt="icon">
                            </div>
                            <div class="shape"></div>
                        </div>
                        <div class="counter-content">
                            <h3 class="title"><span class="odometer" data-count="28k">0</span></h3>
                            <p>Klien Puas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ counter-section -->

    <section class="service-section pt-120 pb-120" data-background="assets/img/bg-img/service-bg.png">
        <div class="container">
            <div class="section-heading text-center">
                <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span class="left-shape"></span>Our Services<span class="right-shape"></span></h4>
                <h2 class="section-title" data-text-animation data-split="word" data-duration="1">Service We Provide</h2>
            </div>
            <div class="row fade-wrapper gy-lg-0 gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6 fade-top">
                    <div class="service-item">
                        <div class="icon"><img src="assets/img/icon/service-icon-1.png" alt="icon"></div>
                        <div class="service-content">
                            <h3 class="title"><a href="service-details.html">Konsultasi Bisnis</a></h3>
                            <p>Layanan konsultasi untuk membantu perusahaan merancang strategi bisnis, meningkatkan efisiensi operasional, dan mencapai tujuan jangka panjang.</p>
                            <a href="service-details.html" class="bz-primary-btn">Baca Selengkapnya <i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 fade-top">
                    <div class="service-item">
                        <div class="icon"><img src="assets/img/icon/service-icon-2.png" alt="icon"></div>
                        <div class="service-content">
                            <h3 class="title"><a href="service-details.html">Solusi Digital</a></h3>
                            <p>Pengembangan aplikasi dan perangkat lunak yang inovatif untuk mendukung operasi bisnis dan memenuhi kebutuhan teknologi modern.</p>
                            <a href="service-details.html" class="bz-primary-btn">Baca Selengkapnya <i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 fade-top">
                    <div class="service-item">
                        <div class="icon"><img src="assets/img/icon/service-icon-3.png" alt="icon"></div>
                        <div class="service-content">
                            <h3 class="title"><a href="service-details.html">Pengembangan Software</a></h3>
                            <p>Layanan digital termasuk desain web, pemasaran digital, dan pengelolaan media sosial untuk meningkatkan kehadiran online dan engagement klien.</p>
                            <a href="service-details.html" class="bz-primary-btn">Baca Selengkapnya <i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ service-section -->

    <section class="content-section pt-120 pb-120">
        <div class="content-container">
            <div class="content-wrap pt-120 pb-120" data-background="assets/img/bg-img/content-bg.png">
                <div class="shapes">
                    <div class="shape-1"></div>
                    <div class="shape-2"></div>
                </div>
                <div class="content-box">
                    <div class="section-heading mb-30">
                        <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span class="left-shape"></span>Penentuan tim inti kami</h4>
                        <h2 class="section-title" data-text-animation data-split="word" data-duration="1">Inovasi Terdepan dan
                            <br>Berkualitas Tinggi
                        </h2>
                    </div>
                    <div class="content-tab">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Tentang Kami</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Misi Kami</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Visi Kami</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="tab-info">
                                    <p>Red Company adalah perusahaan teknologi yang berfokus pada solusi inovatif untuk meningkatkan efisiensi bisnis. Kami hadir untuk membantu klien mencapai kesuksesan melalui layanan berkualitas tinggi. </p>
                                    <div class="tab-progress">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLeft" data-wow-delay="0ms" data-wow-duration="2000ms" role="progressbar" style="width: 90%; visibility: visible; animation-duration: 2000ms; animation-delay: 0ms; animation-name: slideInLeft;">
                                                <span>90%</span>
                                            </div>
                                        </div>
                                        <h4 class="title">Engine Solution</h4>
                                    </div>
                                    <a href="contact.html" class="bz-primary-btn">Dapatkan Penawaran</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="tab-info">
                                    <p>Memberikan nilai tambah kepada klien dengan layanan teknologi terdepan dan pendekatan yang disesuaikan.</p>
                                    <div class="tab-progress">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLeft" data-wow-delay="0ms" data-wow-duration="2000ms" role="progressbar" style="width: 80%; visibility: visible; animation-duration: 2000ms; animation-delay: 0ms; animation-name: slideInLeft;">
                                                <span>80%</span>
                                            </div>
                                        </div>
                                        <h4 class="title">Engine Solution</h4>
                                    </div>
                                    <a href="contact.html" class="bz-primary-btn">Dapatkan Penawaran</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="tab-info">
                                    <p>Menjadi pemimpin global dalam solusi teknologi inovatif</p>
                                    <div class="tab-progress">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLeft" data-wow-delay="0ms" data-wow-duration="2000ms" role="progressbar" style="width: 85%; visibility: visible; animation-duration: 2000ms; animation-delay: 0ms; animation-name: slideInLeft;">
                                                <span>85%</span>
                                            </div>
                                        </div>
                                        <h4 class="title">Engine Solution</h4>
                                    </div>
                                    <a href="contact.html" class="bz-primary-btn">Dapatkan Penawaran</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ content-section -->

    <section class="team-section pt-120 pb-120 fade-wrapper">
        <div class="bg-shape fade-right"><img src="assets/img/shapes/team-shape-1.png" alt="img"></div>
        <div class="container">
            <div class="team-top">
                <div class="section-heading white-content">
                    <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span class="left-shape"></span>Anggota Tim Kami</h4>
                    <h2 class="section-title" data-text-animation data-split="word" data-duration="1">Temui Para Anggota Ahli</h2>
                </div>
            </div>
        </div>
        <div class="team-wrap">
            <div class="row gy-lg-0 gy-4 fade-wrapper">
                <div class="col-lg-3 col-md-6 fade-top">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="assets/img/team/team-1.webp" alt="team">
                            <div class="shapes">
                                <div class="shape-1"></div>
                                <div class="shape-2"></div>
                            </div>
                        </div>
                        <div class="team-content-wrap">
                            <div class="team-content">
                                <h3 class="title"><a href="team-details.html">Markus Finland</a></h3>
                                <span>Kepala Pengembangan Software</span>
                            </div>
                            <div class="team-social">
                                <div class="expand">
                                    <i class="fa-solid fa-share-nodes"></i>
                                </div>
                                <ul class="social-list">
                                    <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="google"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#" class="behance"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 fade-top">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="assets/img/team/team-2.webp" alt="team">
                            <div class="shapes">
                                <div class="shape-1"></div>
                                <div class="shape-2"></div>
                            </div>
                        </div>
                        <div class="team-content-wrap">
                            <div class="team-content">
                                <h3 class="title"><a href="team-details.html">Devon Lane</a></h3>
                                <span>Pelatih Bisnis</span>
                            </div>
                            <div class="team-social">
                                <div class="expand">
                                    <i class="fa-solid fa-share-nodes"></i>
                                </div>
                                <ul class="social-list">
                                    <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="google"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#" class="behance"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 fade-top">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="assets/img/team/team-3.webp" alt="team">
                            <div class="shapes">
                                <div class="shape-1"></div>
                                <div class="shape-2"></div>
                            </div>
                        </div>
                        <div class="team-content-wrap">
                            <div class="team-content">
                                <h3 class="title"><a href="team-details.html">Viv Richards</a></h3>
                                <span>Kepala Keuangan</span>
                            </div>
                            <div class="team-social">
                                <div class="expand">
                                    <i class="fa-solid fa-share-nodes"></i>
                                </div>
                                <ul class="social-list">
                                    <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="google"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#" class="behance"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 fade-top">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="assets/img/team/team-4.webp" alt="team">
                            <div class="shapes">
                                <div class="shape-1"></div>
                                <div class="shape-2"></div>
                            </div>
                        </div>
                        <div class="team-content-wrap">
                            <div class="team-content">
                                <h3 class="title"><a href="team-details.html">John Smith</a></h3>
                                <span>Kepala Pemasaran</span>
                            </div>
                            <div class="team-social">
                                <div class="expand">
                                    <i class="fa-solid fa-share-nodes"></i>
                                </div>
                                <ul class="social-list">
                                    <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="google"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#" class="behance"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ team-section -->

    <section class="project-section pt-120 pb-120">
        <div class="bg-shape" data-background="assets/img/bg-img/project-bg.png"></div>
        <div class="container">
            <div class="project-top heading-space">
                <div class="section-heading mb-0">
                    <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span class="left-shape"></span>Projek Kami</h4>
                    <h2 class="section-title mb-0" data-text-animation data-split="word" data-duration="1">Studi Kasus Bisnis Kami</h2>
                </div>
                <div class="swiper-arrow">
                    <div class="swiper-nav swiper-next"><i class="fa-regular fa-arrow-left"></i></div>
                    <div class="swiper-nav swiper-prev"><i class="fa-regular fa-arrow-right"></i></div>
                </div>
            </div>
            <div class="project-carousel swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="project-item">
                            <div class="project-img">
                                <div class="overlay"></div>
                                <div class="overlay-2"></div>
                                <img src="assets/img/project/project-1.webp" alt="project">
                            </div>
                            <div class="project-content">
                                <h3 class="title"><a href="project-details.html">Transformasi Digital untuk Perusahaan Ritel</a></h3>
                                <span>Studi Kasus, Berkembang</span>
                                <p>Proyek ini melibatkan perombakan total sistem IT perusahaan ritel besar untuk meningkatkan efisiensi operasional dan pengalaman pelanggan. Kami mengimplementasikan solusi perangkat lunak kustom dan strategi pemasaran digital untuk hasil yang maksimal.</p>
                                <a href="project-details.html" class="bz-primary-btn">Perlihatkan Projek</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-item">
                            <div class="project-img">
                                <div class="overlay"></div>
                                <div class="overlay-2"></div>
                                <img src="assets/img/project/project-2.webp" alt="project">
                            </div>
                            <div class="project-content">
                                <h3 class="title"><a href="project-details.html">Aplikasi Mobile untuk Startup Teknologi</a></h3>
                                <span>Studi Kasus, Berkembang</span>
                                <p>Kami merancang dan mengembangkan aplikasi mobile inovatif untuk startup teknologi baru, mencakup fitur-fitur canggih yang mendukung pertumbuhan bisnis dan meningkatkan keterlibatan pengguna.</p>
                                <a href="project-details.html" class="bz-primary-btn">Perlihatkan Projek</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-item">
                            <div class="project-img">
                                <div class="overlay"></div>
                                <div class="overlay-2"></div>
                                <img src="assets/img/project/project-3.webp" alt="project">
                            </div>
                            <div class="project-content">
                                <h3 class="title"><a href="project-details.html">Solusi Analitik Data untuk Perusahaan Keuangan</a></h3>
                                <span>Studi Kasus, Berkembang</span>
                                <p> Proyek ini menyediakan solusi analitik data yang mendalam untuk perusahaan keuangan besar, memungkinkan mereka untuk mengoptimalkan keputusan investasi dan operasional melalui wawasan berbasis data.</p>
                                <a href="project-details.html" class="bz-primary-btn">Perlihatkan Projek</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ project-section -->

    <section class="testimonial-section pt-120 pb-120" data-background="assets/img/bg-img/testi-bg.png">
        <div class="container">
            <div class="section-heading text-center">
                <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span class="left-shape"></span>Ulasan Klien</h4>
                <h2 class="section-title mb-0" data-text-animation data-split="word" data-duration="1">Apa yang dikatakan oleh pelanggan kami?</h2>
            </div>
            <div class="testi-carousel swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testi-item">
                            <div class="testi-top">
                                <div class="testi-author">
                                    <img src="assets/img/images/testi-author-1.png" alt="img">
                                    <h4 class="name">Henry Oliver <span>IT Customer</span></h4>
                                </div>
                                <div class="quote"><img src="assets/img/icon/quote.png" alt="quote"></div>
                            </div>
                            <p>“ITC memberikan solusi yang tepat waktu dan efektif, meningkatkan efisiensi operasional kami secara signifikan.”</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-item">
                            <div class="testi-top">
                                <div class="testi-author">
                                    <img src="assets/img/images/testi-author-2.png" alt="img">
                                    <h4 class="name">Thomas William <span>IT Customer</span></h4>
                                </div>
                                <div class="quote"><img src="assets/img/icon/quote.png" alt="quote"></div>
                            </div>
                            <p>“Pendekatan klien-sentris dari ITC membuat kami merasa didengar dan dipahami. Solusi mereka benar-benar disesuaikan dengan kebutuhan kami.”</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-item">
                            <div class="testi-top">
                                <div class="testi-author">
                                    <img src="assets/img/images/testi-author-3.png" alt="img">
                                    <h4 class="name">John Doe<span>IT Customer</span></h4>
                                </div>
                                <div class="quote"><img src="assets/img/icon/quote.png" alt="quote"></div>
                            </div>
                            <p>“Kerja sama dengan ITC membantu kami mengoptimalkan proses bisnis dan memberikan hasil yang melebihi ekspektasi.”</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- ./ testimonial-section -->

    <section class="blog-section pt-120 pb-120 fade-wrapper">
        <div class="container">
            <div class="section-heading text-center">
                <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span class="left-shape"></span>Blog Berita</h4>
                <h2 class="section-title mb-0" data-text-animation data-split="word" data-duration="1">Berita & Artikel Terbaru</h2>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="post-card fade-top">
                        <div class="post-thumb">
                            <img src="assets/img/blog/post-1.webp" alt="post">
                        </div>
                        <div class="post-content-wrap">
                            <div class="post-content">
                                <ul class="post-meta">
                                    <li><i class="fa-regular fa-calendar"></i>01 Sep, 2024</li>
                                    <li><i class="fa-regular fa-user"></i>by Sarah Johnson</li>
                                </ul>
                                <h3 class="title"><a href="blog-details.html">Meningkatkan Efisiensi dengan Teknologi Terbaru</a></h3>
                            </div>
                            <div class="post-bottom">
                                <a class="read-more" href="blog-details.html">Baca Selengkapnya<i class="fa-solid fa-chevrons-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="post-card fade-top">
                        <div class="post-thumb">
                            <img src="assets/img/blog/post-2.webp" alt="post">
                        </div>
                        <div class="post-content-wrap">
                            <div class="post-content">
                                <ul class="post-meta">
                                    <li><i class="fa-regular fa-calendar"></i>15 Aug, 2024</li>
                                    <li><i class="fa-regular fa-user"></i>by Michael Thompson</li>
                                </ul>
                                <h3 class="title"><a href="blog-details.html">Strategi Pemasaran Digital yang Efektif di 2024</a></h3>
                            </div>
                            <div class="post-bottom">
                                <a class="read-more" href="blog-details.html">Baca Selengkapnya<i class="fa-solid fa-chevrons-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="post-card fade-top">
                        <div class="post-thumb">
                            <img src="assets/img/blog/post-3.webp" alt="post">
                        </div>
                        <div class="post-content-wrap">
                            <div class="post-content">
                                <ul class="post-meta">
                                    <li><i class="fa-regular fa-calendar"></i>30 Jul, 2024</li>
                                    <li><i class="fa-regular fa-user"></i>by Emily Clark</li>
                                </ul>
                                <h3 class="title"><a href="blog-details.html">Mengoptimalkan Data untuk Keputusan Bisnis yang Lebih Baik</a></h3>
                            </div>
                            <div class="post-bottom">
                                <a class="read-more" href="blog-details.html">Baca Selengkapnya<i class="fa-solid fa-chevrons-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ blog-section -->

    <section class="request-section">
        <div class="bg-color"></div>
        <div class="shapes">
            <div class="shape shape-1"><img src="assets/img/shapes/request-shape-1.png" alt="shape"></div>
            <div class="shape shape-2"><img src="assets/img/shapes/request-shape-2.png" alt="shape"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="request-form-wrap">
                        <h3 class="form-header">Minta Panggilan Balik</h3>
                        <form class="request-form" action="https://html.rrdevs.net/bizan/mail.php">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-item">
                                        <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Nama Anda">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-item">
                                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Apa yang ingin kamu diskusikan?">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-item">
                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Nomor Handphone*">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-item message-item">
                                        <textarea id="message" name="message" cols="30" rows="5" class="form-control address" placeholder="Bagaimana kami bisa membantu anda?"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-btn">
                                <button id="submit" class="bz-primary-btn" type="submit">Kirim Permintaan</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="request-img-wrap">
                        <img class="men" src="assets/img/images/request-men.png" alt="men">
                        <img class="bg-img" src="assets/img/images/request-img.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ request-section -->

    <section class="sponsor-section pt-120 pb-120">
        <div class="container">
            <h3 class="sponsor-text-wrap">
                <span></span>
                <span class="sponsor-text">kami memiliki 200+ perusahaan terpercaya yang mempercayai ITC</span>
                <span></span>
            </h3>
            <div class="sponsor-carousel swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="sponsor-item text-center">
                            <a href="#"><img src="assets/img/sponsor/sponsor-1.png" alt="sponsor"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item text-center">
                            <a href="#"><img src="assets/img/sponsor/sponsor-2.png" alt="sponsor"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item text-center">
                            <a href="#"><img src="assets/img/sponsor/sponsor-3.png" alt="sponsor"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item text-center">
                            <a href="#"><img src="assets/img/sponsor/sponsor-4.png" alt="sponsor"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item text-center">
                            <a href="#"><img src="assets/img/sponsor/sponsor-5.png" alt="sponsor"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ sponsor-section -->

    <!-- Content End -->
    <?= $Footer ?>
</body>

</html>