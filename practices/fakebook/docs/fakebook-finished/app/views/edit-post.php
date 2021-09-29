<?php

require_once 'layout/header.php';
?>
        <div class="row">
            <div class="col-3">
                <?php require_once 'layout/modules/session.php'; ?>
            </div>
            <div class="col-9">
                <?php if(Session::get('User')): ?>
                    <form class="clearfix" action="<?= App::basedir() ?>/posts/change" method="post">
                        <textarea name="post" class="form-control form-group"><?= $data['post'] ?></textarea>
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                        <button class="btn btn-success float-right" type="submit"><i class="fa fa-save"></i> <?= App::$lang->save ?></button>
                    </form>
                    <hr>
                <?php endif; ?>
            </div>
        </div>
<?php

require_once 'layout/footer.php';

?>
