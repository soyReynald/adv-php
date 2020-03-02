<?php include("resources/back/config.php"); 
$db['username'] = $_POST['username'];
$db['name'] = $_POST['name'];
$db['email'] = $_POST['email'];
$db['password'] = $_POST['pass'];

foreach($db as $key => $value){
    define(strtoupper($key), $value);
}

$query = "INSERT INTO users('USERNAME', 'NAME', 'EMAIL', 'PASSWORD')";

$insert_info_query = mysqli_query($query, $connection);

if($insert_info_query){
    echo "Connection success";
}

?>