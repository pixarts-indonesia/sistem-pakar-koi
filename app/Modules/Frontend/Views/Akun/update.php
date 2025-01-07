<?= $this->extend('App\Modules\Frontend\Views\Layout\main') ?>

<?= $this->section('content') ?>
    <div class="yellow_darkbg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2><?= $title ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact">
        <div class="container shadow bg-white rounded">
            <div class="col-md-12" style="padding: 8%; ">
                <?php if($validation): ?>
                    <div class="form-group pb-1">
                        <div class="alert alert-danger" role="alert">
                            <?= service('validation')->listErrors() ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?= form_open('', ['method' => 'POST']); ?>
                    <div class="form-group">
                        <?= form_label('Nama', 'nama'); ?>
                        <?= form_input(['class' => 'form-control', 'type' => 'text', 'name' => 'nama', 'value' => $params->nama ?? '']) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label('Username', 'username'); ?>
                        <?= form_input(['class' => 'form-control', 'type' => 'text', 'name' => 'username', 'value' => $params->username ?? '']) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label('Email', 'email'); ?>
                        <?= form_input(['class' => 'form-control', 'type' => 'text', 'name' => 'email', 'value' => $params->email ?? '']) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label('Nomor HP', 'telp'); ?>
                        <?= form_input(['class' => 'form-control', 'type' => 'text', 'name' => 'telp', 'value' => $params->telp ?? '']) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label('Alamat', 'alamat'); ?>
                        <?= form_textarea(['class' => 'form-control', 'type' => 'text', 'name' => 'alamat', 'rows' => '5', 'value' => $params->alamat ?? '']) ?>
                    </div>
                    <div class="col-12 text-center pt-5">
                        <button class="read_more"> Ubah</button>
                    </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>