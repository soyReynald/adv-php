<?php

function getAccounts($pdo){

    $query = "SELECT number, balance, type, name FROM accounts, clients WHERE id = client";
    $stmt = $pdo->prepare($query);
    $stmt->execute() or die(implode(' >> ', $stmt->errorInfo()));

    if($stmt->rowCount() > 0){
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    } else {
        return false;
    }

}

function getMovements($pdo){

    $query = "SELECT * FROM movements";
    $stmt = $pdo->prepare($query);
    $stmt->execute() or die(implode(' >> ', $stmt->errorInfo()));

    if($stmt-> rowCount() > 0){
         return $stmt->fetchAll(PDO::FETCH_OBJ);
    } else {
        return false;
    }

}

?>