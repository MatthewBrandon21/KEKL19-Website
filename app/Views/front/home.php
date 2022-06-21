<!DOCTYPE html>
<html amp>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image:src" content="<?= base_url(); ?>/assets/images/index-meta.png">
    <meta property="og:image" content="<?= base_url(); ?>/assets/images/index-meta.png">
    <meta name="twitter:title" content="Henlo! - KEKL19">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/site-identity-512x512-new-128x128.png" type="image/x-icon">
    <meta name="description" content="Website Keluarga Eks Kolese Loyola 2019. Kaum Muda Berdaya Patriotik!">
    <meta name="amp-script-src" content="">
    <title>Henlo! - KEKL19</title>
    <link rel="canonical" href="<?= base_url(); ?>/">
    <style amp-boilerplate>
        body {
            -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            animation: -amp-start 8s steps(1, end) 0s 1 normal both
        }

        @-webkit-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-moz-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-ms-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-o-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }
    </style>
    <noscript>
        <style amp-boilerplate>
            body {
                -webkit-animation: none;
                -moz-animation: none;
                -ms-animation: none;
                animation: none
            }
        </style>
    </noscript>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/aos.css" />
    <link href="<?= base_url(); ?>/assets/css/home.css" id="app-style" rel="stylesheet" type="text/css" />
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
    <script async custom-element="amp-image-lightbox" src="https://cdn.ampproject.org/v0/amp-image-lightbox-0.1.js"></script>
    <script async custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>
</head>

<body>
    <amp-sidebar id="sidebar" class="cid-sSOKSt31NZ" layout="nodisplay" side="right">
        <div class="builder-sidebar" id="builder-sidebar">
            <button on="tap:sidebar.close" class="close-sidebar">
                <span></span>
                <span></span>
            </button>
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="<?= base_url(); ?>/aboutus">
                        About Us</a>
                </li>
            </ul>
            <?php if (logged_in()) : ?>
                <div class="navbar-buttons mbr-section-btn align-center"><a class="btn btn-sm btn-secondary display-4" href="<?= base_url(); ?>/dashboard">Dashboard</a></div>
            <?php else : ?>
                <div class="navbar-buttons mbr-section-btn align-center"><a class="btn btn-sm btn-secondary display-4" href="<?= base_url(); ?>/login">Login</a></div>
            <?php endif; ?>
        </div>
    </amp-sidebar>
    <section class="menu horizontal-menu cid-sSOKSt31NZ" id="menu2-0">
        <nav class="navbar navbar-dropdown navbar-expand-lg navbar-fixed-top">
            <div class="menu-container container-fluid">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <amp-img src="<?= base_url(); ?>/assets/images/logo-kekl19-2000x1623.png" layout="responsive" width="86.2600123228589" height="70" alt="image" class="mobirise-loader">
                            <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div>
                            </div>
                            <a href="<?= base_url(); ?>/"></a>
                        </amp-img>
                    </span>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                        <li class="nav-item">
                            <a class="nav-link link text-black display-4" href="<?= base_url(); ?>/aboutus">
                                About Us</a>
                        </li>
                    </ul>
                    <?php if (logged_in()) : ?>
                        <div class="navbar-buttons mbr-section-btn align-center"><a class="btn btn-sm btn-secondary display-4" href="<?= base_url(); ?>/dashboard">Dashboard</a></div>
                    <?php else : ?>
                        <div class="navbar-buttons mbr-section-btn align-center"><a class="btn btn-sm btn-secondary display-4" href="<?= base_url(); ?>/login">Login</a></div>
                    <?php endif; ?>
                </div>
                <button on="tap:sidebar.toggle" class="ampstart-btn hamburger sticky-but">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </nav>
        <!-- AMP plug -->
    </section>
    <section class="header4 cid-sSOKUhDauW mbr-fullscreen" id="header4-1">
        <div class="container">
            <h1 class="mbr-fonts-style mbr-section-title align-left mbr-white mbr-bold mbr-pb-2 display-5" data-aos="fade-right"><span style="font-weight: normal;">
                    Keluarga Eks Kolese Loyola 2019</span></h1>
            <h2 class="mbr-fonts-style mbr-section-subtitle align-left mbr-white mbr-semibold mbr-pb-3 display-1" data-aos="fade-right">Kaum Muda<br>Berdaya Patriotik.</h2>

        </div>
    </section>
    <section class="features10 cid-sSOKVBLGYY" id="features10-2">
        <div class="container">
            <div class="mbr-row mbr-jc-c">
                <div class="image-block mbr-col-sm-12 mbr-col-md-12 mbr-col-lg-6 " data-aos="fade-right">
                    <amp-img src="<?= base_url(); ?>/assets/images/eufo1-1076x480.png" layout="responsive" width="737.5083333333333" height="329" alt="image" class="mobirise-loader">
                        <div placeholder="" class="placeholder">
                            <div class="mobirise-spinner">
                                <em></em>
                                <em></em>
                                <em></em>
                            </div>
                        </div>
                    </amp-img>
                </div>
                <div class="mbr-col-sm-12 mbr-col-md-12 mbr-col-lg-6">
                    <div class="text-block mbr-m-auto">
                        <h3 class="mbr-section-title mbr-fonts-style align-left mbr-bold mbr-pb-2 display-2" data-aos="fade-left">
                            Untuk KEKL 2019</h3>
                        <p class="mbr-fonts-style mbr-text align-left mbr-pt-1 mbr-pb-3 display-7" data-aos="fade-left">Jika nanti kau pergi melangkah, ingatlah di sini selalu ada rumah bagimu.
                            <br>Dan apabila engkau menangis oleh hidup, selalu ada KENANGAN TAK TERLUPAKAN.
                            <br>Sebagai alasan untuk mengurai senyummu.<br>
                            <br>Ad Perpetuam Rei Memoriam
                            <br>-2019-
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mbr-section 02 cid-sSOKYsdny6" id="content18-3">
        <div class="container">
            <div class="mbr-row mbr-jc-c">
                <div class="mbr-col-sm-12 mbr-col-md-10">
                    <h3 class="mbr-section-subtitle align-center mbr-regular mbr-white mbr-fonts-style mbr-pt-2 display-7" data-aos="fade-in">Untuk Kaum Muda Berdaya Patriotik
                        <div>Dulu kita berani untuk memulai
                        </div>
                        <div>Tentang segala apa yang disebut keluarga
                        </div>
                        <div>Dulu kita juga berjanji
                        </div>
                        <div>Spiritualitas Ignatian yang kita hidupi</div><br>
                        <div>
                        </div>
                        <div>Bersama Waktu
                        </div>
                        <div>Kita juga pernah menjalani, lalu menyadari
                        </div>
                        <div>Bahwa ini bukan tentang siapa yang bisa memulai dan berjanji
                        </div>
                        <div>Ini hanya tentang dinamika
                        </div>
                        <div>Yang menimbulkan sejuta tanda tanya
                        </div>
                        <div>Hanya tentang pikiran
                        </div>
                        <div>Yang membuat otak kita bekerja
                        </div>
                        <div>Dan tentang waktu, yang membuat keluarga ini bersatu
                        </div>
                        <div>Ini bukan keluarga biasa, tapi juga tidak serumit cinta segitiga</div><br>
                        <div>
                        </div>
                        <div>Kini, telah sampai kita di puncak cerita
                        </div>
                        <div>Saatnya kita pergi, tuk meraih mimpi
                        </div>
                        <div>Dan nanti, akan kembali lagi membawa cerita
                        </div>
                        <div>Di bumi Loyola tercinta ini</div><br>
                        <div>
                        </div>
                        <div><em>Dengan tulus, Loyola</em></div>
                        <div>
                        </div>
                        <div>
                        </div>
                        <div>
                        </div>
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <section class="slider2 slider cid-sSOL0LT0IW" id="slider2-4">
        <div class="container">
            <div class="mbr-pb-4">
                <h3 class="mbr-fonts-style mbr-section-title mbr-bold align-center mbr-pb-2 display-2" data-aos="fade-up">KEKL19 Gallery</h3>
            </div>
            <div class="slider-box align-center" data-aos="fade-up">
                <amp-carousel class="carousel" height="360" layout="fixed-height" type="carousel">
                    <div class="carousel-img mbr-col-sm-12">
                        <amp-img class="mobirise-loader" src="<?= base_url(); ?>/assets/images/dsc-52-900x598.jpg" alt="image" width="541.8060200668897" layout="responsive" height="360" on="tap:lightbox1" role="button" tabindex="0">
                            <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div>
                            </div>
                        </amp-img>
                        <div class="icon-wrap" on="tap:lightbox1" role="button" tabindex="0">
                            <span class="amp-iconfont mobi-mbri-search mobi-mbri"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                                    <path d="M23.7 22.3l-9.4-9.4C15.4 11.5 16 9.8 16 8c0-4.4-3.6-8-8-8S0 3.6 0 8s3.6 8 8 8c1.8 0 3.5-.6 4.9-1.7l9.4 9.4 1.4-1.4zM8 14c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6z"></path>
                                </svg></span>
                        </div>
                    </div>
                    <div class="carousel-img mbr-col-sm-12">
                        <amp-img class="mobirise-loader" src="<?= base_url(); ?>/assets/images/dsc00287-900x506.jpg" alt="image" width="640.3162055335969" height="360" layout="responsive" on="tap:lightbox1" role="button" tabindex="0">
                            <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div>
                            </div>
                        </amp-img>
                        <div class="icon-wrap" on="tap:lightbox1" role="button" tabindex="0">
                            <span class="amp-iconfont mobi-mbri-search mobi-mbri"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                                    <path d="M23.7 22.3l-9.4-9.4C15.4 11.5 16 9.8 16 8c0-4.4-3.6-8-8-8S0 3.6 0 8s3.6 8 8 8c1.8 0 3.5-.6 4.9-1.7l9.4 9.4 1.4-1.4zM8 14c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6z"></path>
                                </svg></span>
                        </div>
                    </div>
                    <div class="carousel-img mbr-col-sm-12">
                        <amp-img class="mobirise-loader" src="<?= base_url(); ?>/assets/images/gopr0769-900x675.jpg" alt="image" width="480" height="360" layout="responsive" on="tap:lightbox1" role="button" tabindex="0">
                            <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div>
                            </div>
                        </amp-img>
                        <div class="icon-wrap" on="tap:lightbox1" role="button" tabindex="0">
                            <span class="amp-iconfont mobi-mbri-search mobi-mbri"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                                    <path d="M23.7 22.3l-9.4-9.4C15.4 11.5 16 9.8 16 8c0-4.4-3.6-8-8-8S0 3.6 0 8s3.6 8 8 8c1.8 0 3.5-.6 4.9-1.7l9.4 9.4 1.4-1.4zM8 14c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6z"></path>
                                </svg></span>
                        </div>
                    </div>
                    <div class="carousel-img mbr-col-sm-12">
                        <amp-img class="mobirise-loader" src="<?= base_url(); ?>/assets/images/img-28-900x600.jpg" alt="image" width="540" height="360" layout="responsive" on="tap:lightbox1" role="button" tabindex="0">
                            <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div>
                            </div>
                        </amp-img>
                        <div class="icon-wrap" on="tap:lightbox1" role="button" tabindex="0">
                            <span class="amp-iconfont mobi-mbri-search mobi-mbri"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                                    <path d="M23.7 22.3l-9.4-9.4C15.4 11.5 16 9.8 16 8c0-4.4-3.6-8-8-8S0 3.6 0 8s3.6 8 8 8c1.8 0 3.5-.6 4.9-1.7l9.4 9.4 1.4-1.4zM8 14c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6z"></path>
                                </svg></span>
                        </div>
                    </div>
                    <div class="carousel-img mbr-col-sm-12">
                        <amp-img class="mobirise-loader" src="<?= base_url(); ?>/assets/images/img-8444-900x600.jpg" alt="image" width="540" height="360" layout="responsive" on="tap:lightbox1" role="button" tabindex="0">
                            <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div>
                            </div>
                        </amp-img>
                        <div class="icon-wrap" on="tap:lightbox1" role="button" tabindex="0">
                            <span class="amp-iconfont mobi-mbri-search mobi-mbri"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                                    <path d="M23.7 22.3l-9.4-9.4C15.4 11.5 16 9.8 16 8c0-4.4-3.6-8-8-8S0 3.6 0 8s3.6 8 8 8c1.8 0 3.5-.6 4.9-1.7l9.4 9.4 1.4-1.4zM8 14c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6z"></path>
                                </svg></span>
                        </div>
                    </div>
                    <div class="carousel-img mbr-col-sm-12">
                        <amp-img class="mobirise-loader" src="<?= base_url(); ?>/assets/images/img-8992-900x600.jpg" alt="image" width="540" height="360" layout="responsive" on="tap:lightbox1" role="button" tabindex="0">
                            <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div>
                            </div>
                        </amp-img>
                        <div class="icon-wrap" on="tap:lightbox1" role="button" tabindex="0">
                            <span class="amp-iconfont mobi-mbri-search mobi-mbri"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                                    <path d="M23.7 22.3l-9.4-9.4C15.4 11.5 16 9.8 16 8c0-4.4-3.6-8-8-8S0 3.6 0 8s3.6 8 8 8c1.8 0 3.5-.6 4.9-1.7l9.4 9.4 1.4-1.4zM8 14c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6z"></path>
                                </svg></span>
                        </div>
                    </div>
                </amp-carousel>
            </div>
            <div class="bottom_block">
                <p class="mbr-text align-center mbr-fonts-style mbr-pb-2 display-7" data-aos="fade-up">Setiap moment kebahagiaan, kesedihan, dan kenangan kita tersimpan pada sebuah foto, Semoga galeri ini dapat membuatmu tersenyum kembali :)</p>
                <div class="mbr-section-btn align-center"><a class="btn btn-md btn-secondary display-4" href="<?= base_url(); ?>/dashboard" data-aos="fade-up">See More!</a></div>
            </div>
        </div>
        <amp-image-lightbox id="lightbox1" layout="nodisplay">
            <a class="control" data-close-button-aria-label="Close">
                <span class="close"></span>
            </a>
        </amp-image-lightbox>
    </section>
    <section class="info1 cid-sSOL2JE501" id="info1-5">
        <div class="container">
            <div class="mbr-row mbr-jc-c">
                <div class="mbr-col-sm-12 mbr-col-md-10 mbr-col-lg-8">
                    <h2 class="mbr-section-title align-left mbr-fonts-style mbr-bold mbr-white mbr-pb-2 display-2" data-aos="fade-in">
                        KEKL19 Blog</h2>
                    <h3 class="mbr-text align-left mbr-fonts-style mbr-regular mbr-white display-7" data-aos="fade-in">Artikel yang dibuat oleh Tim Redaksi KEKL19 yang memberikanmu inspirasi, pandangan, dan teman penyemangatmu.</h3>
                </div>
                <div class="btn-container mbr-col-sm-12 mbr-col-md-10 mbr-col-lg-4 align-center mbr-flex">
                    <div class="mbr-section-btn mbr-m-auto"><a class="btn btn-secondary display-4" href="https://blog.kekl19.site/" target="_blank" data-aos="fade-in">Go To Blog</a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="features1 mbr-section cid-sSOL4hUsQE" id="features1-6">
        <div class="container">
            <div class="mbr-row mbr-jc-c" id="list" data-aos="fade-in">
            </div>
        </div>
    </section>
    <section class="mbr-section 02 cid-sSOL5KVOkC" id="content18-7">
        <div class="container">
            <div class="mbr-row mbr-jc-c">
                <div class="mbr-col-sm-12 mbr-col-md-10">
                    <h2 class="mbr-section-title mbr-white align-center mbr-fonts-style mbr-bold display-1" data-aos="fade-in">
                        News &amp; Event</h2>
                    <h3 class="mbr-section-subtitle align-center mbr-regular mbr-white mbr-fonts-style mbr-pt-2 display-5" data-aos="fade-in">
                        Jangan ketinggalan berita dan kegiatan terbaru KEKL19</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="features2 mbr-section cid-sSOL7kit8a" id="features2-8">
        <div class="container">
            <div class="mbr-row mbr-jc-c" data-aos="fade-in">
                <?php $count = 1;
                foreach ($news as $n) :
                    if ($count < 4) { ?>
                        <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-4 md-pb">
                            <div class="card-wrapper">
                                <div class="card-img">
                                    <amp-img src="<?= base_url(); ?>/assets/images/<?= $n['post_image'] ?>" layout="responsive" width="348" height="217.5" alt="image" class="mobirise-loader">
                                        <div placeholder="" class="placeholder">
                                            <div class="mobirise-spinner">
                                                <em></em>
                                                <em></em>
                                                <em></em>
                                            </div>
                                        </div>
                                    </amp-img>
                                </div>
                                <div class="card-box mbr-p-5">
                                    <h4 class="mbr-section-title mbr-fonts-style align-left mbr-bold mbr-pb-1 display-7"><?= $n['title'] ?></h4>
                                    <p class="mbr-text mbr-fonts-style align-left mbr-pb-1 display-4">
                                        <?= $n['body'] ?></p>
                                    <div class="mbr-section-btn align-left"><a class="btn btn-sm btn-secondary display-4" href="<?= $n['moreinfo_link'] ?>" target="_blank">Learn More</a></div>
                                </div>
                            </div>
                        </div>
                <?php }
                    $count++;
                endforeach; ?>
            </div>
        </div>
    </section>
    <section class="accordion cid-sSOL9EPb2Y" id="accordion1-9">
        <div class="container">
            <div class="mbr-row mbr-jc-c">
                <div class="mbr-col-sm-12 mbr-col-md-12 mbr-col-lg-12">
                    <h3 class="mbr-fonts-style mbr-section-title mbr-bold align-center display-2" data-aos="fade-up">Frequently asked questions.</h3>

                </div>
                <div class="mbr-col-sm-12 mbr-col-md-12 mbr-col-lg-8" data-aos="fade-up">
                    <amp-accordion class="accordion mbr-pt-4" expand-single-section="">
                        <section>
                            <header class="section-title" role="button" aria-controls="0" aria-expanded="false" tabindex="0">
                                <div class="header_title">
                                    <h4 class="tab-title mbr-bold mbr-black mbr-fonts-style display-7">Kenapa akun saya tidak bisa digunakan?</h4>
                                    <div class="iconfont-wrapper">
                                        <span class="mbr-iconfont mbr-bold mobi-mbri-arrow-down mobi-mbri"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="22" height="22">
                                                <path d="M1.4 4.6L12 15.2 22.6 4.6 24 6 12 18 0 6z"></path>
                                            </svg></span>
                                    </div>
                                </div>
                            </header>
                            <div class="content">
                                <p class="mbr-text mbr-fonts-style display-4">Pembaharuan website mempengaruhi data yang sudah ada. Oleh karena itu, jika belum pernah register pada website yang baru mohon untuk register ulang.</p>
                            </div>
                        </section>
                        <section>
                            <header class="section-title" role="button" aria-controls="0" aria-expanded="false" tabindex="0">
                                <div class="header_title">
                                    <h4 class="tab-title mbr-bold mbr-black mbr-fonts-style display-7">Apakah privacy saya aman?</h4>
                                    <div class="iconfont-wrapper">
                                        <span class="mbr-iconfont mbr-bold mobi-mbri-arrow-down mobi-mbri"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="22" height="22">
                                                <path d="M1.4 4.6L12 15.2 22.6 4.6 24 6 12 18 0 6z"></path>
                                            </svg></span>
                                    </div>
                                </div>
                            </header>
                            <div class="content">
                                <p class="mbr-text mbr-fonts-style display-4">Kami tidak menjamin untuk itu, namun yang pasti hanya bisa dilihat oleh member yang terdaftar yaitu sesama KEKL19.</p>
                            </div>
                        </section>
                        <section>
                            <header class="section-title" role="button" aria-controls="0" aria-expanded="false" tabindex="0">
                                <div class="header_title">
                                    <h4 class="tab-title mbr-bold mbr-black mbr-fonts-style display-7">Kenapa akun saya ditangguhkan?</h4>
                                    <div class="iconfont-wrapper">
                                        <span class="mbr-iconfont mbr-bold mobi-mbri-arrow-down mobi-mbri"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="22" height="22">
                                                <path d="M1.4 4.6L12 15.2 22.6 4.6 24 6 12 18 0 6z"></path>
                                            </svg></span>
                                    </div>
                                </div>
                            </header>
                            <div class="content">
                                <p class="mbr-text mbr-fonts-style display-4">
                                    Ada beberapa alasan untuk kami menangguhkan akun anda. Salah satunya jika anda bukan KEKL19.&nbsp; Untuk kesalahan penangguhan segera hubungin kami melalui admin@kekl19.site atau line brandondani2104.</p>
                            </div>
                        </section>
                    </amp-accordion>
                </div>
            </div>
        </div>
    </section>
    <section class="footer2 cid-sSOLfyqNAT" id="footer2-b">
        <div class="container">
            <div class="mbr-row mbr-jc-c">
                <div class="mbr-col-sm-12 mbr-col-lg-3 mbr-col-md-4">
                    <div class="image-block mbr-flex mbr-jc-c">
                        <amp-img src="<?= base_url(); ?>/assets/images/logo-kekl19-2000x1623.png" layout="responsive" width="213.18545902649413" height="173" alt="image" class="mobirise-loader">
                            <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div>
                            </div>
                        </amp-img>
                    </div>
                </div>
                <div class="items-col mbr-col-sm-12 align-right mbr-col-md-4">
                    <h3 class="mbr-fonts-style group-title mbr-white mbr-bold mbr-pb-2 display-5">
                        Quick Links</h3>
                    <div class="items">
                        <?php if (logged_in()) : ?>
                            <p class="item mbr-semibold mbr-fonts-style mbr-py-1 display-4">
                                <a href="<?= base_url(); ?>/logout" class="text-white">Logout</a>
                            </p>
                        <?php else : ?>
                            <p class="item mbr-semibold mbr-fonts-style mbr-py-1 display-4">
                                <a href="<?= base_url(); ?>/login" class="text-white">Login</a>
                            </p>
                            <p class="item mbr-semibold mbr-fonts-style mbr-py-1 display-4">
                                <a href="<?= base_url(); ?>/register" class="text-white">Register</a>
                            </p>
                        <?php endif; ?>
                        <p class="item mbr-semibold mbr-fonts-style mbr-py-1 display-4">
                            <a href="<?= base_url(); ?>/aboutus" class="text-white">About Us</a>
                        </p>
                    </div>
                </div>
                <div class="items-col mbr-col-sm-12 mbr-col-lg-3 align-right mbr-col-md-4">
                    <h3 class="mbr-fonts-style group-title mbr-white mbr-bold mbr-pb-2 display-5">
                        Find Us Here!</h3>
                    <div class="items">
                        <p class="item mbr-semibold mbr-fonts-style mbr-py-1 display-4"><a href="https://www.instagram.com/kekl19/" class="text-white" target="_blank">Instagram</a></p>
                        <p class="item mbr-semibold mbr-fonts-style mbr-py-1 display-4"><a href="https://www.youtube.com/channel/UC0t74s1RHy8T5qZHoUNNqLA" class="text-white text-primary" target="_blank">Youtube</a></p>
                        <p class="item mbr-semibold mbr-fonts-style mbr-py-1 display-4">
                            <a href="https://discord.gg/B56qDhc3vD" class="text-white" target="_blank">Discord</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;">
        <p style="flex: 0 0 auto; margin:0; padding-right:1rem;"></p>
    </section>
    <script src="<?= base_url(); ?>/assets/js/aos.js"></script>
    <script>
        AOS.init();
        AOS.init({
            once: true,
            delay: 100,
            duration: 1000,
            easing: 'ease'
        });
    </script>
    <script>
        var endpoint = 'https://blog.kekl19.site/wp-json/wp/v2/posts';
        var list = document.querySelector('#list');
        var count = 2;
        fetch(endpoint).then(function(response) {
            return response.json();
        }).then(function(posts) {
            var listPosts = posts.slice(0, count).map(function(post) {
                return '<div class="card mbr-col-sm-12 mbr-col-md-6"><div class="card-wrapper"><div class="card-box mbr-pt-4"><h4 class="mbr-section-title mbr-fonts-style mbr-bold display-7">' + post.title.rendered + '</h4><p class="mbr-text mbr-fonts-style mbr-pt-1 display-4"> ' + post.excerpt.rendered.replace('<p>', '').replace('</p>', '') + ' </p><p class="link mbr-fonts-style mbr-bold mbr-pt-2 display-4"><a href="#" class="text-primary"><span class="mbr-iconfont mobi-mbri-right mobi-mbri"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="16" height="16"><path d="M24 11l-6.7 6.7-1.4-1.4 4.3-4.3H0v-2h20.2l-4.3-4.3 1.4-1.4L24 11z"></path></svg></span></a><a href="' + post.link + '" class="text-primary" target="_blank">Read More</a></p></div></div></div>'
            }).join(' ');
            list.innerHTML = listPosts;
        }).catch(function(err) {
            console.warn('Something went wrong.', err);
        });
    </script>
</body>

</html>