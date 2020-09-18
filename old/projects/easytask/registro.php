<?php 

	$usuario = "reynald";
	$password = "rey123*";
	$servidor = "localhost";
	$basededatos = "easytask";
	
	
	$nombre_completo = $_POST["nombre"];
	$email = $_POST["email"];
	$password = $_POST["password"];

	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, "rey123*" ) or die ("No se ha podido conectar al servidor de Base de datos");


	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	

	// establecer y realizar consulta. guardamos en variable.
	$consulta = "INSERT INTO estudiantes ( nombre_completo, correo, password, fecha_ingreso ) VALUES ( '$nombre_completo', '$email', '$password', ". date("Y/m/d") ." )";
	

	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");


	//$result = mysqli_query($conexion, $consulta);

    //$count = mysqli_num_rows($result);

    if($resultado == 1){

        session_start(['cookie_lifetime' => 86400]);
        $_SESSION['user'] = $userName;
        $_SESSION['id'] = $userId;
        
        header("location: index.php?reg=1&user=$name");
        
    }

?>