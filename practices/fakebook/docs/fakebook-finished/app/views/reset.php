<?php

require_once 'layout/header.php';
?>
        <div class="row">
            <div class="col-3">
                <?php require_once 'layout/modules/session.php'; ?>
            </div>
            <div class="col-9">
               <h5><?= App::$lang->reset_password ?></h5>
               <hr>
               <form method="post" action="<?= App::basedir() ?>/account/resetPassword">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="<?= App::$lang->password ?>">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="rpassword" class="form-control" placeholder="<?= App::$lang->rep_password ?>">
                    </div>
                    <input type="hidden" name="token" value="<?= $data['token'] ?>">
                    <button type="submit" class="btn btn-success"><i class="fas fa-sync-alt"></i> <?= App::$lang->change_password ?></button>
               </form>
            </div>
        </div>
<?php

require_once 'layout/footer.php';

?>
