<?php
session_start();
$DBUser = "soyreynald";
$DBPassword = "123456";

if(isset($_SESSION['verified'])){
    echo "Bienvenido al área de usuarios de esta web, {$_POST['user']}<br/>";
    echo "Puede ingresar a ver sus cosas privadas <a href='../private/material.php'>aquí</a>";
}else if(isset($_POST['user']) && isset($_POST['password'])){
    if($_POST['user'] == $DBUser && $_POST['password'] == $DBPassword){
        $_SESSION['verified'] = true;
        $_SESSION['user'] = $_POST['user'];
        echo "Bienvenido al área de usuarios de esta web, {$_POST['user']}<br/>";
        echo "Puede ingresar a ver sus cosas privadas <a href='../private/material.php'>aquí</a>";
    }
}else{
    header("Location: ../login.php?error=UserAndPassword");
}



?>