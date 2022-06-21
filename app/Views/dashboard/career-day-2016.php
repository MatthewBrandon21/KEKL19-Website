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
                                <h4 class="text-center"> Career Day Tahun 2016 </h4>
                                <script src="<?= base_url(); ?>/assets/js/embed-ui.min.js" async></script>
                                <div class="pa-gallery-player-widget" style="width:100%; height:480px; display:none;" data-link="https://photos.app.goo.gl/KkUbR9PJagWUg4887" data-title="2016 Career Day" data-description="2 new items added to shared album">
                                    <object data="https://lh3.googleusercontent.com/hB0EiFLpy-vbC6Mo6tf0atHAerlusw1-Vor8e-rRXBAkJE7pMlw_otw-wO1C-E3CEL2s_cavi15XaLgI6S9qnF5u50zk9tiWrBgi8d9qP6mNo0lbh0h8HixVtlP4D9_z3v8QZfd5GQ=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/uQD3lSFq6Q0FIU1m5VgW_mrw0GNf9YDXrioQoKOR8m9ZN-W809EpgxFo5thVibaxvxkGRxyPM6xu7TCjodDUERzqZoxAveGYqtc3sYkHO48tvnzfpF6UOqAvz3hOGAlw6Jw9y472kQ=w1920-h1080"></object>
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
                                <a href="https://photos.app.goo.gl/KkUbR9PJagWUg4887" target="_blank" rel="noopener noreferrer" class="btn btn-primary waves-effect waves-light w-100">Go</a>
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