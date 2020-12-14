<?php

$month = date('m');
$year = date('Y');

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
                        <input type="text" class="form-control datepicker">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary btn-sm">
                                <i class="icon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <h4 class="float-right">March 2020</h4>
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
                <td></td>
                <td></td>
                <td>1</td>
                <td>2</td>
                <td>
                    <a href="#">3</a>
                    <small>
                        <span class="badge badge-dark float-right">2 events</span>
                        <ul>
                            <li><a href="#"><i class="icon-pencil"></i> Teaching</a></li>
                            <li><a href="#"><i class="icon-cog"></i> Reparations</a></li>
                        </ul>
                    </small>
                </td>
                <td>4</td>
                <td>5</td>
            </tr>
            <tr>
                <td>6</td>
                <td>7</td>
                <td>8</td>
                <td>9</td>
                <td>10</td>
                <td>11</td>
                <td>12</td>
            </tr>
        </table>

    </div>
</body>
</html>