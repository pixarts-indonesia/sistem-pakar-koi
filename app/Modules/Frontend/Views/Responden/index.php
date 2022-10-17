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
            <div class="col-md-12 pr-5 pt-5 pb-5">
                <div class="col-12 text-center">
                    <h1>Isi Pernyataan dibawah</h1>
                    <?php if($validation) : ?>
                        <div class="form-group pb-1">
                            <div class="alert alert-danger" role="alert">
                                <?= service('validation')->listErrors() ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <?= form_open('', ['method' => 'POST']); ?>
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark avoid-clicks">
                            <tr>
                                <th>#</th>
                                <th>Pertanyaan</th>
                                <th>SS</th>
                                <th>ST</th>
                                <th>RG</th>
                                <th>TS</th>
                                <th>STS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($models as $key => $value): ?>
                                <tr>
                                    <th scope="row"><?= $key+1 ?></th>
                                    <th class="avoid-clicks"><?= $value['pertanyaan']; ?></th>
                                    <td>
                                        <?= form_input([
                                            'class' => 'form-control',
                                            'type' => 'radio',
                                            'name' => $value['id'],
                                            'value' => 5
                                        ]) ?>
                                    </td>
                                    <td>
                                        <?= form_input([
                                            'class' => 'form-control',
                                            'type' => 'radio',
                                            'name' => $value['id'],
                                            'value' => 4
                                        ]) ?>
                                    </td>
                                    <td>
                                        <?= form_input([
                                            'class' => 'form-control',
                                            'type' => 'radio',
                                            'name' => $value['id'],
                                            'value' => 3
                                        ]) ?>
                                    </td>
                                    <td>
                                        <?= form_input([
                                            'class' => 'form-control',
                                            'type' => 'radio',
                                            'name' => $value['id'],
                                            'value' => 2
                                        ]) ?>
                                    </td>
                                    <td>
                                        <?= form_input([
                                            'class' => 'form-control',
                                            'type' => 'radio',
                                            'name' => $value['id'],
                                            'value' => 1
                                        ]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr class="thead-dark">
                                <th>#</th>
                                <th>Pertanyaan</th>
                                <th scope="col">SS</th>
                                <th scope="col">ST</th>
                                <th scope="col">RG</th>
                                <th scope="col">TS</th>
                                <th scope="col">STS</th>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    <strong>Keterangan</strong><br>
                                    <strong>SS</strong> : Sangat Setuju<br>
                                    <strong>ST</strong> : Setuju<br>
                                    <strong>RG</strong> : Ragu - Ragu<br>
                                    <strong>TS</strong> : Tidak Setuju<br>
                                    <strong>STS</strong> : Sangat Tidak Setuju<br>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="col-12 text-center pt-5">
                        <button class="read_more"> Simpan</button>
                    </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>