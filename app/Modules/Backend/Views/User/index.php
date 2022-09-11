<?= $this->extend('App\Modules\Backend\Views\Layout\main') ?>

<?= $this->section('content') ?>
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                        <li class="breadcrumb-item"><a href="<?= base_url('/admin'); ?>" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
                    </ol>
                </nav>
                <h1 class="mb-0 fw-bold"><?= $title; ?></h1> 
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tabel <?= $title ?></h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Username</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Telpon</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Reset Password</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($models as $key => $value): ?>
                                <tr>
                                    <th scope="row"><?= $key+1 ?></th>
                                    <td><?= $value['username'] ?></td>
                                    <td><?= ucfirst($value['nama']) ?></td>
                                    <td><?= $value['email'] ?></td>
                                    <td><?= $value['telp'] ?></td>
                                    <td><?= $value['alamat'] ?></td>
                                    <td>
                                        <?php if ($value['deleted_at']) { ?>
                                            <span class="btn btn-sm btn-danger text-white">True</span>
                                        <?php } else { ?>
                                            <span class="btn btn-sm btn-info text-white">False</span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url('admin/user/view/'.$value['id']); ?>" class="btn btn-sm btn-info text-white">Detail</a>
                                            <?php if ($value['deleted_at']) { ?>
                                                <a href="<?= base_url('admin/user/forgot-password/'.$value['id']); ?>" class="btn btn-sm btn-danger text-white">Password</a>
                                            <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php if (!isset($models[0])) : ?>
                                <tr>
                                    <td colspan="8" class="text-center"><strong>Data Kosong</strong></td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>