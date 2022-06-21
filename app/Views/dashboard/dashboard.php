<!doctype html>
<html lang="en">

<head>
    <?= $title_meta ?>
    <?= $this->include('partials/head-css') ?>
</head>

<?= $this->include('partials/body') ?>
<div id="layout-wrapper">
    <?= $this->include('partials/menu') ?>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <?= $page_title ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-center mt-3 pb-4">
                                    <div class="col-xl-5 col-lg-8">
                                        <div class="text-center">
                                            <h5>Welcome home, Fam!</h5>
                                            <p class="text-muted"><?= user()->fullname; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center mt-3 pt-3">
                                    <div class="col-xl-5 col-lg-8">
                                        <div class="text-center">
                                            <h5>Frequently asked questions</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5 pb-2">
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body overflow-hidden position-relative">
                                                <div>
                                                    <i class="bx bx-help-circle widget-box-1-icon text-primary"></i>
                                                </div>
                                                <div class="faq-count">
                                                    <h5 class="text-primary">01.</h5>
                                                </div>
                                                <h5 class="mt-3">Other content?</h5>
                                                <p class="text-muted mt-3 mb-0">Karena mimin sedang tidak bisa mampir ke ruang MH lagi, jadi sementara konten foto dan videonya itu dulu. Kamu dapat bantu mimin untuk kumpulin foto atau video loh! Klik tombol upload pada sidebar dashboard.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body overflow-hidden position-relative">
                                                <div>
                                                    <i class="bx bx-help-circle widget-box-1-icon text-primary"></i>
                                                </div>
                                                <div class="faq-count">
                                                    <h5 class="text-primary">02.</h5>
                                                </div>
                                                <h5 class="mt-3">Error & Bug ?</h5>
                                                <p class="text-muted mt-3 mb-0">Anda bisa menyampaikannya kepada admin dengan menggunakan fitur report yang dapat ditemukan pada sidebar dashboard.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body overflow-hidden position-relative">
                                                <div>
                                                    <i class="bx bx-help-circle widget-box-1-icon text-primary"></i>
                                                </div>
                                                <div class="faq-count">
                                                    <h5 class="text-primary">03.</h5>
                                                </div>
                                                <h5 class="mt-3">
                                                    Image in gallery not showing?</h5>
                                                <p class="text-muted mt-3 mb-0">Hal ini karena keterbatasan resourse pada server KEKL19. Namun anda tetap bisa melihat konten tersebut pada google photo album yang dapat ditemukan pada tiap halaman galery.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body overflow-hidden position-relative">
                                                <div>
                                                    <i class="bx bx-help-circle widget-box-1-icon text-primary"></i>
                                                </div>
                                                <div class="faq-count">
                                                    <h5 class="text-primary">04.</h5>
                                                </div>
                                                <h5 class="mt-3">Want to contribute to upcoming KEKL19 Events?</h5>
                                                <p class="text-muted mt-3 mb-0">Memiliki ide untuk event seperti Temu Kangen KEKL19 2020? Atau ingin ikut berkontribusi event KEKL19 berikutnya? Kontak saja ke Tim Kreatif KEKL19 di creativekekl19@gmail.com atau PC Kaleb.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body overflow-hidden position-relative">
                                                <div>
                                                    <i class="bx bx-help-circle widget-box-1-icon text-primary"></i>
                                                </div>
                                                <div class="faq-count">
                                                    <h5 class="text-primary">05.</h5>
                                                </div>
                                                <h5 class="mt-3">Want to join code?</h5>
                                                <p class="text-muted mt-3 mb-0">Memiliki ide untuk design UI/UX yang lebih baik, ingin membuat aplikasi KEKL19 lainya, atau hanya ingin belajar? Kontak saja ke brandon, dengan senang kita hati bisa coding bareng. Hei, itu bisa menjadi protofolio yang bagus loh! (Maybe KEKL19 Virtual Space !?!?).</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center mt-3 pt-3">
                                    <div class="col-xl-5 col-lg-8">
                                        <div class="text-center">
                                            <h5>Our Social Media</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center mt-3 pb-4">
                                    <div class="col-xl-4">
                                        <div class="card bg-primary text-white shadow-primary card-h-100">
                                            <div class="card-body p-0">
                                                <div id="carouselExampleCaptions" class="carousel slide text-center widget-carousel" data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <div class="text-center p-4">
                                                                <i class=" bx bxl-discord widget-box-1-icon"></i>
                                                                <div class="avatar-md m-auto">
                                                                    <span class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                                                        <i class=" bx bxl-discord"></i>
                                                                    </span>
                                                                </div>
                                                                <h4 class="mt-3 lh-base fw-normal text-white"><b>Discord</b> server</h4>
                                                                <form action="https://discord.gg/B56qDhc3vD">
                                                                    <button type="submit" class="btn btn-light btn-sm">Join <i class="mdi mdi-arrow-right ms-1"></i></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <div class="text-center p-4">
                                                                <i class=" fab fa-instagram widget-box-1-icon"></i>
                                                                <div class="avatar-md m-auto">
                                                                    <span class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                                                        <i class=" fab fa-instagram"></i>
                                                                    </span>
                                                                </div>
                                                                <h4 class="mt-3 lh-base fw-normal text-white"><b>Instagram</b></h4>
                                                                <form action="https://www.instagram.com/kekl19/">
                                                                    <button type="submit" class="btn btn-light btn-sm">Follow <i class="mdi mdi-arrow-right ms-1"></i></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-indicators carousel-indicators-rounded">
                                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->include('partials/footer') ?>
    </div>
</div>
<?= $this->include('partials/right-sidebar') ?>
<?= $this->include('partials/vendor-scripts') ?>
<script src="<?= base_url(); ?>/assets/js/app.js"></script>
</body>

</html>