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
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <form class="d-lg-block mt-4">
                            <div class="position-relative">
                                <h4 class="text-center"> Teloco Tahun 2018 </h4>
                                <script src="<?= base_url(); ?>/assets/js/embed-ui.min.js" async></script>
                                <div class="pa-gallery-player-widget" style="width:100%; height:480px; display:none;" data-link="https://photos.app.goo.gl/955HhroBH5bYQ7DD6" data-title="2018 Teloco" data-description="6 new items added to shared album">
                                    <object data="https://lh3.googleusercontent.com/9UqwNPuU0i9s5IBMXODPu90OWJrntegY0T5YkIgovPao9-mLZ0afkpWhR_exfYolUGL7swho-eYYmUTDSRA9pWLk5lQ6jEiV5nJJjaIAyNv5hGkbBcgVl4Ef7qN3NhSn2gOSnOeYsA=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/V4cAn7Djk5oh-wwxiGe3WlezVeB_V4s1C8XOrIixo_t2nvCr1PMIUmxNmMvVMbmazOCilmps40c9gTSypQPGELOCLT-vmpqDonjSzdqPHGO4avQiMKulDyYKoZr22D_itdMiCwhYsw=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/d-ZQEIf6DgaD0_Ejd2Mr9V21HuCIe22Rx6rybLGhAXd3t5TsylZNL7BnabClXjNXn3aR3ZpJMUI0oz_XqCYjOn1JWG4nIFpxbIDAQ-aGJmD6MU5Q0tVc5Wc5XqtHOWU0eq5RS99QwA=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/ug3Bun-GWLo2kVn0hnTZHfWAp4QV_PhxIzpQ-WJpwlhBnEDFoqelqAwG34RtHHF_CohWJ5IcJ6QM0qgCvO1UfKsd3Xdz4ndIZSkQC-0xhY4JgYNLmKHEqoVshN8i30OJAFuha8J_Cg=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/yMyxDd43y2KAXhWH4I0A8oo6FrEYmmxqAZFumqxjWEzyCO73s3yFUAwmhiclRM4wqDBQYONvyeBViEt1MDmJE2dtY6YyS7gryhaBN11k-TierZRR5imgBvf8wYMKGhh8OmYYpgCq3Q=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/C0NnocRfL4LCwgCARSr2cXjO8Zm1IYtvhevAIE_orb3pbc4vHsynSmD-RmzL8VP7izFTaThiHm_i8PV6p8IogXTUYbI0aRbaXPBrzvKkpBbT7saXpZ2ggUnbBrAGNRWNISQB4U5Sng=w1920-h1080"></object>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row justify-content-center pt-4">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Google Photos Album</h3>
                                <p class="card-text">Gunakan link ini jika foto di atas tidak muncul.</p>
                                <a href="https://photos.app.goo.gl/955HhroBH5bYQ7DD6" target="_blank" rel="noopener noreferrer" class="btn btn-primary waves-effect waves-light w-100">Go</a>
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