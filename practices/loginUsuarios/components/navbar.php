<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="create_user.php">Create account</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profile permissions</a>
            </li>
        </ul>
        <?php if(!isset($_SESSION['user'])): ?>
        <form class="form-inline" action="controllers/loginUser.php" method="post">
            <input type="text" name="username" class="form-control mr-sm-2" placeholder="Username">
            <input type="password" name="password" class="form-control mr-sm-2" placeholder="Password">
            <button class="btn btn-outline-success" type="submit">Login</button>
        </form>
        <?php else: ?>
        <a href="controllers/logout.php" class="btn btn-outline-danger">Logout</a>
        <?php endif; ?>
    </div>
</nav> 