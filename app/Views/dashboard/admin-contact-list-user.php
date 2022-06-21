<!doctype html>
<html lang="en">

<head>
    <?= $title_meta ?>
    <link href="<?= base_url(); ?>/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="row">
                                        <?php if (session()->getFlashdata('pesan')) : ?>
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <i class="mdi mdi-check-all me-2"></i>
                                                <?= session()->getFlashdata('pesan'); ?>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="table-responsive mb-4">
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th scope="col">User</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Role</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Banned</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($users as $user) : ?>
                                                    <tr>
                                                        <td>
                                                            <img src="<?= base_url(); ?>/assets/images/users/<?= $user->user_image; ?>" alt="" class="avatar-sm rounded-circle me-2">
                                                            <a href="<?= base_url(); ?>/contact-profile/<?= $user->username; ?>" class="text-body">
                                                                <?php if ($user->fullname != null || $user->fullname != '') { ?>
                                                                    <?= $user->fullname; ?>
                                                                <?php } else { ?>
                                                                    <?= $user->username; ?>
                                                                <?php } ?>
                                                            </a>
                                                        </td>
                                                        <td><?= $user->email; ?></td>
                                                        <td><?= $user->name; ?></td>
                                                        <td>
                                                            <?php if ($user->active == 1) : ?>
                                                                <div class="badge badge-soft-success font-size-12">Activated</div>
                                                            <?php elseif ($user->active == 0) : ?>
                                                                <div class="badge badge-soft-warning font-size-12">Not Activated</div>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($user->banned == 0) : ?>
                                                                <div class="badge badge-soft-success font-size-12">Not Banned</div>
                                                            <?php elseif ($user->banned == 1) : ?>
                                                                <div class="badge badge-soft-danger font-size-12">Banned</div>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <div class="d-grid gap-2 mx-auto">
                                                                        <?php if ($user->banned == 1) : ?>
                                                                            <form action="<?= base_url(); ?>/admin-contact-list/unband-action/<?= $user->userid; ?>" method="post" class="col-md-12 text-center">
                                                                                <?= csrf_field(); ?>
                                                                                <button type="submit" class="btn btn-warning">Unban</button>
                                                                            </form>
                                                                        <?php else : ?>
                                                                            <form action="<?= base_url(); ?>/admin-contact-list/band-action/<?= $user->userid; ?>" method="post" class="col-md-12 text-center">
                                                                                <?= csrf_field(); ?>
                                                                                <button type="submit" class="btn btn-danger">Ban</button>
                                                                            </form>
                                                                        <?php endif; ?>
                                                                        <?php if ($user->active == 1) : ?>
                                                                            <form action="<?= base_url(); ?>/admin-contact-list/deactivate-action/<?= $user->userid; ?>" method="post" class="col-md-12 text-center">
                                                                                <?= csrf_field(); ?>
                                                                                <button type="submit" class="btn btn-danger">Unactivate</button>
                                                                            </form>
                                                                        <?php else : ?>
                                                                            <form action="<?= base_url(); ?>/admin-contact-list/activate-action/<?= $user->userid; ?>" method="post" class="col-md-12 text-center">
                                                                                <?= csrf_field(); ?>
                                                                                <button type="submit" class="btn btn-warning">Activate</button>
                                                                            </form>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
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
<script src="<?= base_url(); ?>/assets/libs/flatpickr/flatpickr.min.js"></script>
<script src="<?= base_url(); ?>/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/pages/invoices-list.init.js"></script>
<script src="<?= base_url(); ?>/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>/assets/libs/jszip/jszip.min.js"></script>
<script src="<?= base_url(); ?>/assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>/assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="<?= base_url(); ?>/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url(); ?>/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/pages/datatables.init.js"></script>
<script src="<?= base_url(); ?>/assets/js/app.js"></script>
</body>

</html>