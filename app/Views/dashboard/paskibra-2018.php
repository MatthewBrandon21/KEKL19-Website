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
                                <h4 class="text-center"> Paskibra Tahun 2018 </h4>
                                <script src="<?= base_url(); ?>/assets/js/embed-ui.min.js" async></script>
                                <div class="pa-gallery-player-widget" style="width:100%; height:480px; display:none;" data-link="https://photos.app.goo.gl/w8Lpkg73hazz5jg2A" data-title="2018 Paskribra" data-description="8 new items added to shared album">
                                    <object data="https://lh3.googleusercontent.com/s0xGj2g4dU6FAHY83CnAR1pf82h_ztG-kDv9wzWQG7_DUucRm9zCNB-WPhbNGO_yVyoZ3vhkV2yLSsxjE9kfUjmpxzgAc9jSFhl7VfPg08D6vIUwWEOgRY0fp8EN21MCUeTOUtnfkA=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/1cbBDQu5C6ArJl0oYsoaKajd0AxG8LreFCgfbdj9OaV-6abTisxfV-Qd6g3Hex_SndxSdszC70UEMSpt_Sgl_6At_qKZLBB2tw9DdX_mPZiBlrxBhGjgoTFb8cg0r98qIVOMcbM3vg=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/tstglvTIotnhqqdRpMbuFqvh1euuHo8kcaMaTVuERoPJxLqUnyaIsM2S80gTwxOa6bfY1PjrUFYxF5qIcmefHWj_chiHwsQqPz_MqtRlRYZEDt_DHbXKMl9iY6fEh1H-NJGjPnQJFQ=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/4WpOBozg1WlIw66Oamjb_WySWySVpkqhCDmvSEvYoynk2XmgXcCgS1q3qokY2IiXdA-g9PQ1vSnMQjitRKHnv2kVez3o5W3OOHPWp2QBcUlSf3-HtLP-YbFBqmnmz2DRLxiRU_l90Q=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/xdUDAEAXtGK6O0HHw8dBxmySgKQlc6ODv-BCYE2BTI-JXUDjUkRWoVIGKRuS8amdtA4AsRM7aH91t-ZIZZlYmNQxMIkTlMLebaupdEDivjk20IuM865appqbN3cfB9G145IRRFTXPw=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/-5jp1c0-i5bz0-AlBCpJDT4A9JmBeGyfSSWwrXRbyXTQJpXSqwXno2zyxndxAbqnDlbpLMFltbSXUIWGEUCeGNfTJnuBS3RydSIo4YK1tQaJIXK21Q7O-SlGMopvJL4RSpDw1yPctw=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/7zh0NFTQqh4by0GL7A64kuTi_Ap2quD01qlbODhyn5nIEyFJMQ4WbZlECl8Xssahui-agEj5Wbd-jlm8R_6u1q7wNwkJFm5WmVc8zzWN04FJeBhFO_dI2JBHDFCr6L8QQgiXu83oVA=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/lMsotqJX8hlBDzdqij3txBvko0-ef4BPDGyOhAa_Ijy2u3S43Em93fu3Ty_4jzGppcsnY7abjba8VnCG83H2gF6KWaKspF2WOUvvaoyMZeTPSDtBpPyij5yAjNMoVntO8iPoukYzbQ=w1920-h1080"></object>
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
                                <a href="https://photos.app.goo.gl/w8Lpkg73hazz5jg2A" target="_blank" rel="noopener noreferrer" class="btn btn-primary waves-effect waves-light w-100">Go</a>
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