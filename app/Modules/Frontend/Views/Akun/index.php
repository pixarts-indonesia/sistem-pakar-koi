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
    <div class="contact d-flex">
        <div class="container shadow bg-white rounded col-4">
            <div class="col-md-12 pt-5 pb-5">
                <div class="d-flex justify-content-center">
                    <h1>Akun</h1>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <p class="text-dark">Nama</p>
                    <p class="text-dark"><?= session('user')->username; ?></p>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <p class="text-dark">Email</p>
                    <p class="text-dark">-</p>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <p class="text-dark">Nomor HP</p>
                    <p class="text-dark">-</p>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <p class="text-dark">Alamat</p>
                    <p class="text-dark">-</p>
                </div>
                <hr>
                <div class="col-12 text-center pt-5">
                    <button class="read_more"> Ubah</button>
                </div>
            </div>
        </div>
        <div class="container shadow bg-white rounded col-6">
            <div class="col-md-12 pt-5 pb-5">
                <div class="d-flex justify-content-center">
                    <h1>Riwayat</h1>
                </div>
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Penyakit</th>
                            <th scope="col">Gejala</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">27 Juni 2021</th>
                            <td>Jamur Insang</td>
                            <td>Ikan terlihat lemas, ikan terlihat menyendiri</td>
                        </tr>
                        <tr>
                            <th scope="row">27 April 2021</th>
                            <td>Dropsy</td>
                            <td>Ikan terlihat lemas, ikan tidak napsu makan</td>
                        </tr>
                    </tbody>
                    <tfoot class="thead-dark">
                        <tr>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Penyakit</th>
                            <th scope="col">Gejala</th>
                        </tr>
                    </tfoot>
                </table>
                <div class="col-12 text-center pt-5">
                    <a class="read_more" href="<?= base_url('diagnosa'); ?>"> Diagnosa Sekarang</a>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>