<?php

class User extends Model
{
    public function __construct ($name, $username, $email, $password) {
        parent::__construct();
        $password = password_hash($password, PASSWORD_BCRYPT);
        $name = $this->cleanText($name);
        $username = $this->cleanText($username);
        $email = $this->cleanText($email);
        $token = md5($email);
        $sql = "INSERT INTO users (name, user, email, password) VALUES ('$name', '$username', '$email', '$password')";
        return $this->query($sql);
    }
    private function cleanText ($text) {
        return $this->real_escape_string(strip_tags($text));
    }
}
?>