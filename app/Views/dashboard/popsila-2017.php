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
                                <h4 class="text-center"> Popsila Tahun 2017 </h4>
                                <script src="<?= base_url(); ?>/assets/js/embed-ui.min.js" async></script>
                                <div class="pa-gallery-player-widget" style="width:100%; height:480px; display:none;" data-link="https://photos.app.goo.gl/8R3fna94sACBqeuL9" data-title="2017 Popsila" data-description="2 new items added to shared album">
                                    <object data="https://lh3.googleusercontent.com/UNfrvrSS7thIa8InkAOuKFIg_Q-Fz2QVPOewBhPHAyJQHKWKHjUehmqxUjEAH3QegpqSvfX3fZ_j80fvObCs66EnIs4cPXJAuE0UQEw3bOo-E5cQhSnvrPLqDLIQW12izaLZlHr2Tg=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/UU3YRB-KA5bgc-hHUXyxHe5hRqBp9vQ1C4l_Xm3lVa2XLYf6HX5j85jV_qe2u3Q28aFLj6P3QYs_pqFXeMn8NPU9ajtfjfRNM28jD-W5K9FHQD_Xngns-5UZUIFSQutEp1GKmBed3A=w1920-h1080"></object>
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
                                <a href="https://photos.app.goo.gl/8R3fna94sACBqeuL9" target="_blank" rel="noopener noreferrer" class="btn btn-primary waves-effect waves-light w-100">Go</a>
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