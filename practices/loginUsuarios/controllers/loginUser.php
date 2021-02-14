<?php
require '../pdo.php';
require '../models/user.php';

if(userLogin($_POST['username'], $_POST['password'], $pdo)){
    header('Location: ../');
} else {
    exit('Wrong username or password');
}

?>