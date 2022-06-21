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
                                <h4 class="text-center"> LC Zone Tahun 2016 </h4>
                                <script src="<?= base_url(); ?>/assets/js/embed-ui.min.js" async></script>
                                <div class="pa-gallery-player-widget" style="width:100%; height:480px; display:none;" data-link="https://photos.app.goo.gl/cSNomyxttLX7LKTM8" data-title="2016 LC Zone" data-description="9 new items added to shared album">
                                    <object data="https://lh3.googleusercontent.com/-dhLE1fu2B9qDlW3sioCqrJ9Ok0lxeGR8LRC_omSCdEGFm9zA1gVybHMBt5ajp45OAfTOnp6SMjtJS5tR_smRysiTZOhfFSyCLOSF3vsQwU1ElOqY77FYMakLFCKzMkcq9Y-eDbpAg=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/U5zHcHaZMk0DIQi2F2R1u-a4MVtnavGx2YL5wja7U-mYSNea6ImegBfJCPQsI2tOlIVHTK1DUpl2EGoWrY-1xfQbYNscCi9qcPk_iP-RDI9taX8wguOmUAh2P62ctOvGqOSIXnZO1A=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/JblghFQnDzJDhrM3yxwgDe1Xa3-DmFrpy_4RNZRql26Fzou89DQ0ZtgHDvUUQCqtfuY7EVcrPJLYmPIDcVGixLqduMRirLP7mmtWcOcIJcBg4DtS-1gKsqIZQcrpFcFfL9VoHyBqhw=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/hpg0M1ZQJ7hRjkY9DOWJ9F0IJgneZYcz-7LVgjK75tsmoDjVTCquqeLHbvydMIinZVYV6OeliPf4vprzznkFbmnm0DwRBnmBqRpqIe6kzFfTA2QSpAEnAGVHwnooYYtRw9hxyWzjUw=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/Y7Sw4xz1NPi5M3iOtGpTSSua61nWUohegZUkmGPLHyoRiBTLAyx_SIDOQ79hgMZ-TpKBlKu2YROme1Tjh2plnopkB_sCox9IBL52Q9LwKfwGTr9odqz1J7a3hJZMTE8MVV9zWNIAzQ=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/_frGDBYwXrb64fjeFkl0w_FQxhI3oWJzcFURx7vKtpgZwgRumYeZHpS4jFplzlZIHWFKN-oEwpbppH91XhNx2uFqm9VTQpA7Ok3Au63ojO3cidQfmFpr76v-IZNGMwGE7k5a4trVCQ=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/60R6_RjNN0EY54Hhf5hcbCfKBug7WDaPtCixlM8klSunC6rit_bGdiFnkzZqAxpgJLd0qYiKcgdvfrDOycloGtm-IOJQnz2tSflsnspytETUhirUTTEgZa7A2q110FcFCeSmXFb38g=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/im_qvBNqaidCgXcWPCDWc61wWMIYaYlWGwNsucO47CTje_r5Y6aAUU53xCKyP5r_0dd2pS16kIcFr-Q2gck0nBu4On2Iy6pac51QTCpHGWsg1hk4JXbpFsWGVo_ErAU0HEXofL5wJQ=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/Qpj03WRtH-J9QLpiiHsu8iTJHHD4rbpA-jmo-yz98Y5O12xo3VPJm4ly0GAUe75VmFlljCB-Ft8HNcnYyIEPNBOJxn2EpgBOY-Mk_bv5KjFB7H-iwf3OGz8O5qTj3sLxf-Wubcp5qA=w1920-h1080"></object>
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
                                <a href="https://photos.app.goo.gl/cSNomyxttLX7LKTM8" target="_blank" rel="noopener noreferrer" class="btn btn-primary waves-effect waves-light w-100">Go</a>
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