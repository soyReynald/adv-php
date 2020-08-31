<?php
if(isset($_POST["calcular"])){
    $numero1 = $_POST['num1'];
    $numero2 = $_POST['num2'];
    $operacion = $_POST['operacion'];
    if(!strcmp($operacion, "suma")){
        echo $numero1 + $numero2;
    }
    elseif(!strcmp($operacion, "resta")){
        echo $numero1 - $numero2;
    }
    elseif(!strcmp($operacion, "multiplicacion")){
        echo $numero1 * $numero2;
    }
    elseif(!strcmp($operacion, "division")){
        echo $numero1 / $numero2;
    }
}


?>