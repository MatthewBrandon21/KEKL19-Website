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
                                <h4 class="text-center"> Momento Tahun 2017 </h4>
                                <script src="<?= base_url(); ?>/assets/js/embed-ui.min.js" async></script>
                                <div class="pa-gallery-player-widget" style="width:100%; height:480px; display:none;" data-link="https://photos.app.goo.gl/w2CLeZh8G8twBcad7" data-title="2017 Momento" data-description="6 new items added to shared album">
                                    <object data="https://lh3.googleusercontent.com/5h-MJweaSTinHkRQ-CI9clJSda9cugUS_Yfhea5dT-7uuO_3FHnW_W1Xf322P9txH9EqfJeP2D7cj8EZxlekANMTT-9MB88WKsxl29RJSngYqc6HL2ZiQifDbngmS9B6RrzQv3aCtQ=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/5NKz2g2PM7Syc-KYayjQ90SUxTgZWRK9J_3HAtsOl4w-WZMxejlmAOxpkyFo2AfrmiuJocEeKIXTSGqbMkMUugSgLhGZDXH6f0IjJOid7UiNY7aa9McpCFd81Lc6t6-wMMMj-EWEJg=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/HM3DnYYF_RGXf34iAhVGwy5KWYtDT2ePFZ_qOjeAg2HSkqJfhDwrAySTZT_81DXJWTVw2OREYW_m8H5IbRr_GFZHJomCT64l65U4-YxYdGkgnBKf8cuXNq6Baxyb2VMBCkwv4PY6aA=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/hwS5h0IadIuKJ0qI01E04hIk9xliL_YZKMfH6SAfeJ8raoU6mKqcIg714Y9B9M-ORR7SdEmRdOy3xc7eRL2yxb6lF_JBu9pvNLJXU24VCnNP3d59qtq06VzmTuHpE5wHSNC1EZeDzg=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/BktswnAuAa8VGnpkW-cDcI4EQ500Nl1fnsQc84eTEg0CXieNefcvHy3Ipq9C8A6REAPCGvd9H8vIPETDryIkRYabybhjkJgffhwx8j71DOiHlIxTee0mmnU02tVDwrNOSgJB17OhmQ=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/9RfdKQwI1VKQRdf7ghC95gEcfTGwJMf2xqlqcI4VEBgjEGai19ppYFtIefGJiLsXnqR2N0NvD9DGn320xeoM_I8GlOcTNKEhZuiqN2IrD6F8y81IeiSO-0mjITxQduw2T9rlEHa_Ow=w1920-h1080"></object>
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
                                <a href="https://photos.app.goo.gl/w2CLeZh8G8twBcad7" target="_blank" rel="noopener noreferrer" class="btn btn-primary waves-effect waves-light w-100">Go</a>
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