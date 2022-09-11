<?= $this->extend('App\Modules\Frontend\Views\Layout\main') ?>

<?= $this->section('content') ?>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <img src="<?= base_url('assets/svg/undraw_file_sync_ot38.svg'); ?>" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Lupa kata sandi</h3>
                                <p class="mb-4">Masukan username kamu, dan terima link ubah kata sandi di email kamu.</p>
                            </div>
                            <?php if($validation): ?>
                                <div class="form-group pb-1">
                                    <div class="alert alert-danger" role="alert">
                                        <?= service('validation')->listErrors() ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?= form_open('', ['method' => 'POST']); ?>
                                <div class="form-group">
                                    <?= form_label('Username', 'username'); ?>
                                    <?= form_input(['class' => 'form-control', 'type' => 'text', 'name' => 'username']) ?>
                                </div>
                                <button type="submit" class="btn text-white btn-block btn-primary">
                                    <span class="icon-bagikan"></span> Kirim
                                </button>
                            <?= form_close(); ?>
                            <div class="d-flex justify-content-between">
                                <a href="<?= base_url('/'); ?>" rel="noopener noreferrer">
                                    <span class="d-block text-left my-4 text-primary">
                                        <span class="icon-home-auth"></span> Home
                                    </span>
                                </a>
                                <a href="<?= base_url('login'); ?>" rel="noopener noreferrer">
                                    <span class="d-block text-right my-4 text-primary">
                                        <span class="icon-login"></span> Login
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                
                </div>
                
            </div>
        </div>
    </div>
<?= $this->endSection() ?>