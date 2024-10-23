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
    <title>Detail Tim</title>

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
    <?= PageHeader("Detail Tim") ?>
    <!-- Content Start -->

    <section class="team-details pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="team-details-wrap">
                        <div class="team-auhtor-area mb-80">
                            <div class="team-author-img">
                                <img src="assets/img/team/team-author-img-2.png" alt="author">
                            </div>
                            <div class="team-author-content">
                                <h3 class="title">Oliver William</h3>
                                <span class="prof">Pendiri & CEO</span>
                                <p>Oliver William, pendiri Red Company, adalah seorang profesional berpengalaman dengan lebih dari 10 tahun di industri teknologi. Dengan keahlian yang mendalam dalam pengembangan solusi IT dan manajemen proyek, Oliver telah membangun Red Company sebagai perusahaan yang dikenal karena inovasi dan pendekatan klien-sentrisnya. Dedikasinya dalam menghadirkan solusi yang relevan dan efektif membuat Red Company menjadi mitra yang andal bagi berbagai bisnis di sektor teknologi dan industri lainnya.</p>
                                <div class="author-info-items">
                                    <div class="author-info">
                                        <div class="icon"><i class="fa-solid fa-user"></i></div>
                                        <div class="content">
                                            <span>Pengalaman</span>
                                            <h4 class="info-title">10+ Tahun</h4>
                                        </div>
                                    </div>
                                    <div class="author-info">
                                        <div class="icon"><i class="fa-sharp fa-solid fa-phone"></i></div>
                                        <div class="content">
                                            <span>Nomor Hp</span>
                                            <h4 class="info-title"><a href="tel:+6283119587745">+(62) 831-1958-7745</a></h4>
                                        </div>
                                    </div>
                                    <div class="author-info">
                                        <div class="icon"><i class="fa-sharp fa-solid fa-envelope"></i></div>
                                        <div class="content">
                                            <span>Email</span>
                                            <h4 class="info-title"><a href="mailto:info@redsystem.id">info@redsystem.id</a></h4>
                                        </div>
                                    </div>
                                    <div class="author-info">
                                        <div class="icon"><i class="fa-sharp fa-solid fa-fax"></i></div>
                                        <div class="content">
                                            <span>Fax</span>
                                            <h4 class="info-title"><a href="tel:+6283119587745">+6283119587745</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-counter-area mb-80">
                            <h3 class="title">Keahlian & Keterampilan Saya</h3>
                            <p>Oliver William memiliki keahlian yang kuat dalam bisnis dan teknologi informasi (IT). Selain pengalaman lebih dari 10 tahun di industri, ia juga menguasai manajemen bisnis, strategi pengembangan perusahaan, serta pemahaman mendalam tentang solusi IT seperti integrasi sistem dan optimasi proses bisnis. Kombinasi keahlian bisnis dan IT ini membuat Oliver mampu membangun Red Company dengan fondasi yang kokoh, mengantarkannya menjadi perusahaan yang fokus pada inovasi dan kebutuhan klien, serta memberikan solusi teknologi yang relevan dan efektif.</p>
                            <div class="row gy-lg-0 gy-4 justify-content-center mt-40">
                                <div class="col-lg-4 col-md-6">
                                    <div class="team-counter">
                                        <div class="icon"><img src="assets/img/icon/team-counter-1.png" alt="icon"></div>
                                        <div class="content">
                                            <h3 class="title"><span class="odometer" data-count="89">0</span>%</h3>
                                            <p>Project Selesai</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="team-counter">
                                        <div class="icon"><img src="assets/img/icon/team-counter-2.png" alt="icon"></div>
                                        <div class="content">
                                            <h3 class="title"><span class="odometer" data-count="13">0</span>+</h3>
                                            <p>Tahun Pengalaman</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="team-counter">
                                        <div class="icon"><img src="assets/img/icon/team-counter-3.png" alt="icon"></div>
                                        <div class="content">
                                            <h3 class="title"><span class="odometer" data-count="122">0</span>+</h3>
                                            <p>Pekerjaan Bisnis</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-details-form">
                            <div class="heading-area text-center">
                                <span>Dapatkan Penawaran</span>
                                <h3 class="title">Buat Janji Temu</h3>
                            </div>
                            <form action="https://html.rrdevs.net/bizan/mail.php" class="team-form">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Nama Anda">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <input type="text" id="email" name="email" class="form-control" placeholder="Email Anda*">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <input type="text" class="form-control" name="daterange" value="01/01/2018 - 01/15/2018">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Pilih Subjek">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="form-item message-item">
                                            <textarea id="message" name="message" cols="30" rows="5" class="form-control address" placeholder="Pesan Anda"></textarea>
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
            </div>
        </div>
    </section>
    <!-- ./ team-details -->

    <!-- Content End -->
    <?= $SubFooter ?>
</body>

</html>