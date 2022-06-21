<!doctype html>
<html lang="en">

<head>
    <?= $title_meta ?>
    <link href="<?= base_url(); ?>/assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/libs/@simonwep/pickr/themes/classic.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/libs/@simonwep/pickr/themes/monolith.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/libs/@simonwep/pickr/themes/nano.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/libs/flatpickr/flatpickr.min.css">
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
                                <h4 class="card-title">Lengkapi Profile</h4>
                                <h4><?= $validation->listErrors(); ?></h4>

                                <p> *bijaklah dengan privacymu, namun tetap berikan informasi ke temanmu bagaimana cara menghubungimu</p>
                            </div>
                            <div class="card-body p-4">
                                <form action="<?= base_url(); ?>/profile/edit-data-action/<?= $users->id; ?>" method="post" class="needs-validation" novalidate>
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="username" value="<?= $users->username; ?>">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h4> Data KEKL19 (Wajib)</h4>
                                            <div>
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input class="form-control" type="email" value="<?= $users->email; ?>" id="email" name="email" required disabled>
                                                    <div class="invalid-feedback">
                                                        Wajib diisi!
                                                    </div>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Username</label>
                                                    <input class="form-control" type="text" value="<?= $users->username; ?>" id="username" name="username" required disabled>
                                                    <div class="invalid-feedback">
                                                        Wajib diisi!
                                                    </div>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="fullname" class="form-label">Nama Lengkap</label>
                                                    <input class="form-control" type="text" value="<?= $users->fullname; ?>" id="fullname" name="fullname" required>
                                                    <div class="invalid-feedback">
                                                        Wajib diisi!
                                                    </div>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="birthdate" class="form-label">Tanggal Lahir</label>
                                                    <input type="text" class="form-control" id="datepicker-basic" value="<?= $users->birthdate; ?>" name="birthdate" required>
                                                    <div class="invalid-feedback">
                                                        Wajib diisi!
                                                    </div>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Kelas X</label>
                                                    <select class="form-select" name="kelasx" required>
                                                        <option><?= $users->kelasx; ?></option>
                                                        <option>X A</option>
                                                        <option>X B</option>
                                                        <option>X C</option>
                                                        <option>X D</option>
                                                        <option>X E</option>
                                                        <option>X F</option>
                                                        <option>X G</option>
                                                        <option>X H</option>
                                                        <option>X I</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Wajib diisi!
                                                    </div>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Kelas XI</label>
                                                    <select class="form-select" name="kelasxi" required>
                                                        <option><?= $users->kelasxi; ?></option>
                                                        <option>XI A</option>
                                                        <option>XI B</option>
                                                        <option>XI C</option>
                                                        <option>XI D</option>
                                                        <option>XI E</option>
                                                        <option>XI F</option>
                                                        <option>XI G</option>
                                                        <option>XI H</option>
                                                        <option>XI I</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Wajib diisi!
                                                    </div>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Kelas XII</label>
                                                    <select class="form-select" name="kelasxii" required>
                                                        <option><?= $users->kelasxii; ?></option>
                                                        <option>XII A</option>
                                                        <option>XII B</option>
                                                        <option>XII C</option>
                                                        <option>XII D</option>
                                                        <option>XII E</option>
                                                        <option>XII F</option>
                                                        <option>XII G</option>
                                                        <option>XII H</option>
                                                        <option>XII I</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Wajib diisi!
                                                    </div>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tempatstudikerja" class="form-label">Tempat Studi / Kerja</label>
                                                    <input class="form-control" type="text" value="<?= $users->tempatstudikerja; ?>" id="tempatstudikerja" name="tempatstudikerja" required>
                                                    <div class="invalid-feedback">
                                                        Wajib diisi!
                                                    </div>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="jurusanbagian" class="form-label">Jurusan / Bagian</label>
                                                    <input class="form-control" type="text" value="<?= $users->jurusanbagian; ?>" id="jurusanbagian" name="jurusanbagian" required>
                                                    <div class="invalid-feedback">
                                                        Wajib diisi!
                                                    </div>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="location" class="form-label">Lokasi Sekarang (Kota) (contoh: Semarang, Bikini Bottom, dll)</label>
                                                    <input class="form-control" type="text" value="<?= $users->location; ?>" id="location" name="location" required>
                                                    <div class="invalid-feedback">
                                                        Wajib diisi!
                                                    </div>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mt-3 mt-lg-0">
                                                <h4> Data Kontak (Optional)</h4>
                                                <div class="mb-3">
                                                    <label for="mobilenumber" class="form-label">Nomor Telepon</label>
                                                    <input class="form-control" type="number" value="<?= $users->mobilenumber; ?>" id="mobilenumber" name="mobilenumber">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="line" class="form-label">Line (ID Line)</label>
                                                    <input class="form-control" type="text" value="<?= $users->line; ?>" id="line" name="line">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="instagram" class="form-label">Instagram (Username tanpa @)</label>
                                                    <input class="form-control" type="text" value="<?= $users->instagram; ?>" id="instagram" name="instagram">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="facebook" class="form-label">Facebook</label>
                                                    <input class="form-control" type="text" value="<?= $users->facebook; ?>" id="facebook" name="facebook">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="twitter" class="form-label">Twitter</label>
                                                    <input class="form-control" type="text" value="<?= $users->twitter; ?>" id="twitter" name="twitter">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="youtube" class="form-label">Youtube (Link)</label>
                                                    <input class="form-control" type="url" value="<?= $users->youtube; ?>" id="youtube" name="youtube">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="linkedin" class="form-label">linkedin (Link)</label>
                                                    <input class="form-control" type="url" value="<?= $users->linkedin; ?>" id="linkedin" name="linkedin">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="website" class="form-label">Website (Link)</label>
                                                    <input class="form-control" type="url" value="<?= $users->website; ?>" id="website" name="website">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="sec_email" class="form-label">Second Email</label>
                                                    <input class="form-control" type="text" value="<?= $users->sec_email; ?>" id="sec_email" name="sec_email">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="bio" class="form-label">Bio</label>
                                                    <textarea id="bio" name="bio" class="form-control" rows="2"><?= $users->bio; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="invalidCheck" required>
                                                    <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
                                                    <div class="invalid-feedback">
                                                        You must agree before submitting.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Update Profile Data</button>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Profile Picture</h4>
                                        <p class="card-title-desc">
                                            Max Size 2 Megabyte
                                            </br>
                                            File type .jpg, .png, .jpeg
                                            </br>
                                            Please Use 1:1 Ratio
                                        </p>
                                    </div>
                                    <div class="card-body">
                                        <form action="<?= base_url(); ?>/profile/edit-image-action/<?= $users->id; ?>" method="post" enctype="multipart/form-data">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="username" value="<?= $users->username; ?>">
                                            <input type="hidden" name="oldfiles" value="<?= $users->user_image; ?>">
                                            <div class="mb-3">
                                                <img src="<?= base_url(); ?>/assets/images/users/<?= $users->user_image; ?>" style="height: 250px;" class="mb-3 img-thumbnail img-preview">
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="file" name="file" onchange="previewimg()">
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Please provide a post image.
                                                    </div>
                                                </div>
                                                </img>
                                            </div>
                                            <div class="mt-4">
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                        </form>
                                    </div>
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
<script src="<?= base_url(); ?>/assets/libs/dropzone/min/dropzone.min.js"></script>
<script src="<?= base_url(); ?>/assets/libs/pristinejs/pristine.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/pages/form-validation.init.js"></script>
<script src="<?= base_url(); ?>/assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
<script src="<?= base_url(); ?>/assets/libs/@simonwep/pickr/pickr.min.js"></script>
<script src="<?= base_url(); ?>/assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>
<script src="<?= base_url(); ?>/assets/libs/flatpickr/flatpickr.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/pages/form-advanced.init.js"></script>
<script>
    function previewimg() {
        const post_image = document.querySelector('#file');
        const post_image_preview = document.querySelector('.img-preview');

        const filepost_image = new FileReader();
        filepost_image.readAsDataURL(post_image.files[0]);
        filepost_image.onload = function(e) {
            post_image_preview.src = e.target.result;
        }
    }
</script>
<script src="<?= base_url(); ?>/assets/js/app.js"></script>
</body>

</html>