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
                                <h4 class="text-center"> LPL Tahun 2018 </h4>
                                <script src="<?= base_url(); ?>/assets/js/embed-ui.min.js" async></script>
                                <div class="pa-gallery-player-widget" style="width:100%; height:480px; display:none;" data-link="https://photos.app.goo.gl/iqL8gVK4KXNW9Ad2A" data-title="2018 LPL" data-description="5 new items added to shared album">
                                    <object data="https://lh3.googleusercontent.com/3ojv1eBFXGO03E0Bj_2VEWz64quWyRhIPQI6g8rICEM7uIGts3eulOJDUIfozclL5TuAmAqXCTvZ0dTzF34WhyTIpzPAOTgZPYc4tGXShzXr8I7nUNcddbH--0PVzuwsMw3e9Q2Khg=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/dNxzAUGdGJw6X0FL_0MuvP8DzDIUVRzF9VHdyV2Zu3tqlv-MYg69DiHmNILFdMpSVkS11NYBEKuuF_fiWcqZNjuQAnMexBR3OMrP4iSjQgmtSdAzs5scwu6MftvPb72SipAESEm7mw=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/au60V8phaGss8vJWZb8aK3wCLaihytPIxXub9tsIgkLnpwk9-S6WUl52X2GdyOio2qDA-DivjbJow9c_Wre3EV2VOQD6E8NDBwt8qStlF9m4DXVJg6FJOFSOzlquLEuEbouSE7XasA=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/SgLkI9EzTrG2GxG6lwy3T4dIMBNiO43288k9JnBLKCdTNzNoyhy7MT9E9rGknwgqi8TqxR4d38TMyHc_uB8ZyVxZVJ-OSW3dXEltgGM67xJnC6-AGX7YPilpw_Ks9YGQJBhseTM2OQ=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/soik768nPtnGeTxR0rEwLJxu-0UL6w2ZErxmXYE2AXKsTx6G1KwiBPPvsjNxZ8MzsurvIXJB-tmtz8P6Bm0X9jL41kBegkfEkyp0qYkCmAFjrC_t9Y1rVcwRDQ-_FNyJNO0PFrPqsQ=w1920-h1080"></object>
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
                                <a href="https://photos.app.goo.gl/iqL8gVK4KXNW9Ad2A" target="_blank" rel="noopener noreferrer" class="btn btn-primary waves-effect waves-light w-100">Go</a>
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