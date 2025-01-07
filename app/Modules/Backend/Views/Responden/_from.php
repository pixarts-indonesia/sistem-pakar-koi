<?= form_open('', ['method' => 'POST']); ?>
    <div class="form-group">
        <?= form_label('Pertanyaan', 'pertanyaan'); ?>
        <?= form_input([
            'class' => 'form-control',
            'type' => 'text',
            'name' => 'pertanyaan',
            'placeholder' => 'Masukan Pertanyaan',
            'value' => $params->pertanyaan ?? '',
            'autocomplete' => 'off'
        ]) ?>
    </div>
    <button type="submit" class="btn text-white btn-block btn-primary">
        <span class="icon-daftar"></span> Simpan
    </button>
    <a href="<?= base_url('admin/responden') ?>" class="btn btn-light">Kembali</a>
<?= form_close(); ?>