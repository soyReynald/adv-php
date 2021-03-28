<?php

require('pdo.php');

$from = $_POST['from'];
$to = $_POST['to'];
$amount = $_POST['amount'];
$description = $_POST['description'];

if($from === $to){
    exit("You can't transfer to the same account");
}

$query = "SELECT balance FROM accounts WHERE number = '$from' AND balance >= '$amount'";
$consult = $pdo->prepare($query);
$consult->execute();

if($consult->fetchColumn() == 0){
    exit("You don't have enough funds");
}


?>