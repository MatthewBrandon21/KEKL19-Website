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
                                        <input type="text" class="form-control" placeholder="Search Event / News" name="keyword" id="keyword">
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
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row" data-masonry='{"percentPosition": true }'>
                            <?php foreach ($news as $n) : ?>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="card">
                                        <img src="<?= base_url(); ?>/assets/images/<?= $n['post_image'] ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $n['title']; ?></h5>
                                            <p class="card-text"><?= $n['body']; ?></p>
                                            <a href="<?= $n['moreinfo_link']; ?>" class="btn btn-primary waves-effect waves-light">Learn More</a>
                                            <p class="card-text" style="padding-top: 20px;"><small class="text-muted"><?= date("d-m-Y", strtotime($n['updated_at'])) ?></small></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="row g-0 align-items-center mb-4">
                    <div class="col-sm-6">
                        <div>
                            <p class="mb-sm-0"></p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-sm-end">
                            <?= $pager->links('news', 'kekl19_pagination'); ?>
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
<script src="<?= base_url(); ?>/assets/libs/masonry-layout/masonry.pkgd.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/app.js"></script>
</body>

</html>