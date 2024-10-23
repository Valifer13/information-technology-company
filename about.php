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
    <title>Tentang Kami</title>

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
    <?= PageHeader("Tentang Kami", "Tentang") ?>
    <!-- Content Start -->

    <section class="about-section-4 pt-120 pb-120">
        <div class="shapes">
            <div class="shape"><img src="assets/img/shapes/about-shape-3.png" alt="shape"></div>
        </div>
        <div class="container">
            <div class="row align-items-center fade-wrapper">
                <div class="col-lg-6 col-md-12">
                    <div class="about-content-4">
                        <div class="section-heading mb-30">
                            <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span class="left-shape"></span>Tentang Perusahaan Kami</h4>
                            <h2 class="section-title mb-0" data-text-animation data-split="word" data-duration="1">Menginspirasi Kebutuhan Teknologi untuk Bisnis</h2>
                        </div>
                        <p class="fade-top">ITC adalah perusahaan teknologi yang berfokus pada solusi inovatif untuk meningkatkan efisiensi bisnis. Kami hadir untuk membantu klien mencapai kesuksesan melalui layanan berkualitas tinggi.</p>
                        <div class="about-contact-items fade-top">
                            <div class="about-contact">
                                <div class="icon"><i class="fa-sharp fa-solid fa-phone"></i></div>
                                <div class="content">
                                    <span>Hubungi Kami</span>
                                    <a href="tel:+6283119587745">+(62) 831 1958 7745</a>
                                </div>
                            </div>
                            <div class="about-author">
                                <img src="assets/img/images/about-author.png" alt="img">
                                <h4 class="name"><span>Founder & CEO</span>Admin</h4>
                            </div>
                        </div>
                        <div class="about-btn-wrap fade-top">
                            <a href="#" class="bz-primary-btn about-btn">Baca Detail <i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-img-wrap-4 fade-top">
                        <div class="about-img img-1">
                            <img src="assets/img/images/about-img-6.png" alt="about">
                        </div>
                        <div class="about-img img-2">
                            <img src="assets/img/images/about-img-7.png" alt="about">
                        </div>
                        <div class="about-counter">
                            <div class="shape"><img src="assets/img/shapes/about-counter-shape.png" alt="shape"></div>
                            <h3 class="title"><span class="odometer" data-count="1011">0</span></h3>
                            <p>Kueri Sukses</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ about-section -->

    <section class="about-cta fade-wrapper">
        <div class="container">
            <div class="about-cta-wrap pt-120 pb-120 text-center fade-top">
                <div class="bg-item">
                    <div class="bg-img" data-background="assets/img/bg-img/about-cta-bg.jpg"></div>
                    <div class="overlay"></div>
                    <div class="overlay-2"></div>
                    <div class="shape"><img src="assets/img/shapes/about-cta-shape.png" alt="shape"></div>
                </div>
                <div class="section-heading white-content mb-40">
                    <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span class="left-shape"></span>Tentang Perusahaan Kami</h4>
                    <h2 class="section-title mb-0" data-text-animation data-split="word" data-duration="1">Revolusikan kehadiran digital Anda dengan layanan strategis kami</h2>
                </div>
                <a href="contact.php" class="bz-primary-btn">Mulai Sekarang<i class="fa-regular fa-arrow-right"></i></a>
            </div>
        </div>
    </section>
    <!-- ./ about-cta -->

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

    <section class="testimonial-section pt-120 pb-120" data-background="assets/img/bg-img/testi-bg.png">
        <div class="container">
            <div class="section-heading text-center">
                <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span class="left-shape"></span>Ulasan Balik Klien</h4>
                <h2 class="section-title mb-0" data-text-animation data-split="word" data-duration="1">Apa yang pelanggan kami katakan</h2>
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

    <section class="faq-section pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="faq-content">
                        <div class="section-heading mb-30">
                            <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5"><span class="left-shape"></span>Pertanyaan yang sering diajukan</h4>
                            <h2 class="section-title mb-0" data-text-animation data-split="word" data-duration="1">Kenapa kamu harus bekerja dengan kami?</h2>
                        </div>
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
                <div class="col-lg-6">
                    <div class="faq-img img-reveal">
                        <div class="img-overlay"></div>
                        <img src="assets/img/images/faq-img.png" alt="faq">
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