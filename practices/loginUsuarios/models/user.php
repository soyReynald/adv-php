<?php

function addUser($username, $password, $profile, $pdo){
    if(trim($username) == '' or trim($password) == ''){
        exit('You must write a username or password');
    }

    $query = "SELECT id FROM users WHERE username = :username";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(':username', $username);
    $stmt->execute() or die(implode(' >> ', $stmt->errorInfo()));

    if($stmt->rowCount() > 0){
        exit('This user already exists in the database');
    }

    $query = "INSERT INTO users (username, password, profile) VALUES (:username, :password, :profile)";

    $stmt = $pdo->prepare($query);

    $password = password_hash($password, PASSWORD_BCRYPT);

    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':profile', $profile);

    $stmt->execute() or die(implode(">>", $stmt->errorInfo()));
}

function userLogin($username, $password, $pdo){
    $query = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(':username', $username);

    $stmt->execute() or die(implode('>>', $stmt->errorInfo()));

    if($stmt->rowCount() > 0){
        $user = $stmt->fetch(PDO::FETCH_OBJ);

        if(password_verify($password, $user->password)){
            openSession();
            $_SESSION['user'] = $user;
            return true;
        } else {
            return false;
        }
    }
}

function getProfiles($pdo){
    $query = "SELECT * FROM profiles";

    $stmt = $pdo->prepare($query);

    $stmt->execute() or die(implode('>>', $stmt->errorInfo()));

    if($stmt->rowCount() > 0){
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    } else {
        return false;
    }
}

function openSession(){
    if(!isset($_SESSION)){
        session_start();
    }
}
?>