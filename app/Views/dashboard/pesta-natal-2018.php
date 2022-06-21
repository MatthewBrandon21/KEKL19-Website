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
                                <h4 class="text-center"> Pesta Natal Tahun 2018 </h4>
                                <script src="<?= base_url(); ?>/assets/js/embed-ui.min.js" async></script>
                                <div class="pa-gallery-player-widget" style="width:100%; height:480px; display:none;" data-link="https://photos.app.goo.gl/XoKzG4uZvKZt95uX7" data-title="2018 Pesta Natal" data-description="5 new items added to shared album">
                                    <object data="https://lh3.googleusercontent.com/1lxV3tDQFCybVShCEgXEiWCtRdK8_Z6ZBX0nAgD-uY2F0H_x7dkz-D8_-bid42STFbKSs5wi21Ve_zckq6EXn3TiDWdwuP_fJ9dGkjRsrrJybUoTPr6TZHK8BYCSV_Fu8-vPGCGDyA=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/Us8chRYeMJ8ZHNLCkn4D4Xc-mbqQjXKSVMJJ_JF9W78Sa1v8o6LIk6WAqr1VWkjKrCLWK9RO7z9lwEmBoFSA_6st_N-cWo45y-O_6A5G3AMk_yJJGEoQk79BBKP5vXHHehqpCsEtGg=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/o_XoKMq1VeqSBIQJYENPQGUNPFwa74MYURZO01or3coWwvb3EzHfYh5KRzpqYa137HGO3-byy-AD75dajiN9w1Q6LMH3p5-cPxuyoeTpeOkdsZaMmIz829X8DnEHe3KNIrLWs9LaaA=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/h-d_ifUDNQD0-zp82KFGm0j5AstdmQckBiyJOafP1UPMHktbfWk5POoQ0Equ3ROmQv89y6u_jinafDtVXz7EAsS3sO8WSSJoj4lnvO9JC1b619CR-ha84hf92A4BBJwuUE0FxowZXA=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/PiNdfMf-ZKz9V8ySi19TL0nApnHrNiXYEc8HjPW6S2mH8rIW_qsuvbyKYCCA3kSw-jawfDq5i5kgH2pZVXPihXKvmPVGQ4-s1gLczgMmoaBJbs_n2nbxl9b0IXfEkbKCvqtnnTvw6g=w1920-h1080"></object>
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
                                <a href="https://photos.app.goo.gl/XoKzG4uZvKZt95uX7" target="_blank" rel="noopener noreferrer" class="btn btn-primary waves-effect waves-light w-100">Go</a>
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