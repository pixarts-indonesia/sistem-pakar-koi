<?= $this->extend('App\Modules\Frontend\Views\Layout\main') ?>

<?= $this->section('content') ?>
<!-- slider Area Start-->
<div class="slider-area ">
    <div class="slider-active">
        <!-- Single Slider -->
        <div class="single-slider slider-height d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7 col-md-8">
                        <div class="hero__caption">
                            <span data-animation="fadeInLeft" data-delay=".1s">Sistem Pakar</span>
                            <h1 data-animation="fadeInLeft" data-delay=".5s">Diagnosa Penyakit Ikan Koi</h1>
                            <p data-animation="fadeInLeft" data-delay=".9s">Identifikasi Penyakit Ikan Koi Dengan Menggunakan Metode Case Based Reasoning</p>
                            <!-- Hero-btn -->
                            <div class="hero__btn" data-animation="fadeInLeft" data-delay="1.1s">
                                <a href="<?= base_url('diagnosa'); ?>" class="btn hero-btn">Diagnosa</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->
<!--? Categories Area Start -->
<div class="categories-area section-padding30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Section Tittle -->
                <div class="section-tittle mb-70">
                    <span>Fitur</span>
                    <h2>Fitur Tersedia</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-cat text-center mb-50">
                    <div class="cat-icon">
                        <span class="flaticon-development"></span>
                    </div>
                    <div class="cat-cap">
                        <h5><a href="<?= base_url('diagnosa') ?>">Diagnosa</a></h5>
                        <p>Pengguna dapat melakukan diagnosa untuk mengetahui penyakit yang mungkin diderita ikan koi berdasarkan gejala yang dialami.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-cat text-center mb-50">
                    <div class="cat-icon">
                        <span class="flaticon-result"></span>
                    </div>
                    <div class="cat-cap">
                        <h5><a href="<?= base_url('akun') ?>">Riwayat Diagnosa</a></h5>
                        <p>Menyimpan dan menampilkan riwayat diagnosa sebelumnya untuk memudahkan pengguna dalam melacak kesehatan ikan koi.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-cat text-center mb-50">
                    <div class="cat-icon">
                        <span class="flaticon-team"></span>
                    </div>
                    <div class="cat-cap">
                        <h5><a href="<?= base_url('responden') ?>">Responden</a></h5>
                        <p>Fitur untuk mengelola data responden yang berperan dalam proses diagnosa, memberikan data yang diperlukan untuk sistem pakar.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Area End -->
<!--? About Area Start-->
<div class="support-company-area pt-100 pb-100 section-bg fix" data-background="<?= base_url('assets/img/gallery/section_bg02.jpg') ?>">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="support-location-img">
                    <img src="<?= base_url('assets/img/gallery/about.png') ?>" alt="">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="right-caption">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 mb-50">
                        <h2 class="text-white">Sistem Pakar</h2>
                    </div>
                    <div class="support-caption">
                        <p class="pera-top">Mengidentifikasi masalah penyakit koi yang kamu miliki sangatlah penting, kamu akan tau penanganan yang harus kamu lakukan.</p>
                        <a href="<?= base_url('/diagnosa') ?>" class="btn post-btn">Diagnosa Sekarang</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- About Area End-->
<?= $this->endSection() ?>