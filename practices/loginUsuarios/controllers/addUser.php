<?php

require '../pdo.php';
require '../models/user.php';

addUser($_POST['username'], $_POST['password'], $_POST['profile'], $pdo);

header('Location: ../');

?>