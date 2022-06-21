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
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <blockquote class="blockquote font-size-14 mb-0">
                                    <p>You can message to admin about error or bug, follow up on something, or anything. You can say hi to admin too :). Admin will reply to your message as soon as possible.</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="mb-4">
                                            <form action="<?= base_url(); ?>/report/add">
                                                <button type="submit" class="btn btn-light waves-effect waves-light"><i class="bx bx-plus me-1"></i> Add Report</button>
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
                                                <th style="width: 100px;">Created At</th>
                                                <th style="width: 80px;">Status</th>
                                                <th>Title</th>
                                                <th>Response</th>
                                                <th>Message</th>
                                                <th>Report Image</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($report as $r) : ?>
                                                <tr>
                                                    <td><?= date("d-m-Y", strtotime($r['created_at'])) ?></td>
                                                    <td>
                                                        <?php if ($r['status'] == 'Answered') : ?>
                                                            <div class="badge badge-soft-success font-size-12"><?= $r['status']; ?></div>
                                                        <?php else : ?>
                                                            <div class="badge badge-soft-warning font-size-12"><?= $r['status']; ?></div>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?= $r['title']; ?></td>
                                                    <td><?= $r['response']; ?></td>
                                                    <td><?= $r['body']; ?></td>
                                                    <td>
                                                        <?php if ($r['report_image'] != null && $r['report_image'] != '') { ?>
                                                            <img src="<?= base_url(); ?>/assets/images/report/<?= $r['report_image'] ?>" style="height: 175px;">
                                                        <?php } ?>
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