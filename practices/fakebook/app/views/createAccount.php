<?php require_once('layout/header.php'); ?>
<h1><?= '_CREATE ACCOUNT_' ?></h1>
<div class="row"></div>
<div class="col-12">
    <form action="<?= App::basedir() ?>/account/create" method="post">
        <div class="form-group input-group my-3">
            <div class="input-group-prepend">
                <span class="input-group-text py-2">
                    <i class="fas fa-user" style="font-size: 24px;"></i>
                </span>
            </div>
            <input name="name" type="text" class="form-control" placeholder="<?= '_NAME_' ?>">
        </div>
        <div class="form-group input-group my-3">
            <div class="input-group-prepend">
                <span class="input-group-text py-2">
                    <i class="fas fa-user" style="font-size: 24px;"></i>
                </span>
            </div>
            <input name="username" type="text" class="form-control" placeholder="<?= '_USERNAME_' ?>">
        </div>
        <div class="form-group input-group my-3">
            <div class="input-group-prepend">
                <span class="input-group-text py-2">
                    <i class="fas fa-envelope" style="font-size: 24px;"></i>
                </span>
            </div>
            <input name="email" type="text" class="form-control" placeholder="<?= '_EMAIL_' ?>">
        </div>
        <div class="form-group input-group my-3">
            <div class="input-group-prepend">
                <span class="input-group-text py-2">
                    <i class="fas fa-key" style="font-size: 24px;"></i>
                </span>
            </div>
            <input name="password" type="password" class="form-control" placeholder="<?= '_PASSWORD_' ?>">
        </div>
        <button type="submit" class="btn btn-primary float-end"><i class="fas fa-user-plus" style="font-size: 24px;"></i><?= '_CREATE ACCOUNT_' ?></button>
    </form>
</div>
</div>
<?php require_once('layout/footer.php'); ?>