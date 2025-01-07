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
        <?= form_label('Pilih Kode Rules', 'kode_rules'); ?>
        <?= form_dropdown([
            'class' => 'form-control',
            'name' => 'kode_rules',
            $value => true
        ], $rules->getRules(), ['value' => $params->kode_rules ?? '']) ?>
        <span>*Jika kamu tidak mengisi kode otomatis akan dibuat</span>
    </div>
    <div class="form-group">
        <?= form_label('Pilih Penyakit', 'kode_penyakit'); ?>
        <?= form_dropdown([
            'class' => 'form-control',
            'name' => 'kode_penyakit',
            $value => true
        ], $penyakit->getPenyakit(), ['value' => $params->kode_penyakit ?? '']) ?>
    </div>
    <div class="form-group">
        <?= form_label('Pilih Gejala', 'kode_gejala'); ?>
        <?= form_dropdown([
            'class' => 'form-control',
            'name' => 'kode_gejala',
            $value => true
        ], $gejala->getGejala(), ['value' => $params->kode_gejala ?? '']) ?>
    </div>
    <div class="form-group">
        <?= form_label('Nilai Bobot', 'nilai_bobot'); ?>
        <?= form_input(['class' => 'form-control', 'type' => 'number', 'name' => 'nilai_bobot', 'placeholder' => 'Masukan Nilai Bobot','value' => $params->nilai_bobot ?? '']) ?>
    </div>
    <button type="submit" class="btn text-white btn-block btn-primary">
        <span class="icon-daftar"></span> Simpan
    </button>
    <a href="<?= base_url('admin/rules') ?>" class="btn btn-light">Kembali</a>
<?= form_close(); ?>