<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones en PHP 7</title>
</head>
<body>
    <?php
        function toUpper($frase, $conversion = true){
            if($conversion == true){
                return strToUpper($frase);
            }else{
                return $frase;
            }
        }

        echo toUpper("Practicando PHP en Aldereca", false);

        print("<br />");
        function increase(&$value){ 
            $value++;
            return $value; 
        }
        $number = 4;
        echo increase($number) . "<br/>";
        echo $number;
    ?>
</body>
</html>