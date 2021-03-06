<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incentivos de operario</title>
</head>
<body>
<?php  
    /*
    Entrada
        Produccion del dia Lunes (PL)
        Produccion del dia Martes (PMa)
        Produccion del dia Miercoles (PMi)
        Produccion del dia Jueves (PJ)
        Produccion del dia Viernes (PV)
    Intermedio
        Produccion Total (PT)
        Produccion Promedia (PP)
    Salida
        Mensaje (MSG)

    Inicio
        Leer PL
        Leer PMa
        Leer PMi
        Leer PJ
        Leer PV
        PT = (PL + PMa + PMi + PJ + PV)
        PP = PT / 5
        SI (PP >= 100) ENTONCES
            MSG = "Recibira Incentivos"
        SINO
            MSG = "No recibira Incentivos"
        FIN_SI
        Escribir MSG
    Fin
    */
    function calc_incentivo($pl, $pma, $pmi, $pj, $pv){
        $pt = $_POST[$pl] + $_POST[$pma] + $_POST[$pmi] + $_POST[$pj] + $_POST[$pv];
        $pp = $pt / 5;
        if($pp >= 100){
            $msg = "Recibir&aacute; incentivos";
        }else{
            $msg = "No recibir&aacute; incentivos";
        }
        echo $msg;
    }
    ?>
    <div class="ex">
        <h1>Algoritmo 1</h1>
        <p>Se tiene registrado la producción (unidades) logradas por un operario a 
        lo largo de la semana (lunes a viernes). Elabore un algoritmo que nos
        muestre o nos diga si el operario recibirá incentivos sabiendo que el 
        promedio de producción mínima es de 100 unidades.</p>
    </div>
    <form action="index.php" method="POST">
        <div class="form-group">
            <label for="">Produccion d&iacute;a Lunes</label>
            <input type="text" name="pl" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Produccion d&iacute;a Martes</label>
            <input type="text" name="pma" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Produccion d&iacute;a Miercoles</label>
            <input type="text" name="pmi" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Produccion d&iacute;a Jueves</label>
            <input type="text" name="pj" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Produccion d&iacute;a Viernes</label>
            <input type="text" name="pv"  class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Calcular">
        </div>
    </form>
    <?php
        /*
        Option 1
        if(@$_POST['submit']){
            calc_incentivo('pl', 'pma', 'pmi', 'pj', 'pv');
        }*/

        if(isset($_POST['submit'])){
            calc_incentivo('pl', 'pma', 'pmi', 'pj', 'pv');
        }
        
    ?>
</body>
</html>