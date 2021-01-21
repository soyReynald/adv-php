<?php

/* 
Array
(
    [date] => 2021-01-18
    [time] => 10:00
    [category] => 2
    [name] => To work on Sales Sistem
)
*/

require 'config/mysqli.php';

$date = $con->escape_string(strip_tags($_POST['date']));
$time = $con->escape_string(strip_tags($_POST['time']));
$category = $con->escape_string(strip_tags($_POST['category']));
$name = $con->escape_string(strip_tags($_POST['name']));
$id = $con->escape_string(strip_tags($_POST['id']));

$dateTime = date('Y-m-d H:i', strtotime($date.' '.$time));

$sql = "UPDATE events SET name = '$name', date = '$dateTime', cat = $category WHERE id = $id";

$con->query($sql);

$url = date('m-Y', strtotime($date));

header('Location: index.php?month='. $url);

?>