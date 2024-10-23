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
    <title>Kontak</title>

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
    <?= PageHeader("Kontak Kami", "Kontak") ?>
    <!-- Content Start -->

    <section class="contact-section pt-130 pb-130">
        <div class="container">
            <div class="row gy-lg-0 gy-5">
                <div class="col-lg-7">
                    <div class="blog-contact-form">
                        <h2 class="title mb-0">TInggalkan Balasan</h2>
                        <p class="mb-30 mt-10">Isi Formulir dan Kirimkan Pertanyaan Luar Biasa Anda kepada Kami</p>
                        <div class="request-form">
                            <form action="https://html.rrdevs.net/bizan/mail.php" method="post" id="ajax_contact" class="form-horizontal">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Nama Anda">
                                            <div class="icon"><i class="fa-regular fa-user"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <input type="email" id="email" name="email" class="form-control" placeholder="Email Anda">
                                            <div class="icon"><i class="fa-sharp fa-regular fa-envelope"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="form-item">
                                            <div class="nice-select select-control form-control country" tabindex="0"><span class="current">Pilih Subject</span>
                                                <ul class="list">
                                                    <li data-value="" class="option selected focus">Pilih Subject</li>
                                                    <li data-value="vdt" class="option">Rencana Satu</li>
                                                    <li data-value="can" class="option">Rencana Dua</li>
                                                    <li data-value="uk" class="option">Rencana Tiga</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="form-item message-item">
                                            <textarea id="message" name="message" cols="30" rows="5" class="form-control address" placeholder="Pesan Anda"></textarea>
                                            <div class="icon"><i class="fa-light fa-messages"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-btn">
                                    <button id="submit" class="bz-primary-btn" type="submit">Kirim Pesan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="contact-content">
                        <div class="contact-top">
                            <h3 class="title">Informasi Kantor</h3>
                            <p>Merekapitalisasi sepenuhnya komunitas 24/7 melalui metrik yang sesuai standar.</p>
                        </div>
                        <div class="contact-list">
                            <div class="list-item">
                                <div class="icon">
                                    <i class="fa-sharp fa-solid fa-phone"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Nomor & Email</h4>
                                    <span><a href="tel:+6219587745">(+62) 831 1958 7745</a></span>
                                    <span><a href="mailto:info@redsystem.id">info@redsystem.id</a></span>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="icon">
                                    <i class="fa-sharp fa-solid fa-location-dot"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Alamat Kantor Kami</h4>
                                    <p>Jl. Ratna No 68 G, Tonja, Denpasar Utara, Denpasar - Bali . 80239</p>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="icon">
                                    <i class="fa-sharp fa-solid fa-clock"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Waktu Kerja Resmi</h4>
                                    <span>Monday - Friday: 09:00 - 19:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ contact-section -->

    <!-- Content End -->
    <?= $SubFooter ?>
</body>

</html>