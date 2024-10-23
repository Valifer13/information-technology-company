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
    <title>Portofolio</title>

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
    <?= PageHeader("Project Kami", "Portofolio") ?>
    <!-- Content Start -->

    <section class="project-section pt-120 pb-120">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                    <div class="project-item-2">
                        <div class="overlay"></div>
                        <div class="shape"><img src="assets/img/shapes/project-inner-shape.png" alt="shape"></div>
                        <div class="project-btn">
                            <a class="venobox" href="assets/img/project/project-inner-2.png" data-gall="projects"><i class="fa-regular fa-magnifying-glass"></i></a>
                        </div>
                        <div class="project-img">
                            <img src="assets/img/project/project-inner-2.png" alt="project">
                        </div>
                        <div class="project-content">
                            <span>IT Development</span>
                            <h3 class="title"><a href="project-details.php">Transformasi Digital untuk Perusahaan Ritel</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-item-2">
                        <div class="overlay"></div>
                        <div class="shape"><img src="assets/img/shapes/project-inner-shape.png" alt="shape"></div>
                        <div class="project-btn">
                            <a class="venobox" href="assets/img/project/project-inner-3.png" data-gall="projects"><i class="fa-regular fa-magnifying-glass"></i></a>
                        </div>
                        <div class="project-img">
                            <img src="assets/img/project/project-inner-3.png" alt="project">
                        </div>
                        <div class="project-content">
                            <span>Mobile Development</span>
                            <h3 class="title"><a href="project-details.php">Pengembangann Aplikasi Mobile untuk Startup Teknologi</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-item-2">
                        <div class="overlay"></div>
                        <div class="shape"><img src="assets/img/shapes/project-inner-shape.png" alt="shape"></div>
                        <div class="project-btn">
                            <a class="venobox" href="assets/img/project/project-inner-4.png" data-gall="projects"><i class="fa-regular fa-magnifying-glass"></i></a>
                        </div>
                        <div class="project-img">
                            <img src="assets/img/project/project-inner-4.png" alt="project">
                        </div>
                        <div class="project-content">
                            <span>Solusi IT</span>
                            <h3 class="title"><a href="project-details.php">Solusi Analitik Data untuk Perusahaan Keuangan</a></h3>
                        </div>
                    </div>
                </div>
            <div class="project-bottom-btn text-center mt-50">
                <a href="project-details.php" class="bz-primary-btn">Baca Detail <i class="fa-regular fa-arrow-right"></i></a>
            </div>
        </div>
    </section>
    <!-- ./ project-section -->

    <!-- Content End -->
    <?= $SubFooter ?>
</body>

</html>