<?php
require_once('../models/Task.php');

$title = $_POST['title'];
$task = $_POST['task'];
$id = $_POST['id'];

$editTask = Task::editTask($title, $task, $id);

if(!$editTask->error){
    header("Location: ../");
} else {
    exit('Error editing the task');
}

?>