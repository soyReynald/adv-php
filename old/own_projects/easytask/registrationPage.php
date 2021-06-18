		<div class="col-md-6 col-md-offset-6">
			
		 	<div class="registrationForm">
		 		
		 		<h1>Registrate</h1>
				
		 		<form action="registro.php" method="post" class="form">
		 			
		 			<label for="nombre">
		 				Nombre Completo
		 			</label>
		 			
		 			<input type="text" name="nombre" placeholder="Ej: Jimmy" class="form-control completeName">
					
		 			<label for="email">
		 				Correo Electrónico
		 			</label>
		 			
		 			<input type="email" name="email" placeholder="Ej: jimmyneutron@cientificosdelsoftware.com" class="form-control completeEmail">
					
		 			<label for="curso">
		 				Curso
		 			</label>
		 			
		 			<input type="text" name="curso" placeholder="1ro de bachiller" class="form-control completeEmail">

					<label for="password">
		 				Password
		 			</label>

		 			<input type="password" name="password" class="form-control completePassword">
					
					<input type="submit" value="Enviar" class="btn btn-default btn-registration">

					<button class="btn btn-primary btn-registration btn-adm"><a href="/easytask/administration.php">Administrador</a></button>
		 		
		 		</form>

				<div class="introductionTxt">
					
					<h2>Haz tu tarea y comparte con tus compañeros en un mismo lugar!</h2>

					<p>Si aún no estas inscrito.
					¿A qué esperas?</p>
				
				</div>

		 	</div>
		 	
		</div>

	 </div>

	<!-- The Modal -->
	<div id="id01" class="modal">
	  
	  <span onclick="document.getElementById('id01').style.display='none'" 
	class="close" title="Close Modal">&times;</span>

	  <!-- Modal Content -->
	  <form class="modal-content animate" action="/action_page.php">
	    <div class="imgcontainer">
	      <img src="img_avatar.png" alt="Avatar" class="avatar">
	    </div>
	    
	    <div class="container">
	      <label for="uname"><b>Username</b></label>
	      <input type="text" placeholder="Enter Username" name="uname" required>

	      <label for="psw"><b>Password</b></label>
	      <input type="password" placeholder="Enter Password" name="psw" required>

	      <button type="submit">Login</button>
	      <label>
	        <input type="checkbox" checked="checked" name="remember"> Remember me
	      </label>
	    </div>

	    <div class="container" style="background-color:#f1f1f1">
	      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
	      <span class="psw">Forgot <a href="#">password?</a></span>
	    </div>
	  </form>
	
	</div>