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
                                <h4 class="text-center"> LOSAAC Tahun 2017 </h4>
                                <script src="<?= base_url(); ?>/assets/js/embed-ui.min.js" async></script>
                                <div class="pa-gallery-player-widget" style="width:100%; height:480px; display:none;" data-link="https://photos.app.goo.gl/HTnM6H1FTbcAXDcL7" data-title="2017 LOSAAC" data-description="8 new items added to shared album">
                                    <object data="https://lh3.googleusercontent.com/s1ZMqgJUcX8XyIJWeSoRIRWJRJy6kGfLJacGmjV95rty_EzMzoK0BJlQ1H3F8IgNM9DG5nk5m5ZDC5dLVUfYvlY7WtL4ian418xNgD9wn3Tp-geaqX-nogtqYGQtsopoVRXt0Ul0oA=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/WCk4NmYp69qytczJ0CDd0-NQlo8yhAENu_0EqtfCFFfacChvbarDugL4dt-lE99OCHkubDq_IW1Hn6sJgLc8NqL35Dm2ueLEcnJj1hx2RsFBdavPmy5ZKQJpD0FEH0tb4Pg0zDpVJw=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/7tOj1M5TovfOQlvBx4Y27-_FVfeFh0DZScJGSrGomfXMc7gjnaqSUr0sSy3lj7hB-GJalPyS2hxZuxhA6vJwO0CAZMK-TH43Q-Mg1_HP1laLp8bb7eAs4haMag5k7dItahgc4E74sg=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/tEA2MgZfPWb58Byy3PXk2oNQQfxiR8tcyxx1zKKizs-AcqbfvwNTI1s9Y_jwkI-yfzOmRkD_FuTsaPTwnqgDklVMIfcwhfPOXvVomPNqNbEk8RbaUc4mua8cItwVMlvGVUXZdm0Rpg=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/0utmDMlIt5nfWdLwfp9RJNSTPnFiA0sbCmtTBRg9ttfLOssYGFJBYpa9Zcs0kD3YQVrxjybiVR5vYiVay7FtK9PbPdAfeEtf6J8aCiPd0QBOPcgyp2vY2lJqzrr9-qYGqmqWgdJelg=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/wtaRjX5RCBg4qPW3MB-flajGKp5mV-VsHW0TgjHh3uBS7mRX024grDZrfikCShhfHqTIu-C_FkGDu5bgQYg4zIK7UdVY6TMAwbMu_CYRzT0UaSpjYKsyxao1jNXbWz1t-RQvqcGm9w=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/NMoTWsCtrAgV9vOl9Se6dLb_2iEJftvo7u5ebP5SJKSZXeD0yerqjCMfZAeR57_esVyizMYQgmagKWgvS90bC0h6Uci279m569DPbJ_8w31CWjPRSsQZA47xNeCJ_YNXyCKoS308TQ=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/gUmizwjWTiVBrr2bGWGWVIVD-2u-aTEmHKOBoPYJAtQqRDsxtpyr9szr5DRSYTlnMnajFZRybDej0Wppko2QJyu_U4YBdrG5bIQI9oBN4-0B3kFd8Z5hjKiFjDX13HrS7lf4Jdyuhw=w1920-h1080"></object>
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
                                <a href="https://photos.app.goo.gl/HTnM6H1FTbcAXDcL7" target="_blank" rel="noopener noreferrer" class="btn btn-primary waves-effect waves-light w-100">Go</a>
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