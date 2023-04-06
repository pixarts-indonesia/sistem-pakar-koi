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
            <div class="col-md-12 text-center" style="padding: 8%;">
                <h1>Penyakit</h1>
                <?php $i = 1; foreach ($hasil['penyakit']['nama'] as $key => $value) : ?>
                    <b><?= $i++; ?>.</b>
                    <b><?= $value.' ('.$hasil['nilai'][$key].'%)'; ?></b>
                    <br>
                <?php endforeach; ?>
                <hr>
                <h1>Gejala</h1>
                <?php $i = 1; foreach ($hasil['gejala'] as $key => $value) : ?>
                    <b><?= $i++; ?>.</b>
                    <b><?= $value; ?></b>
                    <br>
                <?php endforeach; ?>
                <hr>
                <h1>Solusi</h1>
                <?php $i = 1; foreach ($hasil['penyakit']['solusi'] as $key => $value) : ?>
                    <b><?= $i++; ?>.</b>
                    <b><?= $value; ?></b>
                    <br>
                <?php endforeach; ?>
                <hr>
                <div class="col-12 text-center pt-5">
                    <a href="/responden" class="btn btn-primary">Responden</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('h1').click(function() {
                var id = $(this).attr('id-data');
                slide(id);
            });
            $('.detail-bobot').click(function() {
                var id = $(this).attr('id-data');
                slide(id);
            });
            function slide(id) {
                $('#' + 'div' + id).toggle();
            }
        });
    </script>

<?= $this->endSection() ?>