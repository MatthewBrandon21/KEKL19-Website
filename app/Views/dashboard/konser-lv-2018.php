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
                    <div class="col-xl-10">
                        <form class="d-lg-block mt-4">
                            <div class="position-relative">
                                <h4 class="text-center"> Konser LV Tahun 2018 </h4>
                                <script src="<?= base_url(); ?>/assets/js/embed-ui.min.js" async></script>
                                <div class="pa-gallery-player-widget" style="width:100%; height:480px; display:none;" data-link="https://photos.app.goo.gl/STj44mUHzJ6qaMG17" data-title="2018 Konser LV" data-description="5 new items added to shared album">
                                    <object data="https://lh3.googleusercontent.com/GKha5XQmUp5noRYCePLnlAnT8Ft3wJCVqKYs-QK_si9hhGnU7y-aqyGw-u3eyH4qlPRr-YeB12sxRgalzUDuoqZKKLaUqiPpCFBbqWNukTwLpt3_4q_r33pMVjicOyDteNpy9587qQ=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/ICi7l7LRnaaBZqJqTA5GBV5TV5DSI9HcG00T8Vg_skgn6Rfv7eKS84KCGEm7WGdEkUciubNOyCZmzMbTJyHQdOnCD_cFQ1Qcmg-mlOMxgPXijJcBrnQfoB66Gt8fjP91GIC18SAQxQ=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/yLiNgy1HiHQQi7sDh3E4rax1uVj-PtQ16TJ0ObikR8RfMcMcVUMhGqUSgivcvNtuA-hdf3MIxDV-ddi5SbbkYLlcs17x5DasR2nn-W8KGGbWvHEv9J099DvK82_aa8Ec4dqbeJDoTw=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/30UzbEO3ie185ocN9PmwXN8-JqhJxtlSz5c0eU7S25RuhQ2syfdQPPC4xrhMWIx8-Imsh5ZbRNjWbjPVj6FuWJCo6BVwHVFfqD6NJpH1r_mq_KBZMVAhGOtDvAd488VtJtj4QOmhVQ=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/U1v_sc22ybga_VU7yh4CHYsLXRUidHeN33T3_ba2yPXOF_OMg7gIb0p--lqwc6aJoOqVXkMkiHLIxCeY3pfoKfijZZEV3BtxHReXb_nDof5viRoRCayKWTK2flVST2AzE3gFj89DQg=w1920-h1080"></object>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row justify-content-center pt-4">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Google Photos Album</h3>
                                <p class="card-text">Gunakan link ini jika foto di atas tidak muncul.</p>
                                <a href="https://photos.app.goo.gl/STj44mUHzJ6qaMG17" target="_blank" rel="noopener noreferrer" class="btn btn-primary waves-effect waves-light w-100">Go</a>
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
<script src="<?= base_url(); ?>/assets/js/app.js"></script>
</body>

</html>