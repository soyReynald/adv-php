<?php

class Task {
    protected static $server = 'localhost';
    protected static $user = 'root';
    protected static $pass = '';
    protected static $database = 'todolist';
    protected static $mysqli;

    public function __construct($title, $task){
        $title = $this->clean($title);
        $task = $this->clean($task);
        
        $sql = "INSERT INTO tasks (title, task, date) VALUES ('$title', '$task', NOW())";

        $inserted = self::$mysqli->query($sql);

        self::$mysqli->close();

        return $inserted;
    }

    public static function allTasks(){
        self::mysqli();

        $sql = "SELECT * FROM tasks";
        $rsAllTasks = self::$mysqli->query($sql);

        if($rsAllTasks->num_rows > 0){
            $tasks = array();

            while($row = $rsAllTasks->fetch_object()){
                $tasks[] = $row;
            }

            //$rsAllTask->free();

            $response = $tasks;
        } else {
            $response = false;
        }

        self::$mysqli->close();

        return $response;
    }

    public static function getTask($id){

        $id = self::clean($id);

        $sql = "SELECT * FROM tasks WHERE id = $id";

        $rsTask = self::$mysqli->query($sql);

        if($rsTask->num_rows > 0){
            $task = $rsTask->fetch_object();

            //$rsAllTask->free();

            $response = $task;
        } else {
            $response = false;
        }

        self::$mysqli->close();

        return $response;
    }

    public static function editTask($newTitle, $newTask, $id){
        $newTitle = self::clean($newTitle);
        $newTask = self::clean($newTask);
        $id = self::clean($id);
        
        $sql = "UPDATE tasks SET title = '$newTitle', task = '$newTask' WHERE id = $id";

        $edited = self::$mysqli->query($sql);

        self::$mysqli->close();

        return $edited;
    }

    public static function deleteTask($id){
        $id = self::clean($id);

        $sql = "DELETE FROM tasks WHERE id = $id";

        $deleted = self::$mysqli->query($sql);

        self::$mysqli->close();

        return $deleted;
    }

    protected static function mysqli(){
        if(!isset(self::$mysqli)){
            self::$mysqli = mysqli_connect(self::$server, self::$user, self::$pass, self::$database) or die(mysqli_connect_error());
        }
    }

    protected static function clean($text){
        self::mysqli();

        return self::$mysqli->escape_string(strip_tags($text));
    }
}

?>