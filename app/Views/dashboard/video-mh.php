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
                    <div class="col-xl-7">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Malam Wisuda KKL67 2019</h4>
                            </div>
                            <div class="card-body">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/E_8YG0wfEVQ" title="YouTube video" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Infinite 2018</h4>
                            </div>
                            <div class="card-body">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/E4pGXEcoXX4" title="YouTube video" allowfullscreen></iframe>
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
<script src="assets/js/app.js"></script>
</body>

</html>