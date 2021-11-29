<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/fontawesome.css">
    <link rel="stylesheet" href="public/css/globals.css">
    <script src="public/js/bootstrap.js"></script>
    <script src="public/js/fontawesome.js"></script>
    <title>Fakebook</title>
</head>

<body>
    <div class="container">
        <!-- <h2><i class="fas fa-car"></i><?= $data['company'] ?></h2> -->
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
                        <a href="?url=createAccount" class="btn btn-link"><?= '_CREATE ACCOUNT_' ?></a>
                    </form>
                </div>
                <div class="col-9">Right</div>
            </div>
        </div>
    </div>
</body>

</html>