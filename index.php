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
</body>
</html>