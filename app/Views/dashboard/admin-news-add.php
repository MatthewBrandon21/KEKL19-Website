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
                                <h4 class="card-title">News / Event Post Information</h4>
                                <h5><?= $validation->listErrors(); ?></h5>
                                <p class="card-title-desc">Please fill all information below</p>
                            </div>
                            <div class="card-body p-4">
                                <form action="<?= base_url(); ?>/admin-news/add-action" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
                                    <?= csrf_field(); ?>
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
                                                        Please provide post title.
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="link" class="form-label">More Info link</label>
                                                    <input class="form-control" type="url" id="link" name="link" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Please provide more info link.
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="body" class="form-label">Body</label>
                                                    <textarea id="body" name="body" class="form-control" rows="2" required></textarea>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Please provide post body.
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Publish Setting</label>
                                                    <select class="form-select" name="status" required>
                                                        <option>Publish</option>
                                                        <option>Hidden</option>
                                                    </select>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Please provide post publish setting.
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Post Image</label>
                                                    <img src="" class="mb-3 img-thumbnail img-preview">
                                                    <div class="input-group mb-3">
                                                        <input type="file" class="form-control" id="post_image" name="post_image" required onchange="previewimg()">
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Please provide a post image.
                                                        </div>
                                                    </div>
                                                    </img>
                                                    <p>Nb: max size 2MB with extension .jpg, .png, and .jpg.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mt-4">
                                                <button type="submit" class="btn btn-primary w-md">Add New News / Event</button>
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
        const post_image = document.querySelector('#post_image');
        const post_image_preview = document.querySelector('.img-preview');

        const filepost_image = new FileReader();
        filepost_image.readAsDataURL(post_image.files[0]);
        filepost_image.onload = function(e) {
            post_image_preview.src = e.target.result;
        }
    }
</script>
</body>

</html>