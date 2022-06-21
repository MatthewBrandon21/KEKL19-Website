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
                                <h4 class="text-center"> Ekskursi Tahun 2018 </h4>
                                <script src="<?= base_url(); ?>/assets/js/embed-ui.min.js" async></script>
                                <div class="pa-gallery-player-widget" style="width:100%; height:480px; display:none;" data-link="https://photos.app.goo.gl/9PcfRG4NnEWY8Mdn6" data-title="2018 Ekskursi" data-description="7 new items · Album by Moment Hunter">
                                    <object data="https://lh3.googleusercontent.com/gKTtad2kO7nwb0GLvDnZOMdpBI46KtZZxRAOrxKSPG6ouF957t0QwXRrASzsueRgGPBkeP24XROGOuwp0bwv3X93BetKaoW6cyaR9k7gScfTwRicwUJo-Lr3fWsHNs2khtywK-I9CQ=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/Gbzq5I6AsDUcmf8LoQlKZ4Oky0_PS85alosD2MSpMt_vU05Q7CFbqvUPryzO13_GxIlCeLz4q4cCAaS239gGbwXosF_rktfEZTTAlvVxszpE6QSKL8JwOUZEsy3ZYUd9PgSFXrZtIA=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/1I801a7Lxvj1p_BRpWwTFspwrQDnFGWjPux5G37b7PE5WnjAVKyyXEzJC_4h13I7CixYlL204WWY7MJrq4w2H-WwtwbSoLkJoohm2H_TignAGLMnn5zad_PTKAj7AUMvwlm2Fizhyw=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/GzqbUf-_cLllS9uImdaxmuLJifwnxSSqWLRhnNnRomj17OtbQQHKNnoNrzgnpUpUL79dFMWesc-35bYd7yC719pXPOecPdRPgW1eZpqBxlzYOKwEZN52XVn6oLyET-YCr7tnMKNA-Q=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/94MuRFo7C-3HSFzVUVBrHYEgYptt3zYFsflyO6lmcq1EQWRV-dCYtzPgVISh2gGsNZhreAoCEhQVCBJg3wzx24fW2kP_wAs1-ufOyofhfMT0LSMCvw68-KZoDv7qRw6IEGMVc8qUOQ=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/T3wtsbFE_1qUnnwI6YpLeL913K2pQkHaHIYsW8oboIsz1YynT_HTuB2LPaiSFwwNnAWO659pgCtS0CxgA8GiN9pNJWqvpNSAs5NTHYnoLQKOAFMtC-ElSpnyshDqimgEEGz1DtQpxQ=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/4vBFIGisnPTS5aKp8ab1q332DwSwfeLAgqk2YpHcZy_NE4YbVwr5CBaT9b9zfetjZuqn46bW6xJjOhcQ_MQDQ67wtHT9LJsPkch8YhjvOvGiJkYnxL9QmLX7aH38Np0JjCzSTAZInw=w1920-h1080"></object>
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
                                <a href="https://photos.app.goo.gl/9PcfRG4NnEWY8Mdn6" target="_blank" rel="noopener noreferrer" class="btn btn-primary waves-effect waves-light w-100">Go</a>
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