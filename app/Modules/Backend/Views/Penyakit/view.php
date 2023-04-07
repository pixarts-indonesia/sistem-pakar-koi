<?= $this->extend('App\Modules\Backend\Views\Layout\main') ?>

<?= $this->section('content') ?>
    <script>
        $(document).ready(function() {
            $("#upload-gambar").click(function() {
                $("#file-gambar").trigger('click');
            });
            $("#file-gambar").change(function() {
                $('form').submit();
            });
        });
    </script>
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                        <li class="breadcrumb-item"><a href="<?= base_url('/admin'); ?>" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('/admin/penyakit'); ?>" class="link">Penyakit</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
                    </ol>
                    </nav>
                <h1 class="mb-0 fw-bold"><?= $title; ?></h1> 
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="mb-4 btn-group">
            <a href="<?= base_url('admin/penyakit') ?>" class="btn btn-sm btn-light">Kembali</a>
            <a href="<?= base_url('admin/penyakit/delete/'.$models->id) ?>" class="btn btn-sm btn-danger text-white">Hapus</a>
            <a href="<?= base_url('admin/penyakit/update/'.$models->id) ?>" class="btn btn-sm btn-success text-white">Ubah</a>
            <button id="upload-gambar" class="btn btn-sm btn-info text-white">Upload Gambar</button>
            <form method="post" action="<?= base_url('admin/penyakit/upload'); ?>" enctype="multipart/form-data" style="display: none;">
                <input type="text" name="id" value="<?=$models->id?>">
                <input type="text" name="name" value="<?=$models->nama?>">
                <input type="file" name="gambar" id="file-gambar">
                <input type="submit" value="Upload">
            </form>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><?= $title ?></h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th><?= $models->id ?></th>
                            </tr>
                            <tr>
                                <th scope="col">Kode Penyakit</th>
                                <th><?= $models->kode_penyakit ?></th>
                            </tr>
                            <tr>
                                <th scope="col">Nama Penyakit</th>
                                <th><?= $models->nama.' ('.$models->kode_penyakit.')' ?></th>
                            </tr>
                            <tr>
                                <th scope="col">Solusi</th>
                                <th><?= $models->solusi ?></th>
                            </tr>
                            <tr>
                                <th scope="col">Tanggal Tambah</th>
                                <th><?= $models->created_at ?></th>
                            </tr>
                        </thead>
                    </table>
                    <div class="px-3 pb-3">
                        <h1>Gambar</h1>
                        <hr>
                        <img style="width: 50%;" src="<?= base_url("assets/images/product/$models->img") ?>" alt="<?= $models->img ?>"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>