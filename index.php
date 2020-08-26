<!DOCTYPE html>
<html>
<head>
    <meta name="lang" content="es">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP7 - reyoculto's guide</title>
    <style>
        span{
            font-weight: bold;
            display: block;
            width: 100%;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="code-block">
    <span>Comparison</span>
    <pre>
        var_dump(1 === 1);
    </pre>
    <?php echo var_dump(1 === 1); ?>
</div>
<div class="code-block">
    <span>Booleans</span>
    <pre>
        var_dump( boolval("1") );
    </pre>
    <?php echo var_dump( boolval("1") ); ?>
</div>
<div class="code-block">
    <span>Constantes</span>
    <pre>
        define("AUTOR", "Reynald Ramirez");
        echo "El nombre del autor es: ". AUTOR;
    </pre>
    <?php 
        define("AUTOR", "Reynald Ramirez");
        echo "El nombre del autor es: ". AUTOR;
    ?>
</div>
<div class="code-block">
    <span>Constantes con true (permite ser minuscula)</span>
    <pre>
        define("AUTOR", "Reynald", true);
        echo "El nombre del autor es: ". autor;
    </pre>
    <?php 
        define("AUTOR", "Reynald", true);
        echo "El nombre del autor es: ". autor;
    ?>
</div>
<div class="code-block">
    <span>Constantes predefinidas</span>
    <pre>
        echo "El nombre y ruta de este archivo es: ". __FILE__;
    </pre>
    <?php 
        echo "El nombre y ruta de este archivo es: ". __FILE__;
    ?>
</div>
<div class="code-block">
    <span>String comparison (===)</span>
    <pre>
        $operacion = "Suma";
        if(!strcmp("Suma", $operacion)){
            echo "Estamos listos para realizar una suma ";
        }
        
    </pre>
    <?php 
        $operacion = "Suma";
        if(!strcmp("Suma", $operacion)){
            echo "Estamos listos para realizar una suma ";
        }
    ?>
</div>
<div class="code-block">
    <span>String comparison (==)</span>
    <pre>
        $operacion = "SUMA";
        if(!strcasecmp("Suma", $operacion)){
            echo "Estamos listos para realizar una suma ";
        }
        // strcasecmp() & strcmp() returns 0 if true and 1 if false
    </pre>
    <?php 
        $operacion = "SUMA";
        if(!strcasecmp("Suma", $operacion)){
            echo "Estamos listos para realizar una suma de SUMA ";
        }
    ?>
</div>
</body>
</html>