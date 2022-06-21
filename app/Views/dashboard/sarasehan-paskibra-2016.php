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
                                <h4 class="text-center"> Sarasehan Paskibra Tahun 2016 </h4>
                                <script src="<?= base_url(); ?>/assets/js/embed-ui.min.js" async></script>
                                <div class="pa-gallery-player-widget" style="width:100%; height:480px; display:none;" data-link="https://photos.app.goo.gl/nY3h5HiN1KXu16e56" data-title="2016 Sarasehan Paskibra" data-description="5 new items added to shared album">
                                    <object data="https://lh3.googleusercontent.com/eYIKn1wSr75wk8Bmv-3mjc3v1FL1XeDXaOtn2YbRqKh3UVIRROm_JWiBYUqj2PN7NIpbDAtzk7lMs3gjQMEG7CKawptcGXjrKAyNdnq8BAq8YiCkJxrPwuZ00QEMf4NdWlNwVlPjjw=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/vTU_KjrcrCpiPLZ1aadCBpoCgAJs7rk_Q0BSnKIuij6J4bEy0yY-0TomQShuqVrAjUfO2rbaVVqQtI7-bgtxGCsv9QeFo6_J634-vUMyCMKSwO8RR2WyNgxYspral9eNPhHi200Ypg=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/E6EuCczbhaBD828vwPQ0BfCousc4c8m0gsYHuS5vH0YMZvtCKUkp2CB2wm5yqM2ihheCxgyIn82tGOnso-fwBoTapYjbVJffIha3m5lSXepziWasw4pSWE8xXi9CdWoJm-OdCL2p3A=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/zxenCvdd44_1s2ERfjV9P67mRCe8Esc2VshHDPk3Fvf2iJ6u-T9IkRl-z_Vlzd4KdmWHLy0opCTE1Vqgrn8Qv9vzZWtdqtaxg1kAMGUFBFAR1quHwVIUpjdL384OUunkwYTCgsFNZw=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/nV9kn6-e5Izee9LS4R2DGsU_edkJ4hKOKhlaVumj-JdAWr3mOB8rB83KTUJ_gvmYElSJZvQLSlW3GdIqFFjoroJu0Z86KWAJ08a2k_XssYUPpx9L3sgryUexMhpVfIvx_wY3G6SfnQ=w1920-h1080"></object>
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
                                <a href="https://photos.app.goo.gl/nY3h5HiN1KXu16e56" target="_blank" rel="noopener noreferrer" class="btn btn-primary waves-effect waves-light w-100">Go</a>
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