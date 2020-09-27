<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <title>Array_push() & json_encode()</title>
</head>
<body>
    <div class="ex container">
        <h1>Algoritmo 2</h1>
        <p>Se tiene una tabla en MySQL, se desea convertir los datos desde la tabla a un array y luego 
            a un JSON para ser leidos posteriormente por un archivo JavaScript</p>

        <form method="get">
        
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" id="usuario">

            <br/>
            <input type="button" value="Enviar" onclick="leer(document.getElementById('usuario').value)">
        </form>

        <table>
            <tbody>
                
            </tbody>
        </table>

    </div>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>