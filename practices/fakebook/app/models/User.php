<?php

class User extends Model
{
    public function __construct($user = [])
    {
        parent::__construct();
        if (count($user) > 0) {
            $password = password_hash($user['password'], PASSWORD_BCRYPT);
            $name = $this->cleanText($user['name']);
            $username = $this->cleanText($user['username']);
            $email = $this->cleanText($user['email']);
            $token = md5($user['email']);
            $sql = "INSERT INTO users (name, user, email, password, token) VALUES ('$name', '$username', '$email', '$password', '$token')";
            return $this->query($sql);
        }
    }

    public function activate($token)
    {
        $token = $this->cleanText($token);

        $query = "UPDATE users SET active = 1 WHERE token = '$token'";

        return $this->query($query) or die($this->error);
    }
}
