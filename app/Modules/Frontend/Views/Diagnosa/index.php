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
                <form id="request" class="diagnosa-form" method="POST">
                    <ol class="no-list">
                        <?php foreach ($gejala as $key => $value) : ?>
                            <li>
                                <div div class="col-12 row">
                                    <h1 id-data="<?= $value['kode_gejala']; ?>"><?= $value['nama']; ?></h1>
                                    <i class="fa fa-plus-square detail-bobot" id-data="<?= $value['kode_gejala']; ?>"></i>
                                </div>
                                <div class="col-12 row list-bobot" id="div<?= $value['kode_gejala']; ?>" style="display:none">
                                    <?php foreach ($master_bobot as $k => $val) : ?>
                                        <label class="rad-label">
                                            <input type="radio" class="rad-input" name="<?= $value['kode_gejala']; ?>" value="<?= $val['nilai']; ?>">
                                            <div class="rad-design"></div>
                                            <div class="rad-text"><?= $val['nama']; ?></div>
                                        </label>
                                    <?php endforeach; ?>
                                </div>
                                <hr>
                            </li>
                        <?php endforeach; ?>
                    </ol>
                    <div class="col-12 text-center pt-5">
                        <button class="read_more">Proses</button>
                    </div>
                </form>
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