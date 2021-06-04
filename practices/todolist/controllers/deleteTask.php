<?php
require_once('../models/Task.php');
$id = $_GET['id'];

$deleteTask = Task::deleteTask($id);

if(!$deleteTask->error){
    header("Location: ../");
} else {
    exit('Error deleting the task');
}

?>