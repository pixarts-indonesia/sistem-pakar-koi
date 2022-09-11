<div class="alert alert-success alert-dismissible fade show alert-position" aria-live="polite" aria-atomic="true">
    <!-- <div class="toast" role="alert" aria-live="assertive" aria-atomic="true"> -->
        <div class="toast-header">
            <strong class="mr-auto">Sukses</strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            <?= session()->getFlashData('success'); ?>
        </div>
    <!-- </div> -->
</div>