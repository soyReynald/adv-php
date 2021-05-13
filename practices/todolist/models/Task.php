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