<?php

require_once 'layout/header.php';
?>
        <div class="row">
            <div class="col-3">
                <?php require_once 'layout/modules/session.php'; ?>
            </div>
            <div class="col-9">
                <?php if(Session::get('User')): ?>
                    <form class="clearfix" action="posts/new" method="post">
                        <textarea name="post" class="form-control form-group"></textarea>
                        <button class="btn btn-success float-right" type="submit"><i class="fa fa-share-square"></i> <?= App::$lang->publish ?></button>
                    </form>
                    <hr>
                <?php endif; ?>
                <h3><?= App::$lang->posts ?></h3>
                <?php if(count($data['posts']) > 0): ?>
                    <?php foreach($data['posts'] as $post): ?>
                    <?php $visIcon = $post->visible == 1 ? '' : '-slash'; ?>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-light">
                                <div class="float-right">
                                    <?php if(isset(Session::get('User')->id_group) && Session::get('User')->id_group < 3): ?>
                                        <a title="<?= App::$lang->visible ?>" class="btn btn-info btn-sm" href="posts/toggle/<?= $post->id ?>"><i class="fa fa-eye<?= $visIcon ?>"></i></a>
                                    <?php endif; ?>
                                    <?php if(isset(Session::get('User')->id_group) && (Session::get('User')->id_group < 3 || Session::get('User')->id == $post->id_user)): ?>
                                    <a title="<?= App::$lang->edit ?>" class="btn btn-warning btn-sm" href="posts/edit/<?= $post->id ?>"><i class="fa fa-edit"></i></a>
                                    <?php endif ?>
                                    <?php if(isset(Session::get('User')->id_group) && (Session::get('User')->id_group == 1 || Session::get('User')->id == $post->id_user)): ?>
                                    <a title="<?= App::$lang->delete ?>" class="btn btn-danger btn-sm" href="posts/delete/<?= $post->id ?>"><i class="fa fa-trash"></i></a>
                                    <?php endif ?>
                                </div>
                                <img class="img-post" src="<?= Session::getImage($post->id_user) ?>" > <?= $post->name ?> - <?= $post->date ?>
                            </li>
                            <li class="list-group-item">
                                <?= $post->post ?>
                            </li>
                        </ul>
                        <br>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="alert alert-warning"><?= App::$lang->no_posts ?></div>
                <?php endif; ?>
            </div>
        </div>
<?php

require_once 'layout/footer.php';

?>
