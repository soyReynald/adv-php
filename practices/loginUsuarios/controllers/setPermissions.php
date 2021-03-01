<?php
/*
Array
(
    [profile] => 1
    [permissions] => Array
        (
            [0] => 1
            [1] => 4
        )
)
*/
require '../pdo.php';
require '../models/user.php';

if(isset($_POST['permissions'])){
    setPermissions($_POST['profile'], $_POST['permissions'], $pdo);
}else{
    setPermissions($_POST['profile'], null, $pdo);
}

header('Location: ../permissions.php');

?>