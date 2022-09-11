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
        <?= form_label('Nama Gejala', 'nama'); ?>
        <?= form_input([
            'class' => 'form-control',
            'type' => 'text',
            'name' => 'nama',
            'placeholder' => 'Masukan Nama Gejala',
            'value' => $params->nama ?? '',
            'autocomplete' => 'off'
        ]) ?>
    </div>
    <button type="submit" class="btn text-white btn-block btn-primary">
        <span class="icon-daftar"></span> Simpan
    </button>
    <a href="<?= base_url('admin/gejala') ?>" class="btn btn-light">Kembali</a>
<?= form_close(); ?>