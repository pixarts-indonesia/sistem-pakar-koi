<?php

use App\Modules\Backend\Models\PenyakitModel;
use App\Modules\Backend\Models\GejalaModel;
use App\Modules\Backend\Models\RulesModel;

$penyakit = new PenyakitModel;
$gejala = new GejalaModel;
$rules = new RulesModel;
?>
<?= form_open('', ['method' => 'POST']); ?>
    <div class="form-group">
        <?= form_label('Kode Penyakit', 'nama'); ?>
        <?= form_input([
            'class' => 'form-control',
            'type' => 'text',
            'name' => 'kode_penyakit',
            'placeholder' => 'Masukan Kode Penyakit',
            'value' => $params->kode_penyakit ?? '',
            'autocomplete' => 'off'
        ]) ?>
    </div>
    <div class="form-group">
        <?= form_label('Nama Penyakit', 'nama'); ?>
        <?= form_input([
            'class' => 'form-control',
            'type' => 'text',
            'name' => 'nama',
            'placeholder' => 'Masukan Nama Penyakit',
            'value' => $params->nama ?? '',
            'autocomplete' => 'off'
        ]) ?>
    </div>
    <div class="form-group">
        <?= form_label('Solusi', 'nama'); ?>
        <?= form_input([
            'class' => 'form-control',
            'type' => 'text',
            'name' => 'solusi',
            'placeholder' => 'Masukan Solusi',
            'value' => $params->solusi ?? '',
            'autocomplete' => 'off'
        ]) ?>
    </div>
    <button type="submit" class="btn text-white btn-block btn-primary">
        <span class="icon-daftar"></span> Simpan
    </button>
    <a href="<?= base_url('admin/penyakit') ?>" class="btn btn-light">Kembali</a>
<?= form_close(); ?>