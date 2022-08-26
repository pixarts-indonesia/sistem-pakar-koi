<?= $this->extend('App\Modules\Frontend\Views\Layout\main') ?>

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
                                <a href="<?= base_url('diagnosa'); ?>">Diagnosa Sekarang </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text_img">
                                <img src="<?= base_url('assets/images/pct.png'); ?>" alt="#"/>
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
<!-- team -->
<div class="team">
    <div class="container">
        <div class="row d_flex">
            <div class="col-md-5">
                <div class="team_img">
                    <figure><img src="<?= base_url('assets/images/sco-1.png'); ?>" alt="#"/></figure>
                </div>
            </div>
            <div class="col-md-6 offset-md-1">
                <div class="titlepage">
                    <h2>Sistem Pakar</h2>
                    <p>Mengidentifikasi masalah penyakit koi yang kamu miliki sangatlah penting, kamu akan tau penanganan yang harus kamu lakukan.</p>
                    <a class="read_more" href="<?= base_url('diagnosa'); ?>"> Diagnosa Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- team -->
<!-- services -->
<div  class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div id="serv_hover"  class="services_box">
                    <i><img src="<?= base_url('assets/images/service1.png'); ?>" alt="#"/></i>
                    <h3>Diagnosa</h3>
                    <a class="right_irro" href="<?= base_url('diagnosa') ?>"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <div id="serv_hover" class="services_box">
                    <i><img src="<?= base_url('assets/images/service2.png'); ?>" alt="#"/></i>
                    <h3>Riwayat Diagnosa</h3>
                    <a class="right_irro" href="<?= base_url('akun') ?>"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <div id="serv_hover" class="services_box">
                    <i><img src="<?= base_url('assets/images/service3.png'); ?>" alt="#"/></i>
                    <h3>Responden</h3>
                    <a class="right_irro" href="<?= base_url('responden') ?>"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end services -->
<?= $this->endSection() ?>