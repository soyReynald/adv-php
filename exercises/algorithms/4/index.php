<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding characters to a string</title>
</head>
<body>
    <h1>Write a PHP program to create a new string where 'if' is added to the front of a given string. If the string already begins with 'if', return the string unchanged</h1>
    <?php
        function addString($s){
            /*if(substr("abcdef", 2) == 'if'){

            }*/
            return substr($s, 0, 2) == "if" ? $s : "if ".$s;
        }

        echo addString("if the proven methodology works, then ...");
        echo "<br/>";
        echo addString("nothing seems to be working, then the result given could end up being null");
    ?>
</body>
</html>