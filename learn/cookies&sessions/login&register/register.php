<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register to the website</title>
</head>
<body>
    
    <form action="API/register.php" method="post">

        <div class="form-group">
            <label for="name">Name</label>
            <br/>
            <input type="text" id="name" name="name" placeholder="Tu nombre!">
        </div>        
        
        <div class="form-group">
            <label for="user">User</label>
            <br/>
            <input type="text" id="user" name="user" placeholder="Tu usuario">
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <br/>
            <input type="text" id="password" name="password" placeholder="Tu contraseña">
        </div>

        <input type="submit" value="Acceder">

    </form>


</body>
</html>