<?php 
    
	$user = "reynald";
	$password = "rey123*";
	$servername = "localhost";
	$database = "easytask";

	$email = stripslashes($_POST["uname"]);
	$password = stripslashes($_POST["psw"]);

	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servername, $user, "rey123*" ) or die ("No se ha podido conectar al servidor de Base de datos");

	$con = mysqli_connect($servername, $user, 'rey123*');
	if(!mysqli_select_db($con, 'easytask')){
		echo 'Base de datos no seleccionada';
	}

	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $database ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

    $query = "SELECT * FROM estudiantes WHERE correo = '$email' and password= '$password'";
    
    $result = mysqli_query($con, $query);

    
    while($row = mysqli_fetch_assoc($result)){
        $userName =  $row["correo"];
        $userId = $row["id"];
        $name = $row["nombre_completo"];
        $curso = $row["curso"];
    }
    
    $count = mysqli_num_rows($result);
    
    if($count >= 1){
    	/*$seconds = 5 + time();
        setcookie(loggedin, date("F jS - g:i a"), $seconds);*/
        session_start();
        $_SESSION['user'] = $userName;
        $_SESSION['id'] = $userId;
        $_SESSION['name'] = $name;
        $_SESSION['curso'] = $curso;
        
        header("location: profile.php");    
    }
   	
   	mysqli_close($con);

/*	
	session_start();

	$_SESSION['user_id'] = 1;

	$db = new PDO('mysql:dbname=todo; host=localhost', 'root', 'root');

*/	
?>