<?php 

    # Setting up the variables

    $month = date('m');
    $year = date('Y');
    $monthDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    $date = strtotime($year . '-' . $month . '-01');
    $firsWeekDay = date('w', $date);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Calendar</title>
</head>
<body>
    <table class="table table-striped">
        <tr>
            <th colspan="7">Calendar</th>
        </tr>
        <tr>
            <th>Sun</th>
            <th>Mon</th>
            <th>Tue</th>
            <th>Wen</th>
            <th>Thu</th>
            <th>Fri</th>
            <th>Sat</th>
        </tr>
    </table>
</body>
</html>