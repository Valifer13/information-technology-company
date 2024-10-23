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
    <title>Blog</title>

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
    <?= PageHeader("Berita & Artikel Terbaru", "Blog") ?>
    <!-- Content Start -->

    <section class="blog-section pt-120 pb-120 fade-wrapper">
        <div class="container">
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
                                <h3 class="title"><a href="blog-details.php">Meningkatkan Efisiensi dengan Teknologi Terbaru</a></h3>
                            </div>
                            <div class="post-bottom">
                                <a class="read-more" href="blog-details.php">Baca Selengkapnya<i class="fa-solid fa-chevrons-right"></i></a>
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
                                <h3 class="title"><a href="blog-details.php">Strategi Pemasaran Digital yang Efektif di 2024</a></h3>
                            </div>
                            <div class="post-bottom">
                                <a class="read-more" href="blog-details.php">Baca Selengkapnya<i class="fa-solid fa-chevrons-right"></i></a>
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
                                <h3 class="title"><a href="blog-details.php">Mengoptimalkan Data untuk Keputusan Bisnis yang Lebih Baik</a></h3>
                            </div>
                            <div class="post-bottom">
                                <a class="read-more" href="blog-details.php">Baca Selengkapnya<i class="fa-solid fa-chevrons-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ blog-section -->

    <!-- Content End -->
    <?= $SubFooter ?>
</body>

</html>