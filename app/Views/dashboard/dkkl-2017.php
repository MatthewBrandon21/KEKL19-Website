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
                                <h4 class="text-center"> DKKL Tahun 2017 </h4>
                                <script src="<?= base_url(); ?>/assets/js/embed-ui.min.js" async></script>
                                <div class="pa-gallery-player-widget" style="width:100%; height:480px; display:none;" data-link="https://photos.app.goo.gl/An3vqk8xVyAXoh2Q8" data-title="2017 DKKL" data-description="6 new items added to shared album">
                                    <object data="https://lh3.googleusercontent.com/xjeBdOfrPTB09KVq_09ZfMAEbI0b5CUxPvZqgJuae6NampTnGsiAqPVtXIoIrrHAyVqlqVS7D6NPbrKIggW-Eo0V0a5L9Q5clzPGRPw3klXjR5HlzCIGL1HqTjgEicZc4jsOzoDqEQ=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/T16pQ_ZhS733R8YiVdUlC6Nw8VJM7lbJQ-gnIhp90_ttbuAqSuq5x8g1N9jjVJAIn1OSksn8m7Zyczc2c13s_H7zELQkmtL1L8fhXvugvCAro0tICW7e71mgBoeMnXw18agN3SCuPw=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/6vkS6OcOjKf1QV4cKw6LZDhu-9G4piJnRUd7yua5rbajdwITJPt_a96P-uPmw21t6KqRalNhAdbos_PZxb1gABXZ7bRy3Xfr9qfXXlYHnmeMeta28UlKSVJS2z2dMPBlI-EuupbEew=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/QSoWEKk1mo43ZEKGN2n_zKdusAPD4SValf2zfLnzwLNDYfe1fGlDNn55--B5vi4JjBSfyl4zcFXxi3795c0js-nc4qvsStzl52YS584QvQECrYcdYyLy-J19b0SR2zK2ulVB4kQCIA=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/WFKaSeALQHe33v1jIcnHaJdpF8hqcG7F-YnSn9IvCmNqQykobQ0qL6yzrm05fIRZTKOpmDrWWjXa1cCLVe8mT2164gx2uC5plE_ktQnuKWOj0bCV6NhCrLI7zgFv7LwgPAxlRphsXw=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/sOzhfia4m_f8BwrLIBu04geeom0SP5xFiZV8bxEgfkoirlofYWMbqnOIrYJl9M4sQ3_ccwW0PTjg7G3g3z1TvzVf_jq_LexJ7NcHZ1t48o-_tMnjl3XUigorozfDYEJqRnWu59q80A=w1920-h1080"></object>
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
                                <a href="https://photos.app.goo.gl/An3vqk8xVyAXoh2Q8" target="_blank" rel="noopener noreferrer" class="btn btn-primary waves-effect waves-light w-100">Go</a>
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