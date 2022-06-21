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
                                <h4 class="text-center"> KEKL19 Jogja Solo </h4>
                                <script src="<?= base_url(); ?>/assets/js/embed-ui.min.js" async></script>
                                <div class="pa-gallery-player-widget" style="width:100%; height:480px; display:none;" data-link="https://photos.app.goo.gl/uv9XGZfHZ6RUVsH39" data-title="KEKL Jogja Solo" data-description="2 new items added to shared album">
                                    <object data="https://lh3.googleusercontent.com/Qv_RJ_SwjhBpHwpCfS7aOOE0CpnH7r334A3i4CYScYSKxNu0CyZ6qB1S9HC3jSyNVxsYFxJ8Vs86U9fT2xXPymrAZlABF-DvB_cjgkP2YyHecUutU_kDAk0WvhlNdk-wFtJ-gOq_gw=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/kaKtW4CEpZdLLn60LzU9GgWtOUFBzRnxwV1XEqIf9wpfOJfSxEMkytKuyHkYdy46UC0dr0OSB0Zy8hnycd8kP8kFNf4NMtzNI-eF66tqMvgfU2cdtD4w4QVQUuez5fqXsDOSw5kz9w=w1920-h1080"></object>
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
                                <a href="https://photos.app.goo.gl/uv9XGZfHZ6RUVsH39" target="_blank" rel="noopener noreferrer" class="btn btn-primary waves-effect waves-light w-100">Go</a>
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