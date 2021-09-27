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
               <h6><?= App::$lang->change_image ?></h6>
               <div class="row">
                    <div class="col-md-3">
                        <img src="<?= Session::getImage(Session::get('User')->id) ?>?<?= time() ?>" class="form-group"><br>
                        <form method="post" enctype="multipart/form-data" action="<?= App::basedir() ?>/account/upload">
                            <input type="file" name="photo">
                            <button type="submit" class="btn btn-success"><i class="fas fa-upload"></i> <?= App::$lang->upload_image ?></button>
                        </form>
                    </div>
                    <div class="col-md-9">
                    <?php if($data['crop']): ?>
                        <img id="crop_target" src="<?= App::basedir() ?>/public/img/users/tmp/temp_<?= Session::get('User')->id ?>.jpg?<?= time() ?>">
                        <br>
                        <form onsubmit="return checkCoords();" method="post" action="<?= App::basedir() ?>/account/crop">
                            <input type="hidden" name="x" id="x">
                            <input type="hidden" name="y" id="y">
                            <input type="hidden" name="w" id="w">
                            <input type="hidden" name="h" id="h">
                            <button type="submit" class="btn btn-success"><i class="fas fa-crop"></i> <?= App::$lang->crop ?></button>
                        </form>
                        <script src="<?= App::basedir() ?>/public/js/jquery.Jcrop.js"></script>
                        <script>
                            $(function(){

                                $('#crop_target').Jcrop({
                                    setSelect: [0,0,100,100],
                                    aspectRatio: 1,
                                    onChange: updateCoords,
                                    onSelect: updateCoords
                                });

                            });

                            function updateCoords(coords){
                                $('#x').val(coords.x);
                                $('#y').val(coords.y);
                                $('#w').val(coords.w);
                                $('#h').val(coords.h);
                            }

                            function checkCoords(){
                                if(parseInt($('#w').val())){
                                    return true;
                                }
                                alert('<?= App::$lang->crop_error ?>')
                                return false;
                            }
                        </script>
                    <?php endif ?>
                    </div>
               </div>
               <hr>
               <h6><?= App::$lang->change_password ?></h6>
               <form class="form-group" method="post" action="<?= App::basedir() ?>/account/changePass">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="actual" class="form-control" placeholder="<?= App::$lang->actual_password ?>">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="new" class="form-control" placeholder="<?= App::$lang->new_password ?>">
                    </div>
                    <button type="submit" class="btn btn-success"><i class="fas fa-sync-alt"></i> <?= App::$lang->change_password ?></button>
               </form>
               <hr>
               <h6><?= App::$lang->update_user_info ?></h6>
               <form method="post" class="form-group" action="<?= App::basedir() ?>/account/changeInfo">
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
                    <button class="btn btn-success"><i class="fas fa-sync-alt"></i> <?= App::$lang->update_info ?></button>
               </form>
            </div>
        </div>
<?php

require_once 'layout/footer.php';

?>
