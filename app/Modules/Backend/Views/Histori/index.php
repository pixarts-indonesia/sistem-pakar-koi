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
                                <th scope="col">Kode Histori</th>
                                <th scope="col">Penyakit</th>
                                <th scope="col">Gejala</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($models as $key => $value): ?>
                                <tr>
                                    <th scope="row"><?= $key+1 ?></th>
                                    <td><?= $value['kode_histori'] ?></td>
                                    <td><?= ucfirst($value['penyakit']) ?></td>
                                    <td><?= ucfirst($value['gejala']) ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url('admin/histori/view/'.$value['id']); ?>" class="btn btn-sm btn-info text-white">Detail</a>
                                            <a href="<?= base_url('admin/histori/update/'.$value['id']); ?>" class="btn btn-sm btn-success text-white">Ubah</a>
                                            <a href="<?= base_url('admin/histori/delete/'.$value['id']); ?>" class="btn btn-sm btn-danger text-white">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php if (!isset($models[0])) : ?>
                                <tr>
                                    <td colspan="5" class="text-center"><strong>Data Kosong</strong></td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>