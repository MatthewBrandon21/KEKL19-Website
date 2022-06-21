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
                                <h4 class="text-center"> Pasar Murah Tahun 2018 </h4>
                                <script src="<?= base_url(); ?>/assets/js/embed-ui.min.js" async></script>
                                <div class="pa-gallery-player-widget" style="width:100%; height:480px; display:none;" data-link="https://photos.app.goo.gl/ewNGQAw68dWp2Hor9" data-title="2018 Pasar Murah" data-description="8 new items added to shared album">
                                    <object data="https://lh3.googleusercontent.com/K1vvBXh0-vSOdVkGsGUYP6ciguhO8YbcgS5w3waM5w0riPkbO6yIjMhjYSzelPzpDVVJoctYC2aJ198QxC-7E2N4HlO9t4DSfxkT-vkFpg0KM8H-mh-6cIYo983qMpOCeroBHRAzig=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/lpdDKF70JZZs2eAHql_6SiTaUTfjaeJEgOW46xk7iPhGo33thfDGwi16RDmkx0ZFOQT7o8R1u1FSwnIcBSRQFQaJCPQhQ4vGCYvSZS9cOrmQIip_C1lPLpXsz6w264U1B-faOXj9Rw=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/rWqSqZ5OHf4LhE8NoDKu93vYInkNVEk72561XI1_wl8GByUJzjVkuAHCobxdvym9Uq2ozZJWljrp-tFybAQATX9rkw1NSnGBKEhg47I2cY6Z5iZ3c5zzLTMms2gKYTZHYhz5WlnpXA=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/SDVVGyOhJTb3bDFzuSrTAqfUJ7mNxvpiLNXoKEPWPnhopztv3GMY3yg-FYMXKWYO_G7WvzDSbd8gF4AAW5TlEiLzjGG23DgFuIMSwj1rdBVGVR3utLLY-Zw7MSfZOtmZ9qAHCYBjEw=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/7li9ALD-v9sPaBL46g_7sfpphQHT02bRq740moXZzTIS6ymnWc4C9i41yU4DsCH-lnEfrK2eOc4tyLSpZ8-lWxBS8eZbsSHp3QDlDXW_LsLyniOH1SqPW5gG8aIqtKJTsIcl0xDpeg=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/k5zR2lPcywAS5ZtJ7QXBf-cCEZa9tCg2Qw-A_fdnwX-UqPOdv5J9DVVUpfNy9pOlOQoNObt4lLuSiUpZ-3iTNPx2JGTxfQRZGw4i5Vd5ryR27KdrbjXxC6DvmjcyF52blaLV8PJqwg=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/IYRpiN7EZk6rchYWVzN-XftidbjZjpShPamliv7MUVGo6zBxwjD3RyGC7iwMEwWMbpqS7nfOyf4B0bsuUEcvA9cF-MwBFh6Ipl9KGe2HETTjCkBxC2vzt6lEdwo9GWeePfr7fAXm7Q=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/0IJImD3zB3BkMOpdFieS8IsppmqgCkMWo4fB19hYoMB1x8ufgozSheT4MTR1F0aAjpUjpQ_8BJqbYqgVl1tW8lWQPcxweZNPbuwNyHqPZfQBliHkhcwEx66RGiJ9ZKM43ZmXroXo0g=w1920-h1080"></object>
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
                                <a href="https://photos.app.goo.gl/ewNGQAw68dWp2Hor9" target="_blank" rel="noopener noreferrer" class="btn btn-primary waves-effect waves-light w-100">Go</a>
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