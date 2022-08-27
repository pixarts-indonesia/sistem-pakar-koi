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
                </div>
                <form id="request" class="main_form">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">SS</th>
                                <th scope="col">ST</th>
                                <th scope="col">RG</th>
                                <th scope="col">TS</th>
                                <th scope="col">STS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Bisa login dengan baik</th>
                                <td><input type="radio" id="ss" name="keterangan-satu" value="SS"></td>
                                <td><input type="radio" id="st" name="keterangan-satu" value="ST"></td>
                                <td><input type="radio" id="rg" name="keterangan-satu" value="RG"></td>
                                <td><input type="radio" id="ts" name="keterangan-satu" value="TS"></td>
                                <td><input type="radio" id="sts" name="keterangan-satu" value="STS"></td>
                            </tr>
                            <tr>
                                <th scope="row">Hasil diagnosa tepat</th>
                                <td><input type="radio" id="ss" name="keterangan-dua" value="SS"></td>
                                <td><input type="radio" id="st" name="keterangan-dua" value="ST"></td>
                                <td><input type="radio" id="rg" name="keterangan-dua" value="RG"></td>
                                <td><input type="radio" id="ts" name="keterangan-dua" value="TS"></td>
                                <td><input type="radio" id="sts" name="keterangan-dua" value="STS"></td>
                            </tr>
                        </tbody>
                        <tfoot>
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
                </form>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>