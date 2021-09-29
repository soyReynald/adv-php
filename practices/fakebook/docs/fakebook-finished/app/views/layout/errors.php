<?php foreach (Errors::getMsg() as $error): ?>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong><?= $error ?></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>

<?php endforeach ?>

<?php Errors::deleteMsg() ?>