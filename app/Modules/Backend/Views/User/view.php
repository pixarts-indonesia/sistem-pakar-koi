<?= $this->extend('App\Modules\Backend\Views\Layout\main') ?>

<?= $this->section('content') ?>
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                        <li class="breadcrumb-item"><a href="<?= base_url('/admin'); ?>" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('/admin/user'); ?>" class="link">User</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
                    </ol>
                    </nav>
                <h1 class="mb-0 fw-bold"><?= $title; ?></h1> 
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="mb-4 btn-group">
            <a href="<?= base_url('admin/user') ?>" class="btn btn-sm btn-light">Kembali</a>
            <?php if ($models->deleted_at) { ?>
                <a href="<?= base_url('admin/user/forgot-password/'.$models->id) ?>" class="btn btn-sm btn-danger text-white">Ubah Password</a>
            <?php } ?>
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
                                <th scope="col">Username</th>
                                <th><?= $models->username ?></th>
                            </tr>
                            <tr>
                                <th scope="col">Nama</th>
                                <th><?= ucfirst($models->nama) ?></th>
                            </tr>
                            <tr>
                                <th scope="col">Email</th>
                                <th><?= $models->email ?></th>
                            </tr>
                            <tr>
                                <th scope="col">Telpon</th>
                                <th><?= $models->telp ?></th>
                            </tr>
                            <tr>
                                <th scope="col">Alamat</th>
                                <th><?= $models->alamat ?></th>
                            </tr>
                            <tr>
                                <th scope="col">Reset Password</th>
                                <?php if ($models->deleted_at) { ?>
                                    <th><span class="btn btn-sm btn-danger text-white">User Mengajukan Riset Password</span></th>
                                <?php } else { ?>
                                    <th><span class="btn btn-sm btn-info text-white">Tidak Ada Pengajuan Riset Password</span></th>
                                <?php } ?>
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