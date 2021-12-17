<?php

class User extends Model
{
    public function __construct($name, $username, $email, $password)
    {
        parent::__construct();
        $password = password_hash($password, PASSWORD_BCRYPT);
        $name = $this->cleanText($name);
        $username = $this->cleanText($username);
        $email = $this->cleanText($email);
        $token = md5($email);
        $sql = "INSERT INTO users (name, user, email, password, token) VALUES ('$name', '$username', '$email', '$password', '$token')";
        return $this->query($sql);
    }

    public function activate($token)
    {
        $token = $this->clean($token);

        $query = "UPDATE users SET activate = 1 WHERE token = '$token'";

        return $this->query($query);
    }
}
