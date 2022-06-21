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
                                <h4 class="text-center"> Leadership Camp Tahun 2017 </h4>
                                <script src="<?= base_url(); ?>/assets/js/embed-ui.min.js" async></script>
                                <div class="pa-gallery-player-widget" style="width:100%; height:480px; display:none;" data-link="https://photos.app.goo.gl/gkm2jZKKVguYaDtv9" data-title="2017 Leadership Camp" data-description="7 new items added to shared album">
                                    <object data="https://lh3.googleusercontent.com/oqxhHSrpoxmBjQzzd6H_fmKz7XqxxCxNve4mtQ23wgVU3JK4DvgeSA1bukpOIoWo7ikSBglXLg7TKBlte4nSZ8Nd4bngH_iqQEfTKQUevQZ0kbfpoMB90jPa4AyRX8vojYQJdKMDGQ=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/GCRq2TRHhdS9gEBFPb14RfkbnfZaYkJ72dwqo1V56aBRUjrnArWDurHjfCJY0xWzHBrhnnWR6iS1N8Urph_fawR2huoDm4bqfqY1u69wI2_tvaCdIMGwytRYO-8z81kSI2VcYBJE4A=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/jSCWszDImhsAeqZdOR1crwDamrJ1eFCFKfVxlvehtq1424jvpKu48Kiaf9i6AXBzQRnOJYrB_h_NhDeHZPWJIhzlR8pFWqrsl1-yyF54A_-u1HDpO3Q2JroEP5xy_dBJGPZSfU9Q3A=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/YQOcq7R6Xj9nJv3fcIEPXpH9Du8DU09c2Sp1JdCLqK0ngPCnPw5MDWxpc6yskeXp-hGRvomKug-NWWjIvcgvcO4KKfuC0LVlA4Dkd8vHlXSyFDQZJgYHmse1qd2cCTIcNeRw3nrO5A=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/pWQn2wLnzIQZAyK5jpAFUF84G3TWnjW7D74597Q8zuIU15LyUaGckNYl6cnQa-uH1NiCeaFgyVh3GEUGvDHeZRf4pSJk-ucmqtBI4_ZtNA268aQFvsGvC582P-u4Gwvu-jI9-oDuww=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/mR1q40-x50HlRWvpTrvwxkfGP98GQNqUdd8NJnvRaYU9pG7X0TL6grKCz-aXdcTgnRWm9DJrtt6Lff-Nl52911uEhgAI1AuhJJwX3TRFYLZVDy4kH0c4-_eyrrjNowHlIGFEtet3Fg=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/sUGan2DVLY4AJa2dZ4YrF4bhem_CK8qinP0kWsWCkLWHAKv8LiPZGHr-uoQ_Mx7aQAbgRGc9VE34Ya-Io7podPWAdF3B_mmI7RNjGIY3JJxdVG37wayEQ6GSBmG_iKlLNLAFLYBd2g=w1920-h1080"></object>
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
                                <a href="https://photos.app.goo.gl/gkm2jZKKVguYaDtv9" target="_blank" rel="noopener noreferrer" class="btn btn-primary waves-effect waves-light w-100">Go</a>
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