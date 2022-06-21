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
                                <h4 class="text-center"> Teacher Day Tahun 2017 </h4>
                                <script src="<?= base_url(); ?>/assets/js/embed-ui.min.js" async></script>
                                <div class="pa-gallery-player-widget" style="width:100%; height:480px; display:none;" data-link="https://photos.app.goo.gl/v5jWdXerRinTjN7T9" data-title="2017 Teacher Day" data-description="4 new items added to shared album">
                                    <object data="https://lh3.googleusercontent.com/TLA97anVYAqpeV_iLY4xHne9p4y4KFcT4I5gChkOKq-ocynKKdA799rU38mmwmwRKKlyhmalRL6jEBUmrDSCQXv6FocbVT1EBVN3J061DXtWFsA5odWPJWQKL-ghdKai9Gsa7XnVfQ=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/c4LlPXjR2b2RlcJwP9e4bO95k9Giu88_suJtyOMFkIJrVlQ9WiYPb07KU5MwZBHDud_tetjKXgreWd57MeuDbbnp6TNfVR7_U5hHnsMPjd8xgQ0HErYMdpJRL6f46aC9S1ax9X_6-w=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/L3C62lI4MikYjFbyGU_CKeFgxjKjcKOzPjpeboFjJSqzbpI-38rpXoNncAdp9MvNDEUGAMYRW3l4ip_FopRtzRVGIiEy7z--Y4NlZIdD-LSMuFQok6pe2aYLGCsXn_PP-Q-kSPOveg=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/V4vccuQ22CXR6hLfFDqabZQE9eQVw6mbCHkf8wXVKwUccfemHqIZUjDoUWDnD7NRRGLf4h1BPszeurLoRayzVDQVQup2PnsM8d14PLIgxUW2fhjH8M2Ukj66u-KK4eYzxqhJddufQA=w1920-h1080"></object>
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
                                <a href="https://photos.app.goo.gl/v5jWdXerRinTjN7T9" target="_blank" rel="noopener noreferrer" class="btn btn-primary waves-effect waves-light w-100">Go</a>
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