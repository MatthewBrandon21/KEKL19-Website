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
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <div class="col-xl-10 d-none d-md-block">
                                <form action="" method="get" class="app-search">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Search anything" name="keyword" id="keyword">
                                        <button class="btn btn-primary" type="submit" name="submit"><i class="bx bx-search-alt align-middle"></i></button>
                                    </div>
                                </form>
                            </div>
                            <button type="button" class="btn header-item d-md-none" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="h4"><i data-feather="search" class="icon-lg"></i>Search</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                                <form action="" method="get" class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search anything" name="keyword" id="keyword">
                                            <button class="btn btn-primary" type="submit" name="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                            <div>
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url(); ?>/contact-list" data-bs-toggle="tooltip" data-bs-placement="top" title="List"><i class="bx bx-list-ul"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="<?= base_url(); ?>/contact-grid" data-bs-toggle="tooltip" data-bs-placement="top" title="Grid"><i class="bx bx-grid-alt"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($users as $u) :
                        if ($u['fullname'] != NULL && $u['fullname'] != '' && $u['banned'] != 1 && $u['active'] != 0) { ?>
                            <div class="col-xl-3 col-sm-6">
                                <form action="<?= base_url(); ?>/contact-profile/<?= $u['username'] ?>">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <div class="mx-auto mb-4">
                                                <img src="<?= base_url(); ?>/assets/images/users/<?= $u['user_image'] ?>" alt="" class="avatar-xl rounded-circle img-thumbnail">
                                            </div>
                                            <h5 class="font-size-16 mb-1 text-dark"><?= $u['fullname'] ?></h5>
                                            <p class="text-muted mb-2"><?= $u['username'] ?></p>
                                        </div>
                                        <div class="btn-group" role="group">
                                            <button type="submit" class="btn btn-outline-light text-truncate"><i class="uil uil-user me-1"></i> Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    <?php }
                    endforeach; ?>
                </div>
                <div class="row g-0 align-items-center mb-4">
                    <div class="col-sm-6">
                        <div>
                            <p class="mb-sm-0"></p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-sm-end">
                            <?= $pager->links('users', 'kekl19_pagination'); ?>
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