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
    <title>FaQ</title>

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
    <?= PageHeader("FaQ") ?>
    <!-- Content Start -->

    <section class="faq-section pt-120 pb-120">
        <div class="container">
            <div class="row gy-lg-0 gy-5">
                <div class="col-lg-8">
                    <div class="faq-content">
                        <div class="faq-accordion fade-wrapper">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item fade-top">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Apa layanan utama yang ditawarkan oleh ITC?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            ITC menyediakan solusi teknologi inovatif yang mencakup optimasi proses bisnis, konsultasi IT, integrasi sistem, dan pengembangan perangkat lunak yang disesuaikan dengan kebutuhan klien.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item fade-top">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Bagaimana ITC memastikan bahwa solusi yang diberikan efektif?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Kami menggunakan teknologi terbaru dan bekerja sama secara langsung dengan klien untuk memahami kebutuhan mereka. Dengan pendekatakan klien-sentris dan tim profesional berpengalaman, kami memastikan setiap solusi dioptimalkan untuk hasil yang maksimal.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item fade-top">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Siapa saja yang bisa menjadi klien ITC?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Kami melayani berbagai industri, mulai dari perusahaan kecil hingga perusahaan besar di berbagai sektor, seperti teknologi, manufaktur, ritel, dan layanan keuangan.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item fade-top">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Apa keunggulan utama ITC dibandingkan kompetitor?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Keunggulan kami terletak pada pengalaman puluhan tahun di industri, penggunaan teknologi terkini, dan tim profesional yang berdedikasi. Kami fokus pada solusi yang dipersonalisasi dan efektif untuk setiap klien.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-0 fade-top">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Bagaimana cara memulai kerja sama dengan ITC?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Anda dapat menghubungi kami melalui website resmi atau nomor kontak yang tersedia. Tim kami akan berdiskusi dengan Anda untuk memahami kebutuhan spesifik Anda dan menentukan solusi terbaik.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="faq-widget mb-40">
                        <div class="search-box">
                            <form action="https://html.rrdevs.net/bizan/mail.php" class="search-form">
                                <input type="text" class="form-control" placeholder="Masukan Kata Kunci">
                                <button class="search-btn" type="button">
                                    <i class="fa-light fa-magnifying-glass"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="faq-sponsor">
                        <img src="assets/img/images/sponsor-img.png" alt="img">
                        <h4 class="sponsor-text">Iklan Sponsor</h4>
                        <h4 class="sponsor-text-2">424X350</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ request-section -->

    <!-- Content End -->
    <?= $SubFooter ?>
</body>

</html>