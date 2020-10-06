<?php 

    # Setting up the variables

    $month = date('m');
    $year = date('Y');
    $monthDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    $date = strtotime($year . '-' . $month . '-01');
    $firstWeekDay = date('w', $date);
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
            <th colspan="7"><?php echo date('M Y', $date); ?></th>
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
        <tr>
            <?php
                # Empty spaces
                for($e = 1; $e <= $firstWeekDay; $e++){
                    echo "<td></td>";
                }
                $dayCount = $firstWeekDay;
                # Calendar days
                for($d = 1; $d <= $monthDays; $d++){
                    // Days off condition
                    $class = '';
                    if($dayCount == 0 || $dayCount == 6){
                        $class = ' class="text-danger"';
                    }
                    echo "<td $class>$d</td>";
                    if($dayCount == 6){
                    echo "</tr>";
                    $dayCount = 0;
                    }else{
                        $dayCount++;
                    }
                }
            ?>
        </tr>
    </table>
</body>
</html>