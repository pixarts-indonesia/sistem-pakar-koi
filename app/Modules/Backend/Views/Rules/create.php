<?= $this->extend('App\Modules\Backend\Views\Layout\main') ?>

<?= $this->section('content') ?>
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/rules'); ?>" class="link">Rules</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
                    </ol>
                </nav>
                <h1 class="mb-0 fw-bold"><?= $title; ?></h1> 
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <?php if($validation) : ?>
            <div class="form-group pb-1">
                <div class="alert alert-danger" role="alert">
                    <?= service('validation')->listErrors() ?>
                </div>
            </div>
        <?php endif; ?>
        <?= view('App\Modules\Backend\Views\Rules\_from'); ?>
    </div>
<?= $this->endSection() ?>