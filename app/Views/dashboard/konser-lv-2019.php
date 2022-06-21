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
                                <h4 class="text-center"> Konser LV Tahun 2019 </h4>
                                <script src="<?= base_url(); ?>/assets/js/embed-ui.min.js" async></script>
                                <div class="pa-gallery-player-widget" style="width:100%; height:480px; display:none;" data-link="https://photos.app.goo.gl/UNN7xtFttSMWn1Zm9" data-title="2019 Konser LV" data-description="6 new items added to shared album">
                                    <object data="https://lh3.googleusercontent.com/ZXecA5J8zWN2T5r7XlhmZ8j_hx-4N2DuVmRQxFtnRTNMy5cLGgQhLHYfIxwTv90fLDjkveCwqJQ2zie6sL5Zm-_He7GFeT-xgJFhZCcmOnLNQ0bSkMAYTqDGiwjWNaGMSMmngfZr8g=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/M5z8rtj-ONhzox5xnx-ENhqmoBtucPSXMH3RmJymNDvQ6Ni96mFHPG9KTxP8jCmQR2WW-wbvfuW9U7-q0ZE1OO-atV_P2ZQ_T4aYE6QqCYc2xEnfzyfDzrQwTSdA72FTn8K_ykdqWQ=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/Y3edoM-6PHqKAIyy4YJveGh-GDtCeJKxOg1RbG3gfCYGMR6EA3AW3ss8HEhSfYrisP-CI3VjAINBDH8vLG2OTvj9UHFqrGlN4462PNZGoudBqLXOfpDPbXDfPuifNmP0YScd7krRlA=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/CFupkK1IkSfV_7WdyY25fZdoLz2Wu776IuW0rvLnsE8jsZ957X-mO-v7haEKncPp3I06OI3_CGfSYmiX8rdya_ANDPrSRQbWALtDK_2sB7UQm_qenBi8gedWY0PzOCUPf8l466WKeQ=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/DAFAdppJFSR1zIthT68J8qPas0kLwBQJZZXgmmqTyeB2TA1lN8VcFCFrZiULPS0JpbvviPBS5fFl5DWzenv1C75XIbtzs0Vfi2U3otqNhTHGHjjX19d8NhSLQ5dODKfV_v2UpNElZw=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/ebmbywyTfZmLfCwVSuKYtyjsTFO8XlrAISITbFRjC4LgN_nuXLQ8Sc5GHZWD2lK633AKi2eXN81XJGJJScTzs82eKmHiAHbyGi4oDKbUSl8riZ9bsdrRWcELWiJSzvWzR55vY28itw=w1920-h1080"></object>
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
                                <a href="https://photos.app.goo.gl/UNN7xtFttSMWn1Zm9" target="_blank" rel="noopener noreferrer" class="btn btn-primary waves-effect waves-light w-100">Go</a>
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