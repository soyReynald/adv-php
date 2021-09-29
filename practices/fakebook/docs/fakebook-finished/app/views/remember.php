<?php

require_once 'layout/header.php';
?>
        <div class="row">
            <div class="col-3">
                <?php require_once 'layout/modules/session.php'; ?>
            </div>
            <div class="col-9">
               <h5><?= App::$lang->remember_password ?></h5>
               <hr>
               <div class="alert alert-warning">
               <?= App::$lang->mail_password_msg ?>
               </div>
               <form method="post" action="<?= App::basedir() ?>/account/sendReset">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" name="email" class="form-control" placeholder="<?= App::$lang->email ?>">
                    </div>
                    <button type="submit" class="btn btn-success"><i class="fas fa-sync-alt"></i> <?= App::$lang->send_email ?></button>
               </form>
            </div>
        </div>
<?php

require_once 'layout/footer.php';

?>
