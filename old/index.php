<?php include("resources/back/config.php") ?>
<?php include("resources/front/header.php"); ?>
<div class="container">

    <h2>Login Formulary</h2>
    <form action="login.php" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input name="username" type="text" class="username form-control">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input name="password" type="password" class="password form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Login</button>
        </div>
    </form>

    <h2>Register Formulary</h2>
    <form action="registration.php" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
                <input name="name" type="text" class="name form-control">
        </div>
        <div class="form-group">
            <label for="username">Username:</label>
                <input name="username" type="text" class="username form-control">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
                <input name="email" type="text" class="username form-control">
        </div>
        <div class="form-group">
            <label for="pass">Password:</label>
                <input name="pass" type="password" class="password form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Register</button>
        </div>
    </form>

</div>
