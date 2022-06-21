<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image:src" content="<?= base_url(); ?>/assets/images/index-meta.png">
    <meta property="og:image" content="<?= base_url(); ?>/assets/images/index-meta.png">
    <meta name="twitter:title" content="Forgot Password - KEKL19">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/site-identity-512x512-new-128x128.png" type="image/x-icon">
    <meta name="amp-script-src" content="">
    <title>Forgot Password - KEKL19</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <?= $this->include('partials/head-css') ?>
</head>

<?= $this->include('partials/body') ?>
<div class="auth-page">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-xxl-3 col-lg-4 col-md-5">
                <div class="auth-full-page-content d-flex p-sm-5 p-4">
                    <div class="w-100">
                        <div class="d-flex flex-column h-100">
                            <div class="mb-4 mb-md-5 text-center">
                                <a href="<?= base_url(); ?>/" class="d-block auth-logo">
                                    <img src="<?= base_url(); ?>/assets/images/logo-kekl19-2000x1623.png" alt="" height="65"> <span class="logo-txt"></span>
                                </a>
                            </div>
                            <div class="auth-content mt-4 mb-auto">
                                <div class="text-center">
                                    <h5 class="mb-0"><?= lang('Auth.forgotPassword') ?></h5>
                                    <p class="text-muted mt-2"></p>
                                    <?= view('Myth\Auth\Views\_message_block') ?>
                                </div>
                                <div class="alert alert-success text-center mb-4 mt-4 pt-2" role="alert">
                                    Enter your Email and instructions will be sent to you!
                                </div>
                                <form class="custom-form mt-4" action="<?= route_to('forgot') ?>" method="post">
                                    <?= csrf_field() ?>
                                    <div class="mb-3">
                                        <label class="form-label"><?= lang('Auth.emailAddress') ?></label>
                                        <input type="text" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" id="email" name="email" placeholder="<?= lang('Auth.email') ?>">
                                        <div class="invalid-feedback">
                                            <?= session('errors.email') ?>
                                        </div>
                                    </div>
                                    <div class="mb-3 mt-4">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit"><?= lang('Auth.sendInstructions') ?></button>
                                    </div>
                                </form>
                                <div class="mt-5 text-center">
                                    <p class="text-muted mb-0">Remember It ? <a href="<?= base_url(); ?>/login" class="text-primary fw-semibold"> Sign In </a> </p>
                                </div>
                            </div>
                            <div class="mt-4 mt-md-5 text-center">
                                <p class="mb-0">© <script>
                                        document.write(new Date().getFullYear())
                                    </script> KEKL19</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-9 col-lg-8 col-md-7 auth-bg">
            </div>
        </div>
    </div>
</div>
</div>
<?= $this->include('partials/vendor-scripts') ?>
</body>

</html>