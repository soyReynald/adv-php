<?php

require_once 'layout/header.php';
?>
        <div class="row">
            <div class="col-3">
                <?php require_once 'layout/modules/session.php'; ?>
            </div>
            <div class="col-9">
               <h5><?= App::$lang->edit_profile ?></h5>
               <hr>
               <h6><?= App::$lang->update_user_info ?></h6>
               <form method="post" class="form-group" action="<?= App::basedir() ?>/account/updateUser">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input name="name" value="<?= $data['name'] ?>" type="text" class="form-control" placeholder="<?= App::$lang->name ?>">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input name="user" value="<?= $data['username'] ?>" type="text" class="form-control" placeholder="<?= App::$lang->username ?>">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input name="email" value="<?= $data['email'] ?>" type="email" class="form-control" placeholder="<?= App::$lang->email ?>">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-universal-access"></i></span>
                        </div>
                        <select name="group" class="form-control">
                            <?php foreach($data['groups'] as $group): ?>
                            <?php $selected = $data['group'] == $group->id ? 'selected' : '' ?>
                            <option value="<?= $group->id ?>" <?= $selected ?>><?= $group->group ?></option>
                            <?php endforeach ?>
                        </select>
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                    </div>
                    <button class="btn btn-success"><i class="fas fa-sync-alt"></i> <?= App::$lang->update_info ?></button>
               </form>
            </div>
        </div>
<?php

require_once 'layout/footer.php';

?>
