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
                                <h4 class="text-center"> KEKL19 Semarang </h4>
                                <script src="<?= base_url(); ?>/assets/js/embed-ui.min.js" async></script>
                                <div class="pa-gallery-player-widget" style="width:100%; height:480px; display:none;" data-link="https://photos.app.goo.gl/gpYNeW1Sy6Tzq9C79" data-title="KEKL Semarang" data-description="2 new items added to shared album">
                                    <object data="https://lh3.googleusercontent.com/HnpfFK9-AFLaf_zSQ6IIBZCrsZ7V_kSw_cgd6iIrA--zxObO617N9Lq_7J1-2wyE0BqotzaMA0_9AaX0cdSyGaxWTxsFokWfrfu_74HrQ8f49T3K0gFIK7wxGTMtDu8dkS35Rza3mQ=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/zUo0-U5vZBUI4zuxM2m6r1HxaSW67k7AtLMFKRYcMdaeOGLkNJeqBMkCCPJ2AuSTrN5wF-UQNZVER9npUzR4-2CQ9vvafMMzeAvDIuO8IcczyAO0s7cTSYz5jtMMRkrN6rVX0MuaoQ=w1920-h1080"></object>
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
                                <a href="https://photos.app.goo.gl/gpYNeW1Sy6Tzq9C79" target="_blank" rel="noopener noreferrer" class="btn btn-primary waves-effect waves-light w-100">Go</a>
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