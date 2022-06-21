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
                                <h4 class="card-title">Response Report</h4>
                                <h4><?= $validation->listErrors(); ?></h4>
                                <p class="card-title-desc">Please fill all information below</p>
                            </div>
                            <div class="card-body p-4">
                                <form action="<?= base_url(); ?>/admin-report/edit-action/<?= $report['id']; ?>" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
                                    <?= csrf_field(); ?>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="title" class="form-label">Title</label>
                                                    <input class="form-control" type="text" id="title" name="title" value="<?= (old('title')) ? old('title') : $report['title']; ?>" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="body" class="form-label">Message</label>
                                                    <textarea id="body" name="body" class="form-control" rows="2" disabled><?= (old('body')) ? old('body') : $report['body']; ?></textarea>
                                                </div>
                                                <?php if ($report['report_image'] != null || $report['report_image'] != '') { ?>
                                                    <div class="mb-3">
                                                        <label class="form-label">Report Image</label>
                                                        <img src="<?= base_url(); ?>/assets/images/report/<?= $report['report_image']; ?>" class="mb-3 img-thumbnail img-preview">
                                                    </div>
                                                <?php } ?>
                                                <div class="mb-3">
                                                    <label for="response" class="form-label">Response</label>
                                                    <input class="form-control" type="text" id="response" name="response" value="<?= (old('response')) ? old('response') : $report['response']; ?>" required autofocus>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Please provide a report response.
                                                    </div>
                                                </div>
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