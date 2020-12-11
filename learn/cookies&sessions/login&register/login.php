<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to the website</title>
</head>
<body>
    <?php
        if(isset($_GET['error'])){
            if($_GET['error'] == "NotRights"){
                echo "You don't have access to the page you were looking for, please Login with your user and password.</br>";
            }else if($_GET['error'] == "UserAndPassword"){
                echo "Your User and Password are not correct for giving you the access, please try again.<br/>";
            }
        }
        if(isset($_GET['logout'])){
            echo "You have log out successfully.<br/>";
        }
    ?>
    <form action="API/login.php" method="post">
        
        <div class="form-group">
            <label for="user">User</label>
            <br/>
            <input type="text" id="user" name="user" placeholder="Tu usuario">
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <br/>
            <input type="password" id="password" name="password" placeholder="Tu contraseña">
        </div>

        <input type="submit" value="Acceder">

    </form>
</body>
</html>