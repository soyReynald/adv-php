<?php

require_once 'layout/header.php';
?>
        <div class="row">
            <div class="col-3">
                <?php require_once 'layout/modules/session.php'; ?>
            </div>
            <div class="col-9">
               <h5><?= App::$lang->edit_users ?></h5>
               <hr>
               <table class="table table-striped">
                    <tr>
                        <th><?= App::$lang->name ?></th>
                        <th><?= App::$lang->username ?></th>
                        <th><?= App::$lang->email ?></th>
                        <th><?= App::$lang->actions ?></th>
                    </tr>
                <?php foreach($data['users'] as $user): ?>
                    <tr>
                        <td><?= $user->name ?></td>
                        <td><?= $user->user ?></td>
                        <td><?= $user->email ?></td>
                        <td>
                        <?php $status = $user->active ? 'check' : 'times' ?>
                            <a href="<?= App::basedir() ?>/account/toggleUser/<?= $user->id ?>" title="<?= App::$lang->active_user ?>" class="btn btn-sm btn-success"><i class="fas fa-<?= $status ?>"></i></a>
                            <a href="<?= App::basedir() ?>/account/pdf/<?= $user->id ?>" title="<?= App::$lang->generate_pdf ?>" class="btn btn-sm btn-info"><i class="fas fa-file-pdf"></i></a>
                            <a href="<?= App::basedir() ?>/account/user/<?= $user->id ?>" title="<?= App::$lang->edit_user ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                        <?php if($user->id != Session::get('User')->id): ?>
                            <a onclick="return confirm('<?= App::$lang->delete_user_prompt ?>');" href="<?= App::basedir() ?>/account/deleteUser/<?= $user->id ?>" title="<?= App::$lang->delete_user ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                        <?php endif ?>
                        </td>
                    </tr>
                <?php endforeach ?>
               </table>
            </div>
        </div>
<?php

require_once 'layout/footer.php';

?>
