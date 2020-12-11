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
                <form action="">
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

    </div>
</body>
</html>