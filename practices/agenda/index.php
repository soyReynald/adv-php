<?php

require 'config/mysqli.php';

$sql = "SELECT * FROM categories";
$categories = array();
$query = $con->query($sql);
while($row = $query->fetch_object()){
    $categories[]= $row;
}

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
// Necesito estudiar cal_days_in_month()
$startWeekDay = $prevMonthDays - $firstWeekDay + 1;
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
    <script src="js/bootstrap.js"></script>
    <script>
        $(function(){

            $('.datepicker').datepicker({
                format: 'mm-yyyy',
                startView: 1,
                minViewMode: 1
            });

            $('.btn-dark').on('click', function(){
                $(".input-date").val($(this).data('date'));
                $("#modal").modal();
            })

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
                        echo '<td><button data-date="'.$year.'-'.$month.'-'.$dayCount.'" class="btn btn-sm btn-dark">' . $dayCount++ . '</button></td>';
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

    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="icon-calendar"></i> Add New Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <input type="text" name="date" class="form-control input-date" placeholder="Date">
                    </div>
                    <div class="form-group">
                        <input type="time" name="time" class="form-control" placeholder="Time">
                    </div>
                    <div class="form-group">
                        Category
                        <?php if(count($categories) > 0): ?>
                        <select name="category" class="form-control" id="">
                            <?php foreach ($categories as $category): ?>
                                <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?php else: ?>
                        <div class="alert alert-warning">No categories in database.</div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Event Name">
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
            </div>
        </div>
    </div>
</body>
</html>