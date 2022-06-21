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
                                <h4 class="text-center"> Rekoleksi Tahun 2017 </h4>
                                <script src="<?= base_url(); ?>/assets/js/embed-ui.min.js" async></script>
                                <div class="pa-gallery-player-widget" style="width:100%; height:480px; display:none;" data-link="https://photos.app.goo.gl/5u7RHy9ykBUM3wRZ9" data-title="2017 Rekoleksi" data-description="5 new items · Album by Moment Hunter">
                                    <object data="https://lh3.googleusercontent.com/qnTp4UPEy5VSHQlGsDOkXz-rCoisPMpDBrhr4iwxRiJThUpU1w37QkLveTl9UUJVnGWacSuSGCvQa8sNhKrZyxei_ZXFKO5LIqM8xymOI_Ark7scMTgv7adtnfOp8wHbhNOM3yK_vw=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/8gJqYS0k_KYpNYdAt0mY3zPy-GjzgI-wnBC8xuh9AdC2Stf2Ym93QtLArXsAKjxhxr_cO4OUVlXXkrsCvZ7D-eRxPs63a_jAJq3utSehBJ95jdb2UCJr_yIvg3Jxo0GHG-DNXTDv6g=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/JfC5wt2uoa_JfBCS2vS2AZCHjBFrN8w77eVW-gwykpYaZt0WICjqQSCUIaWvC2-MEz0XQ94gHkHE49gtyVdEv2RK8Odw6BcllohRybZ_Nzqcm_Fpfh5YeISJMxzrRb5sWbU0hf17Mg=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/90ExcakI5K9giQTsCgMuhf1Lt4TeH_LZ0RMcPsdVy4kt4CT0GI-N1OvimS0ZBK0Mzb5Mk2XYzqg9j_heIjEHO52c5zvWkP0653BHbGZygfLZh2kWcqQndFAaN4nfWyPSVy21aG3Kvg=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/BQAe-Ldndo8PMVO6tf4z6w6xkXepphiATEXL19UebJ3OUXyJ_8m0qxXxxeWTF1YvzQoqB93OaiicmzKEhBUkAk7zcqe-yfqGbV5wJ6zqGyt9RRj7gpa9HOX9Vdsjb_QnPXRMqeonag=w1920-h1080"></object>
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
                                <a href="https://photos.app.goo.gl/5u7RHy9ykBUM3wRZ9" target="_blank" rel="noopener noreferrer" class="btn btn-primary waves-effect waves-light w-100">Go</a>
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