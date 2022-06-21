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
                                <h4 class="text-center"> Upacara Tahun 2018 </h4>
                                <script src="<?= base_url(); ?>/assets/js/embed-ui.min.js" async></script>
                                <div class="pa-gallery-player-widget" style="width:100%; height:480px; display:none;" data-link="https://photos.app.goo.gl/NM36BJN4Ei2QGPpH8" data-title="2018 Upacara" data-description="7 new items added to shared album">
                                    <object data="https://lh3.googleusercontent.com/HTVF_7lJCH5f0-L9VL0a3CyGnQT2oOmdzQScKZ3ic7uX94tWhzKb6v7CZMh6Hbcit1qo3qelJFB4ME1ji9a9OPlxVI9xm-6g4H-dVDG8Q_D0vElMAX9AZ4q0YGsVdG4vvk0Wf0wqsA=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/mAmPA7yR15QDjGuuRQUXblLeaezJFz90zIBkZJJckeYLRufeXRslcCgaSd5s2flNUuWBHWAHx2hG0dUD45VvGxhTV_EoqN5VDr9swKuCQYhVNDo7XCHkYzZUkjVdIQ5eyrBLbJdYBQ=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/8mMd0pyztCdLjUoi0U7MwVVf9cFXj0yiHHo-XNCJnoAKVVEUgMnqPI6ezTWMjtpoKIIOY_LkYsOjTo0Dz_egNG3ewSIVZWIQHjuufVGagxYquZyqfvy17JRGqDIwpYfDFlFmV0xTrQ=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/M9e-LJ-c4XiBWGkiACQGvxMZk1QQacU24LWT7qoupLC0pMFS_HvP5CrumbBfEV2ngZ1lNa4Mk0E4uqj-9jdSfDWEhncffga7bQHZ9fAaSQ3jK9j-70yIPB-QmRIL5IAol76VrVx6Qw=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/VCTVbOKSsHX8WyUqb75co5BoD3KeXaC1c9UW5fmSg6RPjUrYV7TEn5yQ09QMk7ECT7BS8ZiA7Qa7nwyTiRhboxx2p94BCMjJQpcl5B0ltfnShahAfVG6b4_vV6tRKzBKarvIDf-Zdg=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/dyl6H_mcFTZv9x3RFyxAEUGv4Bx5hvDqVIvOkrT-G8Tlot8R0L7qpVU3JUZOS62CyKZhB96nnvrlAcvAi5RCgVGZA4ntrMnZZ8lxVmfe5A858EeW5kDM278waTKD-_rQxeB6Av2X3A=w1920-h1080"></object>
                                    <object data="https://lh3.googleusercontent.com/nmxhozvY7r6i_W98iB9vgxVM2AU0LZHeYW0VlGufg32KvUSHVja-7vKz37N4wj1BpmWDHwayf-wLeho_CYqCX5SYJt-SMpfKctmAJ92pGyGOuAKeYvRcM1CqJgg-YycWOwDiLMUzyg=w1920-h1080"></object>
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
                                <a href="https://photos.app.goo.gl/NM36BJN4Ei2QGPpH8" target="_blank" rel="noopener noreferrer" class="btn btn-primary waves-effect waves-light w-100">Go</a>
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