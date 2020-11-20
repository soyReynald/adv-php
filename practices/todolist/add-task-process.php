<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "todolist";

$con = new mysqli($host, $user, $pass, $db);

if($con->connect_errno){
    echo "There was an error connecting";
}

@$title = $_POST['title'];
@$task = $_POST['task'];
$sql = "INSERT INTO tasks (title, task, date) VALUES ('$title', '$task', NOW())";

$result = $con->query($sql);

if($result){
    header("Location: index.php");
}

?>