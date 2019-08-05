<?php $user = "@soyreynald"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Practices</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<body>
    <header>
        <h1>Welcome!</h1>
        <span class="description">This is the Adventist game BibleBoom!</span>
    </header>
    <main> 
        <div class="container">
            <h2><?php echo "Welcome".$user // == print_r("Welcome $user") ?></h2>
            <article>
                <h3><?php echo "We need you to please fill out this form for us to continue as a pice of cake" ?></h3>
                <h4>Have an account?</h4> <!-- js -->
                <div class="form-container login-form">
                    <form action ="login.php" enctype="form/data">
                        <label>Username: 
                            <input type="text" name="username">
                        </label>
                        <label>
                            Password: <input type="password" name="password">
                        </label>
                        <input type="submit" value="Submit">
                    </form>
                </div>
                <h4>Don't u have an account yet?</h4> <!-- js -->
                <div class="form-container login-form">
                    <form action ="registration.php" enctype="form/data">
                        <label>Username:
                            <input type="text" name="username">
                        </label>
                        <label>Name:
                            <input type="text" name="name">
                        </label>
                        <label>Last name:
                            <input type="text" name="last-name">
                        </label>
                        <label>Email: 
                            <input type="text" name="email">
                        </label>
                        <label>
                            Password: <input type="password" name="password">
                        </label>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </article>
            <button class="btn btn-default"> Continue ... </button> 
        </div>

    </main>
</body>
</html>