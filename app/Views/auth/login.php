<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image:src" content="<?= base_url(); ?>/assets/images/index-meta.png">
    <meta property="og:image" content="<?= base_url(); ?>/assets/images/index-meta.png">
    <meta name="twitter:title" content="Login - KEKL19">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/site-identity-512x512-new-128x128.png" type="image/x-icon">
    <meta name="amp-script-src" content="">
    <title>Login - KEKL19</title>
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
                                    <h5 class="mb-0"><?= lang('Auth.loginTitle') ?></h5>
                                    <p class="text-muted mt-2">Sign in to continue to KEKL19 Dashboard.</p>
                                    <?= view('Myth\Auth\Views\_message_block') ?>
                                </div>
                                <form class="custom-form mt-4 pt-2" action="<?= route_to('login') ?>" method="post">
                                    <?= csrf_field() ?>
                                    <?php if ($config->validFields === ['email']) : ?>
                                        <div class="mb-3">
                                            <label class="form-label"><?= lang('Auth.email') ?></label>
                                            <input type="email" name="login" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" id="email" placeholder="<?= lang('Auth.email') ?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.login') ?>
                                            </div>
                                        </div>
                                    <?php else : ?>
                                        <div class="mb-3">
                                            <label class="form-label"><?= lang('Auth.emailOrUsername') ?></label>
                                            <input type="text" name="login" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" id="email" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.login') ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <div class="mb-3">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1">
                                                <label class="form-label"><?= lang('Auth.password') ?></label>
                                            </div>
                                            <?php if ($config->activeResetter) : ?>
                                                <div class="flex-shrink-0">
                                                    <div class="">
                                                        <a href="<?= route_to('forgot') ?>" class="text-muted"><?= lang('Auth.forgotYourPassword') ?></a>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="input-group auth-pass-inputgroup">
                                            <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" aria-label="Password" aria-describedby="password-addon">
                                            <button class="btn btn-light ms-0" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                            <div class="invalid-feedback">
                                                <?= session('errors.password') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if ($config->allowRemembering) : ?>
                                        <div class="row mb-4">
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input <?php if (old('remember')) : ?> checked <?php endif ?>" type="checkbox" id="remember" name="remember">
                                                    <label class="form-check-label" for="remember">
                                                        <?= lang('Auth.rememberMe') ?>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <div class="mb-3">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit"><?= lang('Auth.loginAction') ?></button>
                                    </div>
                                </form>
                                <?php if ($config->allowRegistration) : ?>
                                    <div class="mt-5 text-center">
                                        <p class="text-muted mb-0"><a href="<?= route_to('register') ?>" class="text-primary fw-semibold"> <?= lang('Auth.needAnAccount') ?> </a> </p>
                                    </div>
                                <?php endif; ?>
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
<script src="<?= base_url(); ?>/assets/js/pages/pass-addon.init.js"></script>
</body>

</html>