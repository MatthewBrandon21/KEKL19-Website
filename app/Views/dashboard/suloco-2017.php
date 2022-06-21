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
                                <h4 class="text-center"> Suloco Tahun 2017 </h4>
                                <script src="<?= base_url(); ?>/assets/js/embed-ui.min.js" async></script>
                                <div class="pa-gallery-player-widget" style="width:100%; height:480px; display:none;" data-link="https://photos.app.goo.gl/aUJ8kdJGYut81ftQ6" data-title="2017 Suloco" data-description="2 new items added to shared album">
                                    <object data="https://lh3.googleusercontent.com/aZuyYqXmDz5SMGqQYhF2iuHT39blo2FtssvYJUDZgnFtrVZxxuAxJv5qcjqsRp6CxTRhP5lBriWWaPf4ZQ4KmbV0nqy54bQkk29f4vRKh4V5BTrGJbsdPDO7aUwQ873PlHVL1R7ypg=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/6r3FAzaEn7K1BQvKnNCtPF12KelcgAVKB44r5dvkyGNfdEMV3Jhxlb63o715xbEMa2geKxkvrVVzYaycnq-ImLyAcf9mZZl6NfjE0H94g9vpyRSlpiK5HsYREm8lJRA6vXkkBMZ1HA=w1920-h1080"></object>
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
                                <a href="https://photos.app.goo.gl/aUJ8kdJGYut81ftQ6" target="_blank" rel="noopener noreferrer" class="btn btn-primary waves-effect waves-light w-100">Go</a>
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