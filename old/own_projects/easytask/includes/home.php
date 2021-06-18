<?php include("includes/header.php"); ?>
		 <div class="col-md-6 col-md-offset-6">
		
		 	<div class="registrationForm">
		 		<h1>Mi Perfil</h1>
				
		 		<div class="imgcontainer perfilImg">
	      			<img src="img_avatar.png" alt="Avatar" class="avatar">
	    			<div class="descriptionUser">
	    				<span><?php echo $_SESSION['user']; ?></span>
	    				<span>1ro Bachiller</span>
	    			</div>
	    		</div>

				<div class="introductionTxt">
					<h2>Área de chat</h2>

						<div id="contenedor" onload="ajax();">
							<div id="caja-chat">
								<div id="chat"></div>
							</div>

							<form method="POST" action="index.php?reg=1&user=<?php echo $_SESSION['user']; ?>">
								<input type="text" name="nombre" placeholder="Ingresa tu nombre" value="<?php echo $_SESSION['user']; ?>">			
								<textarea name="mensaje" placeholder="Ingresa tu mensaje" class="textAreaChat"></textarea>
								<input type="submit" name="enviar" value="Enviar" class="chatSendBtn">
							</form>

							<?php
							$servidor = "localhost";
							$usuario= "reynald";
							$password = "rey123*";
							$base_datos = "chatEasy";



							$conexion = new mysqli($servidor, $usuario, $password, $base_datos);


							?>
					</div>
				</div>

		 	</div>
		 	
		 </div>

	 </div>
	 
