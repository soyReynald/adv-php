<?php

require 'pdo.php';

$query = "SELECT DATE_FORMAT(date, '%M %Y') AS month, SUM(amount) AS amount, SUM(profit) AS profit
            FROM sales
            GROUP BY month
            ORDER BY date";
$stmt = $pdo->prepare($query);

$stmt->execute() or die(implode(' >> ', $stmt->errorInfo()));

$sales = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type:application/ms-excel;charset=utf-8');
header('Content-Disposition:attachment;filename=sheet.xls');

$header = false;
$startRow = 2;
$endRow = $stmt->rowCount() + 1;

?>
<?php if($stmt->rowCount() > 0): ?>
<table border="2">
    <?php foreach($sales as $sale): ?>
        <?php if(!$header): ?>
    <tr>
        <th><?= implode('</th><th>', array_keys($sale)) ?></th>
        <?php $header = true; ?>
    </tr>
    <?php endif ?>
    <tr>
        <td><?= $sale['month'] ?></td>
        <td><?= $sale['amount'] ?></td>
        <td><?= $sale['profit'] ?></td>
    </tr>
    <?php endforeach ?>
    <tr>
        <th>Total</th>
        <td colspan="2"><?= "=SUM(B$startRow:B$endRow)" ?></td>
        <td><?= "=SUM(C$startRow:C$endRow)" ?></td>
    </tr>   
</table>
<?php endif ?>