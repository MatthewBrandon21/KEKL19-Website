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
                                <h4 class="text-center"> Sadar Lingkungan Tahun 2018 </h4>
                                <script src="<?= base_url(); ?>/assets/js/embed-ui.min.js" async></script>
                                <div class="pa-gallery-player-widget" style="width:100%; height:480px; display:none;" data-link="https://photos.app.goo.gl/Ck2XJWVKe3Hsu2aB7" data-title="2018 Sadar Lingkungan" data-description="7 new items added to shared album">
                                    <object data="https://lh3.googleusercontent.com/5rnTEp8M3AT4Z5fvqzsimrcyMTdGdwu_5Yc6K81GDY_yWmUics6u4C1CCQ2H9wrK26laxeU8cyhTk2IgC9FJ8U60iovGHLffb4BpPj6iDYY9om7bP4nKYjB_tPtSiWbl6_U83JPWKA=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/1dOICno5KJJAdP-m3R-k_vyBY18SU2gIrNu4lbq23gizyc2RfKz187Gu51L_te6ZKZC0LdHWavXmpyL5Jwe8TrNwKF16Un5L5q1zq10qN7y43RBVNCqkHZhYos10DSIArMFL4P07_A=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/Wn1FLDBzbkLOElJJNzMYEGtptRh7wQfYsJQ_3TUYVjfHpGa1CoOvGJzDc__6FUJ448aS-tCebWbzwmxcct5jh8WazwXvtLlNSFicjHhu5ElLt3etWXSugvkRcdPMzVv_cyZBIYNe1A=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/8T2auniN0D6GtRj-xD7ZdfhVNhC5f9O5nvZaLx7YjoJ7xUjsQz2YlN34Ffhjycrcd_JyFXbD8PBTju0dA5Pjqr4gcJr8HM4-lZ9gC5qMvkzR-rz9A4J3p1EMKD_8XKv3UL4f2h0VsQ=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/13epSmkX_f6yKjsUbPWsinpRwKBcELE3jLSqmrySLhQxi9ZWsym0zFP5mcuoew6DUbIdgPjTY-PCDPR6TBXoYEPRz1p3-6UgW1UnbApKL5_mN5WPLAZPgQbvmTDjdL3sj5J9D-S8vA=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/zYTb8FyCnHY1dbdCw9yAacxf0YRa2HYup3Q9a-ZicuOoHAqsYgnsqYp-s1StAgyIFvukTKbEzIGda6hS2toCgl1RZrzSswAzIoGVBdcohDyY-y-psV1gJhehRXiOCZC01-u6_JUOKw=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/zLP0T4T8-ytVB_lKijOymG9wWNUiDbULNGXuPxonaOuuM0ljeiNiu0PBlVe9TFb9x86f5Pl9-_TKvZJwwb-xGLjCo0wTquajB77oxZtSDOzV8bepo7kigeoSQzL178amgqTnvknKuw=w1920-h1080"></object>
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
                                <a href="https://photos.app.goo.gl/Ck2XJWVKe3Hsu2aB7" target="_blank" rel="noopener noreferrer" class="btn btn-primary waves-effect waves-light w-100">Go</a>
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