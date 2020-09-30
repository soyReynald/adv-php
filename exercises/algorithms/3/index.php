<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madure algorithm</title>
</head>
<body>
    <h1>Write a PHP program to check two given integers, and return true if one of them is 30 or if their sum is 30.</h1>
    <?php
        function madure($int, $aux){
            
            return ($int + $aux) == 30 or ($int == 30) or ($aux == 30) ? true : false;
            
        }

        echo var_dump(madure(30, 0));
        echo "<br/>";
        echo var_dump(madure(10, 0));
        echo "<br/>";
        echo var_dump(madure(10, 20));
    ?>

</body>
</html>