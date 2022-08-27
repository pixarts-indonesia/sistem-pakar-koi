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
                <form id="request" class="main_form">
                    <h1>Apakah ikan terlihat lemas?</h1>
                    <input type="radio" id="ya" name="kode-G01" value="Ya">
                    <label for="ya">Ya</label><br>
                    <input type="radio" id="tidak" name="kode-G01" value="tidak">
                    <label for="tidak">tidak</label><br>
                    <div class="col-12 text-center pt-5">
                        <button class="read_more"> Lanjut</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>