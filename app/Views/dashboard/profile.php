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
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <?php if (session()->getFlashdata('pesan')) : ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <i class="mdi mdi-check-all me-2"></i>
                                        <?= session()->getFlashdata('pesan'); ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php endif; ?>
                                <div class="row">
                                    <div class="col-sm order-2 order-sm-1">
                                        <div class="d-flex align-items-start mt-3 mt-sm-0">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xl me-3">
                                                    <img src="<?= base_url(); ?>/assets/images/users/<?= $users->user_image; ?>" alt="" class="img-fluid rounded-circle d-block">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div>
                                                    <h5 class="font-size-16 mb-1"><?= $users->username; ?></h5>
                                                    <?php if ($users->fullname != NULL && $users->fullname != "") : ?>
                                                        <p class="text-muted font-size-13"><?= $users->fullname; ?></p>
                                                    <?php endif; ?>
                                                    <div class="d-flex flex-wrap align-items-start gap-2 gap-lg-3 text-muted font-size-13">
                                                        <?php if ($users->location != NULL && $users->location != "") : ?>
                                                            <div><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i><?= $users->location; ?></div>
                                                        <?php endif; ?>
                                                        <?php if ($users->email != NULL && $users->email != "") : ?>
                                                            <div><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i><a href="mailto:<?= $users->email; ?>" class="text-muted"><?= $users->email; ?></a></div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto order-1 order-sm-2">
                                        <div class="d-flex align-items-start justify-content-end gap-2">
                                            <div>
                                                <form action="<?= base_url(); ?>/profile-form">
                                                    <button type="submit" class="btn btn-soft-light"><i class="me-1"></i> Edit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs-custom card-header-tabs border-top mt-4" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link px-3 active" data-bs-toggle="tab" href="#about" role="tab">About</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active" id="about" role="tabpanel">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">About</h5>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <?php if ($users->birthdate != NULL && $users->birthdate != "") : ?>
                                                <div class="pb-3">
                                                    <div class="row">
                                                        <div class="col-xl-3">
                                                            <div>
                                                                <h5 class="font-size-15">Tanggal Lahir :</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl">
                                                            <div class="text-muted">
                                                                <p><?= $users->birthdate; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($users->tempatstudikerja != NULL && $users->tempatstudikerja != "") : ?>
                                                <div class="pb-3">
                                                    <div class="row">
                                                        <div class="col-xl-3">
                                                            <div>
                                                                <h5 class="font-size-15">Tempat Studi / Kerja :</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl">
                                                            <div class="text-muted">
                                                                <p><?= $users->tempatstudikerja; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($users->jurusanbagian != NULL && $users->jurusanbagian != "") : ?>
                                                <div class="pb-3">
                                                    <div class="row">
                                                        <div class="col-xl-3">
                                                            <div>
                                                                <h5 class="font-size-15">Jurusan / Bagian :</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl">
                                                            <div class="text-muted">
                                                                <p><?= $users->jurusanbagian; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($users->bio != NULL && $users->bio != "") : ?>
                                                <div class="pb-3">
                                                    <div class="row">
                                                        <div class="col-xl-3">
                                                            <div>
                                                                <h5 class="font-size-15">Bio :</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl">
                                                            <div class="text-muted">
                                                                <p class="mb-0"><?= $users->bio; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Loyola Class</h5>
                                <div class="d-flex flex-wrap gap-2 font-size-16">
                                    <?php if ($users->kelasx != NULL && $users->kelasx != "") : ?>
                                        <a class="badge badge-soft-primary"><?= $users->kelasx; ?></a>
                                    <?php endif; ?>
                                    <?php if ($users->kelasxi != NULL && $users->kelasxi != "") : ?>
                                        <a class="badge badge-soft-primary"><?= $users->kelasxi; ?></a>
                                    <?php endif; ?>
                                    <?php if ($users->kelasxii != NULL && $users->kelasxii != "") : ?>
                                        <a class="badge badge-soft-primary"><?= $users->kelasxii; ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Contact Me!</h5>
                                <div>
                                    <ul class="list-unstyled mb-0">
                                        <?php if ($users->mobilenumber != NULL && $users->mobilenumber != "") : ?>
                                            <li>
                                                <a href="https://wa.me/<?= $users->mobilenumber; ?>" class="py-2 d-block text-muted"><i class="mdi mdi-whatsapp text-primary me-1"></i> <?= $users->mobilenumber; ?></a>
                                            </li>
                                        <?php endif; ?>
                                        <?php if ($users->line != NULL && $users->line != "") : ?>
                                            <li>
                                                <a href="http://line.me/ti/p/~<?= $users->line; ?>" class="py-2 d-block text-muted"><i class="mdi mdi-chat text-primary me-1"></i> <?= $users->line; ?></a>
                                            </li>
                                        <?php endif; ?>
                                        <?php if ($users->instagram != NULL && $users->instagram != "") : ?>
                                            <li>
                                                <a href="https://instagram.com/<?= $users->instagram; ?>" class="py-2 d-block text-muted"><i class="mdi mdi-instagram text-primary me-1"></i> <?= $users->instagram; ?></a>
                                            </li>
                                        <?php endif; ?>
                                        <?php if ($users->facebook != NULL && $users->facebook != "") : ?>
                                            <li>
                                                <a href="https://www.facebook.com/<?= $users->facebook; ?>" class="py-2 d-block text-muted"><i class="mdi mdi-facebook text-primary me-1"></i> <?= $users->facebook; ?></a>
                                            </li>
                                        <?php endif; ?>
                                        <?php if ($users->twitter != NULL && $users->twitter != "") : ?>
                                            <li>
                                                <a href="https://twitter.com/<?= $users->twitter; ?>" class="py-2 d-block text-muted"><i class="mdi mdi-twitter text-primary me-1"></i> <?= $users->twitter; ?></a>
                                            </li>
                                        <?php endif; ?>
                                        <?php if ($users->youtube != NULL && $users->youtube != "") : ?>
                                            <li>
                                                <a href="<?= $users->youtube; ?>" class="py-2 d-block text-muted"><i class="mdi mdi-youtube text-primary me-1"></i> Youtube</a>
                                            </li>
                                        <?php endif; ?>
                                        <?php if ($users->linkedin != NULL && $users->linkedin != "") : ?>
                                            <li>
                                                <a href="<?= $users->linkedin; ?>" class="py-2 d-block text-muted"><i class="mdi mdi-linkedin text-primary me-1"></i> Linkedin</a>
                                            </li>
                                        <?php endif; ?>
                                        <?php if ($users->website != NULL && $users->website != "") : ?>
                                            <li>
                                                <a href="<?= $users->website; ?>" class="py-2 d-block text-muted"><i class="mdi mdi-web text-primary me-1"></i> Website</a>
                                            </li>
                                        <?php endif; ?>
                                        <?php if ($users->sec_email != NULL && $users->sec_email != "") : ?>
                                            <li>
                                                <a href="mailto:<?= $users->sec_email; ?>" class="py-2 d-block text-muted"><i class="mdi mdi-email-multiple text-primary me-1"></i> <?= $users->sec_email; ?></a>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
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