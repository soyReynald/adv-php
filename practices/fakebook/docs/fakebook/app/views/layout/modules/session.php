<?php if(Session::get('User')): ?>
    <div>
        <ul class="list-group">
            <li class="list-group-item"><strong><?= App::$lang->user_signed ?></strong></li>
            <li class="list-group-item"><?= Session::get('User')->name ?></li>
            <li class="list-group-item"><img class="img-photo" src="<?= Session::getImage(Session::get('User')->id) ?>?<?= time() ?>"></li>
            <li class="list-group-item">
                <div class="dropdown">
                    <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-cogs"></i> <?= App::$lang->options ?>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <?php if(Session::get('User')->id_group < 2): ?>
                        <a class="dropdown-item" href="<?= App::basedir() ?>/account/users">
                            <i class="fas fa-users"></i> <?= App::$lang->edit_users ?>
                        </a>
                    <?php endif ?>
                        <a class="dropdown-item" href="<?= App::basedir() ?>/account/profile">
                            <i class="fas fa-edit"></i> <?= App::$lang->edit_profile ?>
                        </a>
                        <a class="dropdown-item" href="<?= App::basedir() ?>/account/logout">
                            <i class="fa fa-sign-out-alt"></i> <?= App::$lang->sign_out ?>
                        </a>
                    </div>
                </div> 
            </li>
        </ul>
        
    </div>    
<?php else: ?>
    <form action="account/login" method="post">
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" name="user" class="form-control" placeholder="<?= App::$lang->username ?>">
            </div>  
        </div>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
                <input type="password" name="password" class="form-control" placeholder="<?= App::$lang->password ?>">
            </div>  
        </div>
        <button class="btn btn-primary"><i class="fas fa-unlock"></i> <?= App::$lang->login ?></button>
        <div>
            <a class="btn btn-link" href="<?= App::basedir() ?>/account"><?= App::$lang->create_account ?></a>
            <a class="btn btn-link" href="<?= App::basedir() ?>/account/remember"><?= App::$lang->remember_password ?></a>
        </div>
        
    </form>
<?php endif; ?>