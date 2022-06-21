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
                                    <div class="col-sm">
                                        <div class="mb-4">
                                            <form action="<?= base_url(); ?>/admin-news/add">
                                                <button type="submit" class="btn btn-light waves-effect waves-light"><i class="bx bx-plus me-1"></i> Add News</button>
                                            </form>
                                        </div>
                                    </div>
                                    <?php if (session()->getFlashdata('pesan')) : ?>
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <i class="mdi mdi-check-all me-2"></i>
                                            <?= session()->getFlashdata('pesan'); ?>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                        <thead>
                                            <tr class="bg-transparent">
                                                <th style="width: 120px;">Title</th>
                                                <th>Status</th>
                                                <th style="width: 90px;">Action</th>
                                                <th>Body</th>
                                                <th>More Info Link</th>
                                                <th>Post Image</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($news as $n) : ?>
                                                <tr>
                                                    <td><?= $n['title']; ?></td>
                                                    <td>
                                                        <?php if ($n['status'] == 'Published') : ?>
                                                            <div class="badge badge-soft-success font-size-12"><?= $n['status']; ?></div>
                                                        <?php else : ?>
                                                            <div class="badge badge-soft-warning font-size-12"><?= $n['status']; ?></div>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <div class="d-grid gap-2 mx-auto">
                                                                    <?php if ($n['status'] == 'Published') : ?>
                                                                        <form action="<?= base_url(); ?>/admin-news/unpublish-action/<?= $n['id']; ?>" method="post" class="col-md-12 text-center">
                                                                            <?= csrf_field(); ?>
                                                                            <button type="submit" class="btn btn-primary ">Unpublish</button>
                                                                        </form>
                                                                    <?php else : ?>
                                                                        <form action="<?= base_url(); ?>/admin-news/publish-action/<?= $n['id']; ?>" method="post" class="col-md-12 text-center">
                                                                            <?= csrf_field(); ?>
                                                                            <button type="submit" class="btn btn-danger ">Publish</button>
                                                                        </form>
                                                                    <?php endif; ?>
                                                                    <form action="<?= base_url(); ?>/admin-news/edit/<?= $n['slug']; ?>" method="post" class="col-md-12 text-center">
                                                                        <?= csrf_field(); ?>
                                                                        <button type="submit" class="btn btn-warning ">Edit</button>
                                                                    </form>
                                                                    <form action="<?= base_url(); ?>/admin-news/<?= $n['id']; ?>" method="post" class="col-md-12 text-center">
                                                                        <?= csrf_field(); ?>
                                                                        <input type="hidden" name="_method" value="DELETE">
                                                                        <button type="submit" class="btn btn-danger ">Delete</button>
                                                                    </form>
                                                                </div>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td><?= $n['body']; ?></td>
                                                    <td>
                                                        <?= $n['moreinfo_link']; ?>
                                                    </td>
                                                    <td>
                                                        <img src="<?= base_url(); ?>/assets/images/<?= $n['post_image'] ?>" style="height: 200px;">
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