<?php

include 'assets/inc/header.php';
include 'assets/inc/footer.php';

$data = file_get_contents('database.json');
$data = json_decode($data, true);

$services = $data['services'];

function service_card($title, $image, $desc) {
    return "
    <div class=\"col-lg-4 col-md-6 fade-top\">
        <div class=\"service-item\">
            <div class=\"icon\"><img src=\"$image\" alt=\"icon\"></div>
                <div class=\"service-content\">
                    <h3 class=\"title\"><a href=\"service-details.html\">$title</a></h3>
                    <p>$desc</p>
                    <a href=\"service-details.html\" class=\"bz-primary-btn\">Baca Selengkapnya <i class=\"fa-regular fa-arrow-right\"></i></a>
                </div>
            </div>
        </div>
    ";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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
    <?= $html_header ?>
    <!-- Content Start -->

    <section class="hero-section">
        <div class="hero-mask-img">
            <div class="overlay"></div>
            <div class="overlay-2"></div>
            <img src="assets/img/images/hero-img.png" alt="hero">
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
                            <img src="assets/img/images/about-img-1.png.jpeg" alt="img">
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
                <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span class="left-shape"></span>Layanan Kami<span class="right-shape"></span></h4>
                <h2 class="section-title" data-text-animation data-split="word" data-duration="1">Layanan yang Kami Tawarkan</h2>
            </div>
            <div class="row fade-wrapper gy-lg-0 gy-4 justify-content-center">
                <?php foreach ($services as $data) : ?>
                    <?= service_card($data['title'], $data['image'], $data['description']); ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- ./ service-section -->

    <!-- Content End -->
    <?= $html_footer ?>
</body>

</html>