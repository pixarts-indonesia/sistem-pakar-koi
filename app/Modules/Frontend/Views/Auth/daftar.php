<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <img src="<?= base_url('assets/svg/undraw_file_sync_ot38.svg'); ?>" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Daftar</h3>
                                <p class="mb-4">Daftar terlebih dahulu jika kamu tidak memiliki akun.</p>
                            </div>
                            <form action="#" method="post">
                                <div class="form-group first">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama">
                                </div>
                                <div class="form-group first">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username">
                                </div>
                                <div class="form-group first">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email">
                                </div>
                                <div class="form-group first">
                                    <label for="password">Password</label>
                                    <input type="text" class="form-control" id="password">
                                </div>
                                <button type="submit" class="btn text-white btn-block btn-primary">
                                    <span class="icon-daftar"></span> Daftar
                                </button>
                            </form>
                            <div class="d-flex justify-content-between">
                                <a href="<?= base_url('/'); ?>" rel="noopener noreferrer">
                                    <span class="d-block text-left my-4 text-primary">
                                        <span class="icon-home-auth"></span> Home
                                    </span>
                                </a>
                                <a href="<?= base_url('login'); ?>" rel="noopener noreferrer">
                                    <span class="d-block text-right my-4 text-primary">
                                        <span class="icon-login"></span> Login
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                
                </div>
                
            </div>
        </div>
    </div>
<?= $this->endSection() ?>