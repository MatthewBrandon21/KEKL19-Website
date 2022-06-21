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
                                <h4 class="text-center"> Seleksi Loparte Tahun 2016 </h4>
                                <script src="<?= base_url(); ?>/assets/js/embed-ui.min.js" async></script>
                                <div class="pa-gallery-player-widget" style="width:100%; height:480px; display:none;" data-link="https://photos.app.goo.gl/EWzsXiT1axnKsTwv8" data-title="2016 Seleksi Loparte" data-description="4 new items added to shared album">
                                    <object data="https://lh3.googleusercontent.com/U71b2pbge4TQU4qCqHYVeVjBuxGtll5yBXzTSTyrdiOPHoqVJLORwCAZXyDadnUhhyJlFjECe__jwf6paS3e-JQpH8KDhhgQH-v4Ld3SsqOMZuD2xA-0wC5t6njtTU1EsDDawfAHJQ=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/usgID-aHVRwIfOfbM62uYLwQvkPA9CebFfoXN25JnR-qeLvaCKmIoqFbL2mBGUw5kzV0UlI59fML9MwUJ7O2JMvNsFhQoEZg5ghcvoXX_ylHE5CjyC64Izz4XIsfKeWXdQYA67AT4g=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/-3xbNeJwMCeXjzE2q9qn0pLlQpH42dWfriy0Eu6g6RN9ORYe5NQJQbrC6RkMyaWZFNGKK7yK-eDOjMtQr1V0aqn6Hxg1Rg4oB_6a6oN5dWzKtkyQOvZqsgwmHrp43GZ1nEFymcN5mA=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/Kb_LTCGPJZ9_FQXo2mfTKsZYs_dp_KEI6whMgb8zSjWULbz2meX62NChOvjuF674NoKXfXchGI-Q7iDWNgkwl9SmGOzf0OGudp2VnN8M3rLlMIGVGz5F9it52iepWKf8NeDIVqB6MA=w1920-h1080"></object>
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
                                <a href="https://photos.app.goo.gl/EWzsXiT1axnKsTwv8" target="_blank" rel="noopener noreferrer" class="btn btn-primary waves-effect waves-light w-100">Go</a>
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