<div class="alert alert-danger alert-dismissible fade show alert-position" aria-live="polite" aria-atomic="true">
    <!-- <div class="toast" role="alert" aria-live="assertive" aria-atomic="true"> -->
        <div class="toast-header">
            <strong class="mr-auto">Gagal</strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            <?= session()->getFlashData('error'); ?>
        </div>
    <!-- </div> -->
</div>