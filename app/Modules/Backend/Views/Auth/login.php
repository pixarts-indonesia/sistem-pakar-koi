<?= $this->extend('App\Modules\Backend\Views\Layout\main') ?>

<?= $this->section('content') ?>
        <div class="d-flex justify-content-center mt-5 pt-5">
            <div class="col-md-6 contents bg-light p-5 rounded shadow">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <h3>Login Admin to <strong>Sistem Pakar</strong></h3>
                        </div>
                        <?php if($validation): ?>
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
                                <?= form_input(['class' => 'form-control', 'type' => 'text', 'name' => 'password', 'value' => $params->password ?? '']) ?>
                            </div>
                            <div class="d-flex justify-content-between pt-4">
                                <a href="<?= base_url('/'); ?>" class="btn text-white btn-block btn-success" rel="noopener noreferrer">
                                    Home
                                </a>
                                <button type="submit" class="btn text-white btn-block btn-primary">
                                    Login
                                </button>
                            </div>
                        <?= form_close(); ?>
                    </div>
                </div>
            
            </div>
            
        </div>
<?= $this->endSection() ?>