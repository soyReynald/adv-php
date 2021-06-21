<html>
<head>
  <title>Formulario de envio de correos</title>
</head>
<body>
<form action="send_email.php" method="post">
 <table width="400" border="0" cellspacing="0" cellpadding="0" align="center">
 <tr>
 <td>Nombre:</td>
 <td><input type="text" name="nombre" placeholder="Escribe Tu nombre" required></td>
 </tr>

<tr>
 <td>E-mail:</td>
 <td><input type="email" name="correo" placeholder="Aqui@tucorreo.com" required></td>
 </tr>

<tr>
 <td>Edad:</td>
 <td><input type="number" name="edad" max="100" min="0" placeholder="Escribe Tu Edad" required></td>
 </tr>
<tr>

<td>Fecha:</td>
 <td><input type="date" name="fecha" required></td>
 </tr>

<tr>
 <td>Su mensaje:</td>
 <td><textarea cols="17" rows="6" name="contenido" placeholder="Escribe Tu mensaje" required></textarea></td>
 </tr>

<tr>
 <td>&nbsp;</td>
 <td><input id="boton" type="submit" name="boton" value="Enviar mensaje"></td>
 </tr>

<tr>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 </tr>
 </table> 
</form>
</body>
</html>