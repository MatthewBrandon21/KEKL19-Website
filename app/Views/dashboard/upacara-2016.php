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
                                <h4 class="text-center"> Upacara Tahun 2016 </h4>
                                <script src="<?= base_url(); ?>/assets/js/embed-ui.min.js" async></script>
                                <div class="pa-gallery-player-widget" style="width:100%; height:480px; display:none;" data-link="https://photos.app.goo.gl/zPmUaHYPmE6TTCHG8" data-title="2016 Upacara" data-description="4 new items added to shared album">
                                    <object data="https://lh3.googleusercontent.com/3XW39y_t26pxXEqdNsE76p9SyLZYLiyPy9mjQTR_wf2H37Tva08a_6KeACJlEALh1Bn95IuxVosLLMsxXwOJfWrBHcDwqZwntOSViwFZh1WGCSEukg4HyOtWbaPLNOahEMiqvRXkWQ=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/ovIZjXiZTY8AoahByh6oGkeveOECcXq0EV4Qj5wB8Rw8INSyWWFuQB0XAyGYGaFrcRZmY5mvqOBzgBF3nJHHvc97ispMQc5RnGmpVnYrVBdVulffp01CVJuqoLVp1g99qRRYXfojQQ=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/UByERyySHVtT54mPaTZ0kpRAHg2qdjhLiG117JSbuV1ZbJuFpx_H1pwH-H7Q81eHHzl6TcN5WB-HA0ZL6DvSmzJse18c_Z5z1yAacvZKqgSKkKSPniuOTU1NfxubLo-_5ydV6WKwoA=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/_8ytgWujZIYC8iztPV4B5bHCSfhuvzqv1J6SKp-LJ_v6rx6fswesoVFzCo9xUOx2we5qGYCi1jRnwzLo-AxYimiJf_hrxdIwbCYKAyV81E1nxWFE3RAUWwKpXn2Ny7-xDIrCR9g1wA=w1920-h1080"></object>
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
                                <a href="https://photos.app.goo.gl/zPmUaHYPmE6TTCHG8" target="_blank" rel="noopener noreferrer" class="btn btn-primary waves-effect waves-light w-100">Go</a>
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