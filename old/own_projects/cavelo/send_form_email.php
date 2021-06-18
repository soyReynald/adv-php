<?php

 $nombre = $_POST["nombre"];

 $correo = $_POST["correo"];

 $edad = $_POST["edad"];

 $fecha = $_POST["fecha"];

 $contenido = $_POST["contenido"];

 $para = "soyreynald@outlook.com";
 $asunto = "Nuevo Mensaje de $nombre";
 
 $mensaje = "

 Nombre del remitente: ".$nombre."
 Correo: ".$correo."
 Edad: ".$edad."
 Fecha: ".$fecha."
 Mensaje: ".$contenido."
 ";

 mail($para,$asunto,utf8_decode($mensaje));
 
 echo "<p><h2>Hemos recibido tu mensaje correctamente, pronto te contestaremos, gracias.</h2></p>";

?>