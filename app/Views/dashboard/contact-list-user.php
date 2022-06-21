<!doctype html>
<html lang="en">

<head>
    <?= $title_meta ?>
    <link href="<?= base_url(); ?>/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
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
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title">Contact List <span class="text-muted fw-normal ms-2">(<?= $usercount ?>)</span></h5>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                            <div>
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="<?= base_url(); ?>/contact-list" data-bs-toggle="tooltip" data-bs-placement="top" title="List"><i class="bx bx-list-ul"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url(); ?>/contact-grid" data-bs-toggle="tooltip" data-bs-placement="top" title="Grid"><i class="bx bx-grid-alt"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive mb-4">
                    <table class="table align-middle datatable dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Kelas X</th>
                                <th scope="col">Kelas XI</th>
                                <th scope="col">Kelas XII</th>
                                <th scope="col">Lokasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $u) :
                                if ($u['fullname'] != NULL && $u['fullname'] != '' && $u['banned'] != 1 && $u['active'] != 0) { ?> <tr>
                                        <td>
                                            <img src="<?= base_url(); ?>/assets/images/users/<?= $u['user_image'] ?>" alt="" class="avatar-sm rounded-circle me-2">
                                            <a href="<?= base_url(); ?>/contact-profile/<?= $u['username'] ?>" class="text-body">
                                                <?php if ($u['fullname'] != null || $u['fullname'] != '') { ?>
                                                    <?= $u['fullname'] ?>
                                                <?php } else { ?>
                                                    <?= $u['username'] ?>
                                                <?php } ?>
                                            </a>
                                        </td>
                                        <td><?= $u['kelasx'] ?></td>
                                        <td><?= $u['kelasxi'] ?></td>
                                        <td><?= $u['kelasxi'] ?></td>
                                        <td><?= $u['location'] ?></td>
                                    </tr>
                            <?php }
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?= $this->include('partials/footer') ?>
    </div>
</div>
<?= $this->include('partials/right-sidebar') ?>
<?= $this->include('partials/vendor-scripts') ?>
<script src="<?= base_url(); ?>/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/pages/datatable-pages.init.js"></script>
<script src="<?= base_url(); ?>/assets/js/app.js"></script>
</body>

</html>