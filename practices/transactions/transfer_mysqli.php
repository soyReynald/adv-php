<?php

require('mysqli.php');

$from = $_POST['from'];
$to = $_POST['to'];
$amount = $_POST['amount'];
$description = $_POST['description'];

if($from === $to){
    exit("You can't transfer to the same account");
}

$query = "SELECT balance FROM accounts WHERE number = '$from' AND balance >= '$amount'";
$consult = $mysqli->query($query) or die($mysqli->error());

if($consult->num_rows == 0){
    exit("You don't have enough funds");
}


$pdo->beginTransaction();
$errors = array();

$query = "UPDATE accounts SET balance = balance - ? WHERE number = ?";
$stmt = $pdo->prepare($query);
$successA = $stmt->execute(array($amount, $from));

$query = "UPDATE accounts SET balance = balance + :amount WHERE number = :to";
$stmt = $pdo->prepare($query);

$stmt->bindParam(':amount', $amount);
$stmt->bindParam(':to', $to);
$successB = $stmt->execute();
$errors[] = $stmt->errorInfo();

$query = "INSERT INTO movements 
                (account_from, account_to, amount, description, date) 
            VALUES (?, ?, ?, ?, NOW())";
$stmt = $pdo->prepare($query);
$successC = $stmt->execute(array($from, $to, $amount, $description));
$errors[] = $stmt->errorInfo();
if($successA && $successB && $successC){
    $pdo->commit();
    header('Location: index.php');
} else {
    print_r($errors);
    $pdo->rollback();
    exit('Transfer not done!');
}

?>