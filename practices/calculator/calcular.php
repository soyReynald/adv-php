<?php
if(isset($_POST["calcular"])){
    $operacion = $_POST['operacion'];
    $numero1 = $_POST['num1'];
    $numero2 = $_POST['num2'];
    f_calcular($operacion, $numero1, $numero2);

}
function f_calcular($calculo, $numero1, $numero2){
    global $numero1, $numero2;
    if(!strcmp($calculo, "suma")){
        echo "El resultado es:". ($numero1 + $numero2);
    }
    elseif(!strcmp($calculo, "resta")){
        echo "El resultado es:". ($numero1 - $numero2);
    }
    elseif(!strcmp($calculo, "multiplicacion")){
        echo "El resultado es:". ($numero1 * $numero2);
    }
    elseif(!strcmp($calculo, "division")){
        echo "El resultado es:". ($numero1 / $numero2);
    }
    elseif(!strcmp($calculo, "modulo")){
        echo "El resultado es:". ($numero1 % $numero2);
    }
}


?>