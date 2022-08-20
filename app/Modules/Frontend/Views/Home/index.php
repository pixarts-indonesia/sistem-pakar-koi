<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<!-- banner -->
<section class="banner_main">
    <div id="banner1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="carousel-caption">
                    <div class="row d_flex">
                        <div class="col-md-6">
                            <div class="text-bg">
                                <h1>Sistem Pakar</h1>
                                <p>Mendiagnosa penyakit ikan koi</p>
                                <a href="<?= base_url('diganosa'); ?>">Diagnosa Sekarang </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text_img">
                                <img src="<?= base_url('assets/images/label_2.jpg'); ?>" alt="#"/>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->
<?= $this->endSection() ?>