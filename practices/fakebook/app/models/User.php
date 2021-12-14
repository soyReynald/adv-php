<?php

class User extends Model
{
    public function __construct($name, $username, $email, $password) {
        parent::__construct();
        $sql = "INSERT INTO users (name, user, email, password) VALUES ('$name', '$username', '$email', '$password')";
        return $this->query($sql);
    }

}
?>