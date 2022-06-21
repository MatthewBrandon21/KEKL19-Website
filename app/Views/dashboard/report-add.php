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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">New Report</h4>
                                <h5><?= $validation->listErrors(); ?></h5>
                                <p class="card-title-desc">Please fill all information below </br> Once submitted, it can't be deleted unless deleted by admin</p>
                            </div>
                            <div class="card-body p-4">
                                <form action="<?= base_url(); ?>/report/add-action" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="userid" id="userid" value="<?= user_id(); ?>">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="title" class="form-label">Title</label>
                                                    <input class="form-control" type="text" id="title" name="title" required autofocus>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Please provide report title.
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="body" class="form-label">Message</label>
                                                    <textarea id="body" name="body" class="form-control" rows="3" required></textarea>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Please provide report message.
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Post Image (Optional)</label>
                                                    <img src="" class="mb-3 img-thumbnail img-preview">
                                                    <div class="input-group mb-3">
                                                        <input type="file" class="form-control" id="report_image" name="report_image" onchange="previewimg()">
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                    </img>
                                                    <p>Nb: max size 2MB with extension .jpg, .png, and .jpg.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mt-4">
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                        </div>
                                </form>
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
<script src="<?= base_url(); ?>/assets/js/pages/form-validation.init.js"></script>
<script src="<?= base_url(); ?>/assets/js/app.js"></script>
<script>
    function previewimg() {
        const report_image = document.querySelector('#report_image');
        const report_image_preview = document.querySelector('.img-preview');

        const filereport_image = new FileReader();
        filereport_image.readAsDataURL(report_image.files[0]);
        filereport_image.onload = function(e) {
            report_image_preview.src = e.target.result;
        }
    }
</script>
</body>

</html>