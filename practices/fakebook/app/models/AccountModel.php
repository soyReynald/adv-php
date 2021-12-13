<?php

class AccountModel extends Model
{
    public function __construct() {
        parent::__construct();
    }

    public function create($name, $username, $email, $password) {

        $sql = "INSERT INTO users (name, user, email, password) VALUES ('$name', '$username', '$email', '$password')";
        return $this->query($sql);
        
    }
}
?>