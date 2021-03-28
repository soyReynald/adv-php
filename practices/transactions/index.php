<?php

require 'pdo.php';
require 'models/Account.php';
$accounts = getAccounts($pdo);
$movements = getMovements($pdo);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transactions</title>
    <style>
        @import url('css/bootstrap.min.css');
    </style>
</head>

<body>
    <div class="container">
        <h3>Transfer money</h3>
        <form action="transfer.php" method="post">
            <div class="form-group">
                <label for="from">From:</label>
                <select name="from" id="from" class="form-control">
                    <?php foreach ($accounts as $account) : ?>
                    <option value="<?= $account->number ?>"><?= $account->number . ' >> $' . $account->balance . ' >' . $account->type . '< ' . $account->name ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label for="to">From:</label>
                <select name="to" id="to" class="form-control">
                    <?php foreach ($accounts as $account) : ?>
                    <option value="<?= $account->number ?>"><?= $account->number . ' >> $' . $account->balance . ' >' . $account->type . '< ' . $account->name ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input name="amount" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-outline-success">Transfer</button>
        </form>
        <h3>Movements</h3>
        <table class="table table-striped">
            <tr>
                <th>id</th>
                <th>From</th>
                <th>To</th>
                <th>Amount</th>
                <th>Description</th>
                <th>Date</th>
            </tr>

            <?php foreach ($movements as $movement) : ?>
            <tr>
                <td><?= $movement->id ?></td>
                <td><?= $movement->account_from ?></td>
                <td><?= $movement->account_to ?></td>
                <td><?= $movement->amount ?></td>
                <td><?= $movement->description ?></td>
                <td><?= $movement->date ?></td>
            </tr>
            <?php endforeach ?>

        </table>
    </div>
</body>

</html> 