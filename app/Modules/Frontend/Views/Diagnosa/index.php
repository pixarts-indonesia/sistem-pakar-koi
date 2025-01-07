<?= $this->extend('App\Modules\Frontend\Views\Layout\main') ?>

<?= $this->section('content') ?>
<style>
    h1 {
        margin-bottom: 0rem !important;
    }

    .rad-label {
        display: flex;
        align-items: center;
    }
</style>
<!--? Hero Start -->
<div class="slider-area2">
    <div class="slider-height2 hero-overly2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap hero-cap2 text-center">
                        <h2><?= $title ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->
<div class="contact" style="margin: 10rem 0rem;">
    <div class="container shadow bg-white rounded">
        <div class="col-md-12" style="padding: 8%;">
            <form id="request" class="diagnosa-form" method="POST">
                <ol class="no-list">
                    <?php foreach ($gejala as $key => $value) : ?>
                        <li>
                            <div div class="col-12 row">
                                <div class="detail-bobot">
                                    <i class="fa fa-plus-square" id-data="<?= $value['kode_gejala']; ?>" style="align-content: center;"></i>
                                </div>
                                <h1 id-data="<?= $value['kode_gejala']; ?>" style="font-size: 20px; font-weight: bold; cursor: pointer;">
                                    <?= $value['nama']; ?>
                                </h1>
                            </div>
                            <div class="col-12 row list-bobot" id="div<?= $value['kode_gejala']; ?>" style="display:none">
                                <?php foreach ($master_bobot as $k => $val) : ?>
                                    <label class="rad-label" style="display: flex;align-items: center;margin-right: 1rem;">
                                        <input type="radio" class="rad-input" name="<?= $value['kode_gejala']; ?>" value="<?= $val['nilai']; ?>" style="margin-right: 10px;">
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
                    <button class="read_more btn btn-sm btn-primary">Proses</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {

        $('.detail-bobot i').click(function(event) {
            event.stopPropagation();
            var id = $(this).attr('id-data');
            toggleIcon($(this));
            slide(id);
        });

        $('h1').click(function() {
            var id = $(this).attr('id-data');
            var icon = $('.detail-bobot i[id-data="' + id + '"]'); // Cari ikon terkait
            toggleIcon(icon);
            slide(id);
        });

        function slide(id) {
            $('#' + 'div' + id).toggle();
        }

        function toggleIcon(icon) {
            if (icon.hasClass('fa-plus-square')) {
                icon.removeClass('fa-plus-square').addClass('fa-minus-square');
            } else {
                icon.removeClass('fa-minus-square').addClass('fa-plus-square');
            }
        }
    });
</script>
<?= $this->endSection() ?>