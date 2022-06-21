<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image:src" content="<?= base_url(); ?>/assets/images/index-meta.png">
    <meta property="og:image" content="<?= base_url(); ?>/assets/images/index-meta.png">
    <meta name="twitter:title" content="Register - KEKL19">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/site-identity-512x512-new-128x128.png" type="image/x-icon">
    <meta name="amp-script-src" content="">
    <title>Register - KEKL19</title>
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
                                    <h5 class="mb-0"><?= lang('Auth.register') ?></h5>
                                    <p class="text-muted mt-2">Once registered, email and username cannot be changed and will be visible to all members</p>
                                    <?= view('Myth\Auth\Views\_message_block') ?>
                                </div>
                                <form class="needs-validation custom-form mt-4 pt-2" novalidate action="<?= route_to('register') ?>" method="post">
                                    <?= csrf_field() ?>
                                    <div class="mb-3">
                                        <label for="email" class="form-label"><?= lang('Auth.email') ?></label>
                                        <input type="email" name="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" id="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" required>
                                        <div class="invalid-feedback">
                                            Please Enter Email
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label"><?= lang('Auth.username') ?></label>
                                        <input type="text" name="username" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" id="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" required>
                                        <div class="invalid-feedback">
                                            Please Enter Username
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="userpassword" class="form-label"><?= lang('Auth.password') ?></label>
                                        <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" id="password" placeholder="<?= lang('Auth.password') ?>" autocomplete="off" required>
                                        <div class="invalid-feedback">
                                            Please Enter Password
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="userpassword" class="form-label"><?= lang('Auth.repeatPassword') ?></label>
                                        <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" id="pass_confirm" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off" required>
                                        <div class="invalid-feedback">
                                            Please Enter Password
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit"><?= lang('Auth.register') ?></button>
                                    </div>
                                </form>
                                <div class="mt-5 text-center">
                                    <p class="text-muted mb-0"><?= lang('Auth.alreadyRegistered') ?> <a href="<?= route_to('login') ?>" class="text-primary fw-semibold"> <?= lang('Auth.signIn') ?> </a> </p>
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
<script src="<?= base_url(); ?>/assets/js/pages/validation.init.js"></script>
</body>

</html>