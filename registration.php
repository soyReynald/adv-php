<?php 
include("resources/back/config.php");
session_start();

if(isset($_POST['username'])){
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $query = "INSERT INTO users(username, name, email, pass) VALUES('$username', '$name', '$email', '$password')";

    $insert_info_query = mysqli_query($connection, $query);

    if($insert_info_query){
        echo "Connection success";
    }
}else{
    echo "Error 512";
}

?>