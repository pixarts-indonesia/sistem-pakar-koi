<?= $this->extend('App\Modules\Backend\Views\Layout\main') ?>

<?= $this->section('content') ?>
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                        <li class="breadcrumb-item"><a href="<?= base_url('/admin'); ?>" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('/admin/rules'); ?>" class="link">Rules</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
                    </ol>
                    </nav>
                <h1 class="mb-0 fw-bold"><?= $title; ?></h1> 
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="mb-4 btn-group">
            <a href="<?= base_url('admin/rules') ?>" class="btn btn-sm btn-light">Kembali</a>
            <a href="<?= base_url('admin/rules/delete/'.$models->id) ?>" class="btn btn-sm btn-danger text-white">Hapus</a>
            <a href="<?= base_url('admin/rules/update/'.$models->id) ?>" class="btn btn-sm btn-success text-white">Ubah</a>
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
                                <th><?= $models->rules_id ?></th>
                            </tr>
                            <tr>
                                <th scope="col">Kode Rules</th>
                                <th><?= $models->kode_rules ?></th>
                            </tr>
                            <tr>
                                <th scope="col">Penyakit</th>
                                <th><?= $models->nama_penyakit.' ('.$models->rules_penyakit.')' ?></th>
                            </tr>
                            <tr>
                                <th scope="col">Gejala</th>
                                <th><?= $models->nama_gejala.' ('.$models->rules_gejala.')' ?></th>
                            </tr>
                            <tr>
                                <th scope="col">Nilai Bobot</th>
                                <th><?= $models->nilai_bobot ?></th>
                            </tr>
                            <tr>
                                <th scope="col">Tanggal Tambah</th>
                                <th><?= $models->created_at ?></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>