<?php 

require_once('../models/Task.php');

@$title = $_POST['title'];
@$task = $_POST['task'];

$newTask = new Task($title, $task);

if($newTask){
    header("Location: ../");
} else {
    exit('Error inserting the task');
}

?>