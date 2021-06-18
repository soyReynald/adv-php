<!DOCTYPE html>
<html>
<head>
	<title>Cavelo Velo App 1.0</title>
	<meta charset="utf-8">
	<meta name="description" content="Aplicación de gestión de clientes, productos y servicios del salón De Cavelo Velo Clínica">
	<link href="estilos.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript">
	var comp = 0;
	var tratamiento = "";
	function list_product(threatment, prod){
	//Declaramos variables necesarias
	var nombre = document.getElementById("nombre_txt").value;
	var apellido = document.getElementById("apellidos_txt").value;
	//var diagnostico = document.getElementById("diagnostico_txt").value;
	//Comprobamos el # de los elementos agregados
 	
	if(threatment == true){
	var ListElmt = document.getElementById("threatments-area").getElementsByTagName("li");
	var elementsNumb = ListElmt.length;
		if(elementsNumb != 8){ //Impedimos que se agregen más de 8 productos
			//Agregamos en la lista los elementos nuevos
			var ul = document.getElementById("threatments-area");
			var threatment = document.getElementById("tratamiento_txt").value;
		  	var li = document.createElement("li");
		  	li.appendChild(document.createTextNode(" "+(elementsNumb+1)+"- " + threatment));
		  	li.setAttribute("class", "threatmentItem"); // added line
		  	ul.appendChild(li);

		  	//Preparamos las variables a enviarse mediante php
		  	var ul_p = document.getElementsByClassName("threatments-area");
            var li_p = ul_p[0].getElementsByTagName('li');
            var array = new Array();
            for (var i = 0; i < li_p.length; i++) {
                array.push(li_p[i].innerText);
            }
            //Mostramos los resultados en el preview del cliente
            document.getElementById("threatment_proc").innerHTML = array;
            document.getElementById("proceso_trat").innerHTML = array;
            //document.getElementById("name").innerHTML = nombre + " " + apellido;

		}else{
			alert("No es posible agregar mas tratamientos.");
		}
	}

	if(prod == true){
	var ListElmt = document.getElementById("products-area").getElementsByTagName("li");
	var elementsNumb = ListElmt.length;
		if(elementsNumb != 8){ //Impedimos que se agregen más de 8 productos
			//Agregamos en la lista los elementos nuevos
			var ul = document.getElementById("products-area");
			var threatment = document.getElementById("productos_txt").value;
		  	var li = document.createElement("li");
		  	li.appendChild(document.createTextNode((elementsNumb+1)+"- " + threatment));
		  	li.setAttribute("class", "threatmentItem"); // added line
		  	ul.appendChild(li);

		  	//Preparamos las variables a enviarse mediante php
		  	var ul_p = document.getElementsByClassName("products-area");
	        var li_p = ul_p[0].getElementsByTagName('li');
	        var array = new Array();
	        for (var i = 0; i < li_p.length; i++) {
	            array.push(li_p[i].innerText);
	        }
	        //Mostramos los resultados en el preview del cliente
	        document.getElementById("products_taken").innerHTML = array;
	        document.getElementById("productos_tomados").innerHTML = array;
	        //document.getElementById("name").innerHTML = nombre + " " + apellido;

		}else{
			alert("No es posible agregar mas tratamientos.");
		}
	}
	}
	</script>
</head>
<body>
<main id="contain">
<?php include("includes/header.php") ?>
<section class="principal-body" id="principal-body">
	<section class="body-movement" id="body-movement">
		<header class="sec-head" id="sec-head">
			<h3 class="title-sec">Ingreso de Nuevo Cliente</h3>
            <div class="apart">
			<cite>
				Apartado en el cual se agrega el texto descriptivo de cada sección.<br/>
				Aquí se describe de qué trata cada apartado y cuáles puntos serán desarrollados
				en el mismo.
			</cite>
            </div>
			<span class="line">----</span>
		</header>
		<form action="comprobacion.php" method="post" class="formulario">
			<label for="nombre" class="nombre_completo">Nombre Completo:</label>
			<input type="text" name="nombre" class="info_txt" id="nombre_txt" placeholder="Juanita">

			<label for="apellidos" class="apellidos">Apellidos:</label>
			<input type="text" class="info_txt" id="apellidos_txt" name="apellido">
			
			<label for="diagnostico" class="diagnostico">Diagnóstico:</label>
			<select class="info_txt select_info" name="diagnostico" id="diagnostico_txt">
				<option value="Cabello con falta de elasticidad">Cabello con falta de elastecidad</option>
				<option value="Cabello maltratado y poroso - Cuticulas abiertas">Cabello maltratado y poroso (Cuticulas abiertas)</option>
				<option value="Falta de hidratacion">Falta de hidratación</option>
				<option value="Cabello muy reseco en la zona 3 y grasoso en zona 1">Cabello muy reseco en la zona 3 y grasoso en zona 1</option>
				<option value="Cuero cabelludo entaponado">Cuero cabelludo entaponado</option>
				<!-- <option value="Agregar un nuevo diagnostico">Agregar un nuevo diagnostico</option> -->
			</select>

			<label for="tratamiento" class="tratamiento">Tratamiento:</label>
			<select class="info_txt select_info" name="tratamiento" id="tratamiento_txt">
					<option value="Shampoo Desintoxicante Estimulante ($1,200) ">Shampoo Desintoxicante Estimulante ($1,200)</option>
					<option value="Shampoo Hidratante ($600) ">Shampoo Hidratante ($600)</option>
					<option value="Proteina Restructurante de Hebras ($1,200) ">Proteina Restructurante de Hebras ($1,200)</option>
					<option value="Acondicionador Neuturalizante ($800) ">Acondicionador Neuturalizante ($800)</option>
					<option value="Óleo protector y laceador ($800) ">Óleo protector y laceador ($800)</option>
					<option value="Gel moldeador ($500) ">Gel moldeador ($500)</option>
					<option value="Gotas Restauradoras ($500) ">Gotas Restauradoras ($500)</option>
					<option value="Botox Rejuvenecedor Capilar ($4,200) ">Botox Rejuvenecedor Capilar ($4,200)</option>
			</select>
			<textarea id="threatment_proc" rows="4" cols="50" name="tratamiento_sel"></textarea>
			<!-- <textarea id="proceso_trat" rows="4" cols="50" ></textarea> -->
			<br>
			<input type="button" onclick="list_product(true, false)" value="Agregar">

			
			<label for="proceso" class="proceso">Proceso:</label>
			<textarea name="proceso" id="proceso_area" class="proceso_area" rows="4" cols="50"></textarea>

			<label for="productos" class="productos">Productos Adquiridos:</label>
			<select name="productos" id="productos_txt" class = "info_txt select_info">
					<option value="Shampoo Desintoxicante Estimulante ($1,200) ">Shampoo Desintoxicante Estimulante ($1,200)</option>
					<option value="Shampoo Hidratante ($600) ">Shampoo Hidratante ($600)</option>
					<option value="Proteina Restructurante de Hebras ($1,200) ">Proteina Restructurante de Hebras ($1,200)</option>
					<option value="Acondicionador Neuturalizante ($800) ">Acondicionador Neuturalizante ($800)</option>
					<option value="Óleo protector y laceador ($800) ">Óleo protector y laceador ($800)</option>
					<option value="Gel moldeador ($500) ">Gel moldeador ($500)</option>
					<option value="Gotas Restauradoras ($500) ">Gotas Restauradoras ($500)</option>
					<option value="Botox Rejuvenecedor Capilar ($4,200) ">Botox Rejuvenecedor Capilar ($4,200)</option>
			</select>
			<!-- <textarea id="productos_tomados" name="productos" rows="4" cols="50"></textarea> -->
			<textarea id="products_taken" rows="4" cols="50" name="productos"></textarea>
			<input type="button" onclick="list_product(false, true)" class="add_item" value="Agregar">
			<br>
			<input type="submit" value="Ingresar" class="boton_last">
		</form>
		<div class="customer_profile">
			<span class="name" id="name"></span>

			<h3 class="profile_tits">Diagnostico:</h3>
			<span class="diagnostic" id="diagnostic"></span>

			<h3 class="profile_tits">Tratamiento:</h3>
			<!-- <textarea id="threatment_proc" rows="4" cols="50"></textarea> -->
			<ul id="threatments-area" class="threatments-area" name="tratamientos">
			<header>
				<h4>A aplicar:</h4>
			</header>
			</ul>
			
			<h3 class="profile_tits">Proceso:</h3>
			<textarea class="process" id="process" rows="4" cols="50"></textarea>

			<h3 class="profile_tits">Productos adquiridos:</h3>
			<!-- <textarea id="products_taken" rows="4" cols="50"></textarea> -->
			<ul id="products-area" class="products-area">
			<header>
				<h4>Productos:</h4>
			</header>
			</ul>
		</div>
	</section>
</section>
</main>
<script>
	//Realizamos los eventos de acuerdo a como el usuario vá ingresando en los campos
	document.getElementById("nombre_txt").addEventListener("focusout", name);
	document.getElementById("apellidos_txt").addEventListener("focusout", apellido);
	document.getElementById("diagnostico_txt").addEventListener("focusout", diagnostico);
	document.getElementById("proceso_area").addEventListener("focusout", proceso);
    //Detectamos si el usuario toca algun campo
    function name(){
		var name = document.getElementById("nombre_txt").value;
		document.getElementById("name").innerHTML = name;
	}

	function apellido(){
		var apellido = document.getElementById("apellidos_txt").value;
		document.getElementById("name").innerHTML += " "+apellido;
	}


	function diagnostico(){
		var diagnostico = document.getElementById("diagnostico_txt").value;
		document.getElementById("diagnostic").innerHTML = diagnostico;
	}

	function proceso(){
		var proceso = document.getElementById("proceso_area").value;
		document.getElementById("process").innerHTML = proceso;
	}
</script>
</body>
</html>