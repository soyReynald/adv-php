<?php require_once('layout/header.php'); ?>   
    <div class="container">
        <div class="row">
            <div class="col-3">
                <form action="">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user" style="font-size: 24px;"></i></span>
                        </div>
                        <input class="form-control" type="text" name="user" placeholder="_USER_">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text py-2"><i class="fas fa-key" style="font-size: 24px;"></i></span>
                        </div>
                        <input class="form-control" type="password" name="password" placeholder="_PASSWORD_">
                    </div>
                    <button class="btn btn-primary float-end"><?= '_LOGIN_' ?></button>
                    <a href="account/create" class="btn btn-link"><?= '_CREATE ACCOUNT_' ?></a>
                </form>
            </div>
            <div class="col-9">Right</div>
        </div>
    </div>
<?php require_once('layout/footer.php'); ?>        