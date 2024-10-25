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
    <?= PageHeader("Blog") ?>
    <!-- Content Start -->

    <section class="blog-details pt-130 pb-130">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-wrap">
                        <div class="blog-details-img mb-40">
                            <img src="assets/img/blog/blog-details-img.png" alt="blog">
                        </div>
                        <ul class="post-meta">
                            <li><i class="fa-regular fa-calendar"></i>24 Feb, 2024</li>
                            <li><i class="fa-regular fa-user"></i>by Sarah Johnson</li>
                        </ul>
                        <div class="blog-details-content">
                            <h2 class="details-title mb-25">Meningkatkan Efisiensi dengan Teknologi Terbaru</h2>
                            <p>Dalam era digital yang semakin berkembang, teknologi terbaru terus memainkan peran penting dalam meningkatkan efisiensi di berbagai sektor bisnis dan industri. Dengan kemajuan pesat dalam bidang kecerdasan buatan (AI), otomatisasi, serta internet of things (IoT), perusahaan-perusahaan di Indonesia semakin menyadari pentingnya mengadopsi inovasi teknologi untuk memaksimalkan produktivitas dan daya saing.</p>
                            <p class="mb-40">Teknologi terbaru tidak hanya membantu dalam mempercepat proses bisnis, tetapi juga mengurangi biaya operasional serta meminimalisir kesalahan manusia. Salah satu contoh nyata adalah penggunaan sistem AI untuk mengelola data besar (big data). Dengan analitik canggih, perusahaan kini dapat membuat keputusan bisnis yang lebih cepat dan akurat berdasarkan data real-time.</p>
                            <blockquote class="mb-40">
                                <div class="icon"><i class="fa-light fa-quote-right"></i></div>
                                <div class="content">
                                    <p>“Adopsi teknologi terbaru menjadi kunci dalam menciptakan efisiensi yang tinggi. Dengan digitalisasi, kita bisa mengoptimalkan setiap langkah dalam proses bisnis, mengurangi waktu dan biaya,”</p>
                                    <h4 class="author">William Benjamin<span>Top Author</span></h4>
                                </div>
                            </blockquote>
                            <p class="mb-40">Namun, tantangan yang dihadapi dalam implementasi teknologi ini tidak dapat diabaikan. Masih ada banyak perusahaan kecil dan menengah (UMKM) yang menghadapi kesulitan dalam mengadopsi teknologi canggih, terutama karena keterbatasan anggaran dan sumber daya manusia. Oleh karena itu, pemerintah dan berbagai institusi telah meluncurkan program pelatihan digital untuk membantu UMKM dalam mengintegrasikan teknologi ke dalam operasional mereka.</p>
                            <div class="row gy-lg-0 gy-4 justify-content-center mb-40">
                                <div class="col-lg-4 col-md-6">
                                    <div class="blog-details-thumb img-reveal">
                                        <div class="img-overlay"></div>
                                        <img src="assets/img/blog/blog-details-img-1.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="blog-details-thumb img-reveal">
                                        <div class="img-overlay"></div>
                                        <img src="assets/img/blog/blog-details-img-2.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="blog-details-thumb img-reveal">
                                        <div class="img-overlay"></div>
                                        <img src="assets/img/blog/blog-details-img-3.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <p>Seiring dengan perkembangan teknologi yang semakin pesat, dunia bisnis di Indonesia diharapkan dapat terus beradaptasi dan berkembang. Penerapan teknologi terbaru akan menjadi faktor kunci dalam mendorong pertumbuhan ekonomi yang lebih inklusif dan berkelanjutan.</p>
                            <p class="mb-30">Teknologi bukan hanya sebuah pilihan, tetapi sebuah keharusan untuk bertahan di era kompetitif ini. Bagi perusahaan yang berhasil mengintegrasikannya, masa depan yang lebih efisien dan produktif sudah menanti.</p>
                        </div>
                        <div class="tags">
                            <div class="tag-left">
                                <h4 class="follow">Tag :</h4>
                                <ul class="tag-list">
                                    <li><a href="#">Solusi Bisnis</a></li>
                                    <li><a href="#">Perkembangan</a></li>
                                    <li><a href="#">Ketangguhan</a></li>
                                </ul>
                            </div>
                            <div class="social-list-wrap">
                                <h4 class="follow">Ikuti Kami:</h4>
                                <ul class="social-list">
                                    <li>
                                        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="behance"><i class="fab fa-behance"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-author-wrap">
                            <div class="blog-author-item">
                                <div class="author-img">
                                    <img src="assets/img/blog/author-img.png" alt="img">
                                </div>
                                <div class="content">
                                    <h3 class="name">William Benjamin <span>Author</span></h3>
                                    <p>Rekayasa ulang sumber internal atau "organik" berbasis multimedia untuk portal progresif. Secara tegas memanfaatkan keterkaitan total yang ada secara ekonomis dan praktik terbaik global.</p>
                                </div>
                            </div>
                        </div>
                        <div class="comments-area">
                            <div class="section-heading">
                                <h2 class="section-title">3 Komen</h2>
                            </div>
                            <div class="comment-item">
                                <div class="comment-thumb">
                                    <img src="assets/img/blog/comment-thumb-1.jpg" alt="author">
                                </div>
                                <div class="comment-info">
                                    <div class="comments-meta">
                                        <span>10 Des, 2023 </span>
                                    </div>
                                    <h3 class="author">Daniel Adam </h3>
                                    <p>
                                    Wah, setuju banget! Teknologi memang kunci buat bisnis maju sekarang. Tapi semoga UMKM juga bisa ikutan, ya. Jangan cuma perusahaan besar yang menikmati manfaatnya. Kira-kira ada solusi atau subsidi dari pemerintah buat bantu UMKM adopsi teknologi ini?
                                    </p>
                                    <button class="reply">Balas<i class="fa-solid fa-reply"></i></button>
                                </div>
                            </div>
                            <div class="comment-item item-2">
                                <div class="comment-thumb">
                                    <img src="assets/img/blog/comment-thumb-2.jpg" alt="author">
                                </div>
                                <div class="comment-info">
                                    <div class="comments-meta">
                                        <span>10 Des, 2023 </span>
                                    </div>
                                    <h3 class="author">Sara </h3>
                                    <p>
                                    Kalau ada sih membantu banget!
                                    </p>
                                    <button class="reply">Balas<i class="fa-solid fa-reply"></i></button>
                                </div>
                            </div>
                            <div class="comment-item">
                                <div class="comment-thumb">
                                    <img src="assets/img/blog/comment-thumb-3.jpg" alt="author">
                                </div>
                                <div class="comment-info">
                                    <div class="comments-meta">
                                        <span>10 Des, 2023 </span>
                                    </div>
                                    <h3 class="author">Zenelia Lozhe </h3>
                                    <p>
                                    Artikel yang menarik! Tapi jangan lupa, teknologi canggih tanpa SDM yang mumpuni juga percuma. Menurut saya, fokus utama harus di pendidikan dan pelatihan karyawan biar bisa mengoperasikan teknologi terbaru dengan maksimal.
                                    </p>
                                    <button class="reply">Balas<i class="fa-solid fa-reply"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- ./ comments-area -->
                        <div class="form-wrap pt-70">
                            <div class="blog-contact-form">
                                <h2 class="title">Tinggalkan Balasan</h2>
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
                                                <div class="form-item message-item">
                                                    <textarea id="message" name="message" cols="30" rows="5" class="form-control address" placeholder="Pesan"></textarea>
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
                        <!-- ./ form-wrap -->
                    </div>
                </div>
                <!-- Sidebar Widgets -->
                <div class="col-lg-4">
                    <div class="sidebar-widget">
                        <div class="search-form">
                            <form action="https://html.rrdevs.net/bizan/contact.php" class="search-form">
                                <input type="text" class="form-control" placeholder="Masukan Kata Kunci">
                            </form>
                            <button class="search-btn" type="button">
                                <i class="fa-regular fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <h3 class="widget-title">Post Akhir-Akhir ini</h3>
                        <div class="sidebar-post">
                            <img src="assets/img/blog/sidebar-thumb-1.png" alt="post">
                            <div class="post-content">
                                <ul class="post-meta">
                                    <li><i class="fa-light fa-circle-user"></i>by David Smith</li>
                                </ul>
                                <h3 class="title"><a href="#">Mencapai Tujuan Bisnis dengan Konsultasi</a></h3>
                            </div>
                        </div>
                        <div class="sidebar-post">
                            <img src="assets/img/blog/sidebar-thumb-2.png" alt="post">
                            <div class="post-content">
                                <ul class="post-meta">
                                    <li><i class="fa-light fa-circle-user"></i>by David Smith</li>
                                </ul>
                                <h3 class="title"><a href="#">Strategi Konsultasi untuk Beradaptasi dengan Perubahan</a></h3>
                            </div>
                        </div>
                        <div class="sidebar-post">
                            <img src="assets/img/blog/sidebar-thumb-3.png" alt="post">
                            <div class="post-content">
                                <ul class="post-meta">
                                    <li><i class="fa-light fa-circle-user"></i>by David Smith</li>
                                </ul>
                                <h3 class="title"><a href="#">Peran Konsultasi Bisnis dalam Mendorong Inovasi</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <h3 class="widget-title">Kategori</h3>
                        <ul class="category-list">
                            <li><a href="#">Layanan IT <i class="fa-sharp fa-regular fa-arrow-right"></i></a></li>
                            <li><a href="#">Layanan Bisnis <i class="fa-sharp fa-regular fa-arrow-right"></i></a></li>
                            <li><a href="#">Layanan Strategis<i class="fa-sharp fa-regular fa-arrow-right"></i></a></li>
                            <li><a href="#">Layanan Branding<i class="fa-sharp fa-regular fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                    <div class="sidebar-widget">
                        <h3 class="widget-title">Galeri</h3>
                        <div class="blog-gallery-wrap">
                            <div class="gallary-img">
                                <a href="assets/img/blog/blog-inner-1.png" class="img-popup venobox"><img src="assets/img/blog/blog-gallery-1.png" alt="img"></a>
                            </div>
                            <div class="gallary-img">
                                <a href="assets/img/blog/blog-inner-2.png" class="img-popup venobox"><img src="assets/img/blog/blog-gallery-2.png" alt="img"></a>
                            </div>
                            <div class="gallary-img">
                                <a href="assets/img/blog/blog-inner-3.png" class="img-popup venobox"><img src="assets/img/blog/blog-gallery-3.png" alt="img"></a>
                            </div>
                            <div class="gallary-img">
                                <a href="assets/img/blog/blog-inner-4.png" class="img-popup venobox"><img src="assets/img/blog/blog-gallery-4.png" alt="img"></a>
                            </div>
                            <div class="gallary-img">
                                <a href="assets/img/blog/blog-inner-1.png" class="img-popup venobox"><img src="assets/img/blog/blog-gallery-5.png" alt="img"></a>
                            </div>
                            <div class="gallary-img">
                                <a href="assets/img/blog/blog-inner-2.png" class="img-popup venobox"><img src="assets/img/blog/blog-gallery-6.png" alt="img"></a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget sticky-widget">
                        <h3 class="widget-title">Tag</h3>
                        <ul class="tags">
                            <li><a href="#">Saran</a></li>
                            <li><a href="#">Autor</a></li>
                            <li><a href="#">Tips</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">UI/UX Design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Kecepatan</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ Blog Details -->

    <!-- Content End -->
    <?= $SubFooter ?>
</body>

</html>