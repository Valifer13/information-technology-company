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
    <title>Detail Layanan</title>

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
    <?= PageHeader("Detail Layanan") ?>
    <!-- Content Start -->

    <section class="service-details pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-details-content">
                        <div class="service-details-img img-reveal">
                            <div class="img-overlay"></div>
                            <img src="assets/img/service/service-details-img.png" alt="img">
                        </div>
                        <h2 class="details-title mb-20 mt-30">Konsultasi Bisnis</h2>
                        <p class="mb-40">Kami membantu perusahaan merumuskan strategi yang efektif, meningkatkan efisiensi, dan mencapai tujuan jangka panjang melalui analisis pasar dan pengembangan strategi.</p>
                        <div class="service-thumb-wrap">
                            <div class="service-thumb img-reveal">
                                <div class="img-overlay"></div>
                                <img src="assets/img/service/service-details-img-2.png" alt="service">
                            </div>
                            <div class="service-thumb img-reveal">
                                <div class="img-overlay"></div>
                                <img src="assets/img/service/service-details-img-3.png" alt="service">
                            </div>
                            <ul class="thumb-list">
                                <li><i class="fa-sharp fa-solid fa-circle-check"></i>Kami menyediakan layanan IT yang fleksibel</li>
                                <li><i class="fa-sharp fa-solid fa-circle-check"></i>Solusi IT terbaik dengan tim kami</li>
                                <li><i class="fa-sharp fa-solid fa-circle-check"></i>Solusi digital pemenang penghargaan</li>
                                <li><i class="fa-sharp fa-solid fa-circle-check"></i>25 tahun pengalaman terampil</li>
                            </ul>
                        </div>
                        <h2 class="details-title mb-20 mt-30">Bagaimana Kami Bekerja</h2>
                        <p>Kami bekerja secara kolaboratif dengan memahami kebutuhan klien, melakukan analisis mendalam, dan mengembangkan rencana yang disesuaikan untuk hasil optimal.</p>
                        <h2 class="details-title mb-20 mt-30">Manfaat untuk Bisnis Anda</h2>
                        <p>Bisnis Anda akan lebih kompetitif, produktif, dan siap beradaptasi dengan perubahan pasar.</p>
                        <div class="service-thumb-wrap-2">
                            <div class="thumb-box img-reveal">
                                <div class="img-overlay"></div>
                                <img src="assets/img/service/service-details-img-4.png" alt="service">
                            </div>
                            <div class="thumb-box img-reveal">
                                <div class="img-overlay"></div>
                                <img src="assets/img/service/service-details-img-5.png" alt="service">
                            </div>
                        </div>
                        <div class="service-details-accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Bagaimana cara Red Company membantu perusahaan saya merumuskan strategi bisnis?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Kami memulai dengan melakukan analisis mendalam terhadap situasi perusahaan Anda, termasuk analisis pasar, pesaing, dan performa internal. Berdasarkan hasil analisis tersebut, kami bekerja sama dengan Anda untuk merumuskan strategi yang sesuai dengan tujuan jangka pendek dan jangka panjang perusahaan, serta memprioritaskan langkah-langkah yang diperlukan untuk mencapai hasil yang optimal.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Apakah layanan konsultasi bisnis mencakup pemetaan risiko dan peluang?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Ya, kami menyediakan pemetaan risiko dan peluang sebagai bagian dari layanan konsultasi bisnis. Kami mengidentifikasi risiko yang mungkin menghambat pertumbuhan bisnis Anda dan peluang yang dapat dimanfaatkan untuk meningkatkan efisiensi serta profitabilitas. Dengan pendekatan ini, kami membantu Anda membuat keputusan yang lebih tepat dan proaktif.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Seberapa sering Red Company melakukan evaluasi setelah strategi diterapkan?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Kami melakukan evaluasi secara berkala setelah strategi diterapkan untuk memastikan bahwa solusi yang diberikan berjalan sesuai rencana dan memberikan hasil yang diharapkan. Evaluasi dilakukan dalam interval waktu yang disepakati, dengan laporan kemajuan dan saran untuk perbaikan jika diperlukan.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Apakah Red Company juga membantu dalam pelaksanaan strategi yang telah dirumuskan?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Tentu, kami tidak hanya membantu merumuskan strategi, tetapi juga mendampingi Anda dalam pelaksanaannya. Tim kami akan bekerja sama dengan tim internal Anda untuk mengimplementasikan rencana, memantau progres, dan memastikan semua langkah berjalan lancar sesuai target yang telah ditetapkan.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-widget">
                        <div class="download-area">
                            <div class="download-item">
                                <a href="#" class="icon">
                                    <img src="assets/img/icon/pdf.png" alt="icon">
                                </a>
                                <div class="content">
                                    <h3 class="title">Detail Layanan</h3>
                                    <span>253kb</span>
                                </div>
                            </div>
                            <div class="download-item">
                                <a href="#" class="icon">
                                    <img src="assets/img/icon/pdf.png" alt="icon">
                                </a>
                                <div class="content">
                                    <h3 class="title">Voucher Layanan</h3>
                                    <span>253kb</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-widget">
                        <h4 class="widget-header">Layanan Kami</h4>
                        <ul class="category-list">
                            <li class="active"><a href="#">Solusi Digital<span>(14)</span></a></li>
                            <li><a href="#">Analitik Data<span>(14)</span></a></li>
                            <li><a href="#">Keamanan Siber<span>(14)</span></a></li>
                            <li><a href="#">Integrasi Sistem<span>(14)</span></a></li>
                            <li><a href="#">Pengembangan Software<span>(14)</span></a></li>
                        </ul>
                    </div>
                    <div class="service-widget sticky-widget">
                        <div class="service-widget-cta">
                            <div class="bg-item">
                                <div class="bg-img" data-background="assets/img/service/service-cta.png"></div>
                                <div class="overlay"></div>
                                <div class="shape"><img src="assets/img/shapes/service-cta-shape.png" alt="shape"></div>
                            </div>
                            <div class="content text-center">
                                <a class="number" href="tel:+6219587745">(+62) 831 1958 7745</a>
                                <span>Sen-Jum: 9:00 am-7:00 pm</span>
                                <span>24/7 Layanan</span>
                                <a href="#" class="bz-primary-btn">Panggil Kami Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ footer-section -->

    <!-- Content End -->
    <?= $SubFooter ?>
</body>

</html>