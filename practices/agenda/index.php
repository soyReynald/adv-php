<?php

$pattern = "/[0-9]{2}-[0-9]{4}/";

if(isset($_GET['month']) && preg_match($pattern, $_GET['month'])){
    $monthArr = explode('-', $_GET['month']);
    $month = $monthArr[0];
    $year = $monthArr[1];
}else{
    $month = date('m');
    $year = date('Y');
}



$firstDay = strtotime($year . '-'. $month . '-1');
// Necesito estudiar strtotime()
$monthName = date('F', $firstDay);
$firstWeekDay = date('w', $firstDay);

$monthDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);

if($month == 1){
    $prevMonth = 12;
    $prevYear = $year -1;
}else{
    $prevMonth = $month - 1;
    $prevYear = $year;
}

if($month == 12){
    $nextMonth = 1;
    $nextYear = $year + 1;
}else{
    $nextMonth = $month + 1;
    $nextYear = $year;
}

$prevMonthDays = cal_days_in_month(CAL_GREGORIAN, $prevMonth, $prevYear);
$startWeekDay = $monthDays - $firstWeekDay + 1;
$weekCount = 1;
$dayCount = 1;
$nextDay = 1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar - events</title>
    <style>
        @import url('css/bootstrap.css');
        @import url('css/fontello.css');
        @import url('css/bootstrap-datepicker.css');
        @import url('css/style.css');
    </style>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script>
        $(function(){

            $('.datepicker').datepicker({
                format: 'mm-yyyy',
                startView: 1,
                minViewMode: 1
            });

        });
    </script>
</head>
<body>
    <div class="container">
        <h3><i class="icon-calendar"></i>Calendar Events</h3>
        <!-- SELECT DATE FORM -->
        <div class="row">
            <div class="col-md-4">
                <form action="index.php" method="get" class="form-group">
                    <div class="input-group">
                        <input type="text" name="month" class="form-control datepicker">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary btn-sm">
                                <i class="icon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <h4 class="float-right"><?php echo $monthName." ". $year; ?></h4>
            </div>
        </div>

        <table class="table">
            <tr>
                <th>Sun</th>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
            </tr>
            <tr>
                <?php

                    while($firstWeekDay > 0){
                        echo '<td class="text-muted">' . $startWeekDay++ . '</td>';
                        $firstWeekDay--;
                        $weekCount++;
                    }
                    
                    while($dayCount <= $monthDays){
                        echo '<td>' . $dayCount++ . '</td>';
                        $weekCount++;

                        if($weekCount > 7){
                            echo '</tr><tr>';
                            $weekCount = 1;
                        }
                    }

                    while($weekCount > 1 && $weekCount <= 7){
                        echo '<td class="text-muted">' . $nextDay++ . '</td>';
                        $weekCount++;
                    }
                ?>
            </tr>
        </table>

    </div>
</body>
</html>