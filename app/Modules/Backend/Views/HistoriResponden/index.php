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
                                <th scope="col">User</th>
                                <?php foreach ($modelsResponden as $key => $value) : ?>
                                    <th>Q<?= $key+1 ?></th>
                                <?php endforeach; ?>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Nilai</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($models as $key => $value): ?>
                                <tr>
                                    <th scope="row"><?= $key+1 ?></th>
                                    <td><?= $value['username'] ?></td>
                                    <?php foreach (json_decode($value['params']) as $k => $v): ?>
                                        <td><?= $v ?></td>
                                    <?php endforeach; ?>
                                    <td><?= $value['jumlah'] ?></td>
                                    <td><?= $value['nilai'] ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url('admin/hasil-responden/delete/'.$value['id']); ?>" class="btn btn-sm btn-danger text-white">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php if (!isset($models[0])) { ?>
                                <tr>
                                    <td colspan="25" class="text-center"><strong>Data Kosong</strong></td>
                                </tr>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="25" class="text-end">
                                        <p><strong>Nilai : <?= $jumlah; ?></strong></p>
                                        <p><strong>Jumlah Responden : <?= $jumlahResponden; ?></strong></p>
                                        <p><strong>Hasil SUS : <?= $sus; ?></strong></p>
                                        <p><i>* SUS = Nilai/Jumlah Responden *</i></p>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>