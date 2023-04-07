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
            <div class="col-md-12" style="padding: 8%;">
                <hr>
                <div class="col-md-12 row">
                    <div class="col-md-3 text-left">
                        <span>Nama User</span>
                    </div>
                    <div class="col-md-3 text-right">
                        <span>:</span>
                    </div>
                    <div class="col-md-6 text-left">
                        <span><?= $user->nama ?? '-'; ?></span>
                    </div>
                </div>
                <div class="col-md-12 row pt-5">
                    <div class="col-md-3 text-left">
                        <span>Gejala</span>
                    </div>
                    <div class="col-md-3 text-right">
                        <span>:</span>
                    </div>
                    <div class="col-md-6 text-left">
                        <?php $i = 1; foreach ($hasil['gejala'] as $key => $value) : ?>
                            <span><?= $i++.'. '.$value; ?></span>
                            <br>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-12 row pt-5">
                    <div class="col-md-3 text-left">
                        <span>Penyakit</span>
                    </div>
                    <div class="col-md-3 text-right">
                        <span>:</span>
                    </div>
                    <div class="col-md-6 text-left">
                        <?php $i = 1; foreach ($hasil['penyakit']['nama'] as $key => $value) : ?>
                            <span><?= $i++.'. '.$value.' ('.$hasil['nilai'][$key].'%)'; ?></span>
                            <br>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-12 row pt-5">
                    <div class="col-md-3 text-left">
                        <span>Solusi</span>
                    </div>
                    <div class="col-md-3 text-right">
                        <span>:</span>
                    </div>
                    <div class="col-md-6 text-left">
                        <?php $i = 1; foreach ($hasil['penyakit']['solusi'] as $key => $value) : ?>
                            <span><?= $i++.'. '.$value; ?></span>
                            <br>
                        <?php endforeach; ?>
                    </div>
                </div>
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