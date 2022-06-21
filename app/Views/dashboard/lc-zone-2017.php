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
                                <h4 class="text-center"> LC Zone Tahun 2017 </h4>
                                <script src="<?= base_url(); ?>/assets/js/embed-ui.min.js" async></script>
                                <div class="pa-gallery-player-widget" style="width:100%; height:480px; display:none;" data-link="https://photos.app.goo.gl/PSqHNk6jm6ePUFm5A" data-title="2017 LC Zone" data-description="5 new items added to shared album">
                                    <object data="https://lh3.googleusercontent.com/F8M-zBrFfK5pT1i9L0r_pnd8p8Uk34KRtiYrxAVETqolfEecHcBuZQ7x94LO0VEjJZUV83Ep8mqNsOzc1LMhA-QepiD3rSU-dL6jxqcElkmthrnVxl2_nuzXUmsf6QIwrE_bs6RvZA=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/Gv2h1HVWALzHhVyplJMtoIyJHKONJw39NxSileeBXGbWanYZdvRKO8u48-KGj4U-8T8pzuxxvKaFIqieimNjnjRtNv74A7vjthhLbKQu4Oddoj2coIlNZYb-2tlh4mrXrq0jllIwOA=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/aIidWcH8AKKUdjfcq1u6BgiL0HLd-UW4vW2MsSkZqlu7e3HuzahOugT_qUQ7KD08DUVHAOxx67oNXDcopXAiTWZcBeXu24pkv6j1Eo8a9CM4f6jZznwZkhii37lwUFlpru8hvpolfg=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/RdhtIJXXfSiTyN46v2kT0lG0lFSIMjuekSj8RS-t_0rtcntVOrPRziD14hm96-pB7K7tmGwgU3b-Y-7nzSWpBDrynMcOctwESOSr5C_pmYtIFInH-H3HuWLdHF1QIB6Y1LObSyXfIg=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/tKTbLb5OzG_Y3AnC93zdDMdP7in0b_Fg8NLTvuYiGh-8f70RM0JskIWxXCsPSmNQ6bdyXQCp3ra16yr3sfkxKgijYU1qsuPEtGb1xom3vmWVa8HVS-SvhEHFY2zF5f1N-LqiCwLCfQ=w1920-h1080"></object>
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
                                <a href="https://photos.app.goo.gl/PSqHNk6jm6ePUFm5A" target="_blank" rel="noopener noreferrer" class="btn btn-primary waves-effect waves-light w-100">Go</a>
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