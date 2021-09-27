<?php

require_once 'layout/header.php';

?>
<h1><?= App::$lang->create_account ?></h1>
<div class="row">
    <div class="col-12">
        <form id="createAccount" action="account/create" method="post">
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input name="name" type="text" class="form-control" placeholder="<?= App::$lang->name ?>">
            </div>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input name="username" type="text" class="form-control" placeholder="<?= App::$lang->username ?>">
            </div>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input name="email" type="email" class="form-control" placeholder="<?= App::$lang->email ?>">
            </div>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input name="password" type="password" class="form-control" placeholder="<?= App::$lang->password ?>">
            </div>
            <button class="btn btn-success float-right" type="submit"><i class="fas fa-user-plus"></i> <?= App::$lang->create_account ?></button>
        </form>
    </div>
</div>
<?php

require_once 'layout/footer.php';

?>