<?= $this->extend('App\Modules\Frontend\Views\Layout\main') ?>

<?= $this->section('content') ?>
<div class="content mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Card wrapper -->
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="mb-4 text-center">
                        <h3>Login to <strong>Sistem Pakar</strong></h3>
                        <p class="mb-4">Masuk untuk menyimpan riwayat diagnosa ikan koi kamu.</p>
                    </div>

                    <?php if ($validation): ?>
                        <div class="form-group pb-1">
                            <div class="alert alert-danger" role="alert">
                                <?= service('validation')->listErrors() ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?= form_open('', ['method' => 'POST']); ?>
                    <div class="form-group <?= (isset($params->username)) ? 'field--not-empty' : '' ?>">
                        <?= form_label('Username', 'username'); ?>
                        <?= form_input(['class' => 'form-control', 'type' => 'text', 'name' => 'username', 'value' => $params->username ?? '']) ?>
                    </div>
                    <div class="form-group <?= (isset($params->password)) ? 'field--not-empty' : '' ?>">
                        <?= form_label('Password', 'password'); ?>
                        <?= form_input(['class' => 'form-control', 'type' => 'password', 'name' => 'password', 'value' => $params->password ?? '']) ?>
                    </div>

                    <div class="mb-5" style="display: flex; justify-content: space-between;">
                        <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                            <input type="checkbox" checked="checked" />
                            <div class="control__indicator"></div>
                        </label>
                        <span class="ml-auto"><a href="<?= base_url('forgot-password'); ?>" class="forgot-pass">Lupa kata sandi</a></span>
                    </div>
                    <button type="submit" class="btn text-white btn-block btn-primary" style="margin-bottom: 1.5rem;">
                        <span class="icon-login"></span> Login
                    </button>
                    <?= form_close(); ?>
                    <div class="d-flex justify-content-between">
                        <a href="<?= base_url('/'); ?>" rel="noopener noreferrer">
                            <span class="d-block text-left my-4 text-primary">
                                <span class="icon-home-auth"></span> Home
                            </span>
                        </a>
                        <a href="<?= base_url('daftar'); ?>" rel="noopener noreferrer">
                            <span class="d-block text-right my-4 text-primary">
                                <span class="icon-daftar"></span> Daftar
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End card wrapper -->
        </div>
    </div>
</div>
<?= $this->endSection() ?>