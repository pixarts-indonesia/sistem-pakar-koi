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
        <div class="mb-4 btn-group">
            <a href="<?= base_url('admin/rules/create') ?>" class="btn btn-sm btn-success text-white">Tambah</a>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tabel <?= $title ?></h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Kode Rules</th>
                                <th scope="col">Penyakit</th>
                                <th scope="col">Gejala</th>
                                <th scope="col">Nilai Bobot</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $kode_rules = '';
                                $count = array_count_values(array_column($models, 'kode_rules'));
                                foreach ($models as $key => $value): ?>
                                <tr>
                                    <?php if ($value['kode_rules'] != $kode_rules): ?>
                                        <?php $kode_rules = $value['kode_rules']; ?>
                                        <td style="vertical-align : middle; text-align:center;" rowspan="<?= $count[$value['kode_rules']]; ?>"><?= $value['kode_rules'] ?></td>
                                    <?php endif; ?>
                                    <td style="vertical-align : middle; text-align:center;"><?= $value['nama_penyakit'].' ('.$value['kode_penyakit'].')' ?></td>
                                    <td><?= $value['nama_gejala'].' ('.$value['kode_gejala'].')' ?></td>
                                    <td><?= $value['nilai_bobot'] ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url('admin/rules/view/'.$value['rules_id']); ?>" class="btn btn-sm btn-info text-white">Detail</a>
                                            <a href="<?= base_url('admin/rules/update/'.$value['rules_id']); ?>" class="btn btn-sm btn-success text-white">Ubah</a>
                                            <a href="<?= base_url('admin/rules/delete/'.$value['rules_id']); ?>" class="btn btn-sm btn-danger text-white">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>