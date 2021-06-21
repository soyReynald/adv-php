/**
*@project Crea tu primer juego paso a paso con HTML5 y JavaScript
*@author <a href="mailto: cientificosdelsoftware@gmail.com">Reynald Ramirez</a>
**/
function escribir(op){
	//Aquí pondremos la opción del usuario en su respectivo campo.
	document.getElementById('eleccion').innerHTML = op;
	//Variable matematica para obtener el numero aleatorio
	var maq = Math.floor(Math.random(2 - 0 +1)*5);
	//Cambiamos la opcion numerica a strings
	if(maq == 0){
		maq = "Piedra";
	}else if(maq == 1){
		maq = "Papel";
	}else if(maq == 2){
		maq = "Tijera";
	}else if(maq == 3){
		maq = "Lagarto";
	}else if(maq == 4){
		maq = "Spock";
	}
	//La opción de la máquina
	document.getElementById('maq-eleccion').innerHTML = maq;
	//Condicionales para obtener el resultado del juego

/**Reglas de Piedra Papel Tijera Lagarto Spock

*Las tijeras cortan el papel, el papel cubre a la piedra, la piedra aplasta al lagarto, 
el lagarto envenena a Spock, Spock destroza las tijeras, las tijeras decapitan al 
lagarto,el lagarto se come el papel, el papel refuta a Spock, 
Spock vaporiza la piedra, y, como es habitual… la piedra aplasta las tijeras. *

**/


	if(maq == "Piedra"){

		if(op == 'Papel'){
			res('Ganaste!');
		}else if(op == 'Tijera'){
			res('Perdiste!');
		}else if(op == 'Lagarto'){
			res('Perdiste!');
		}else if(op == 'Spock'){
			res('Ganaste!');
		}

	}else if(maq == 'Papel'){

		if(op == 'Tijera'){
			res("Ganaste!");
		}else if(op == "Piedra"){
			res('Perdiste!');
		}else if(op == 'Lagarto'){
			res('Ganaste');
		}else if(op == 'Spock'){
			res('Perdiste!');
		}

	}else if(maq == 'Tijera'){

		if(op == 'Papel'){
			res('Perdiste!');
		}else if(op == 'Piedra'){
			res('Ganaste!');
		}else if(op == 'Lagarto'){
			res('Perdiste!');
		}else if(op == 'Spock'){
			res('Ganaste!');
		}

	}else if(maq == 'Lagarto'){

		if(op == 'Spock'){
			res('Perdite!');
		}else if(op == 'Piedra'){
			res('Ganaste!');
		}else if(op == 'Papel'){
			res('Perdiste!');
		}else if(op == 'Tijera'){
			res('Ganaste!');
		}

	}else if(maq == 'Spock'){

		if(op == 'Piedra'){
			res('Perdite!');
		}else if(op == 'Papel'){
			res('Ganaste!');
		}else if(op == 'Tijera'){
			res('Perdiste!');
		}else if(op == 'Lagarto'){
			res('Ganaste!');
		}

	}

	if(maq == op){
		res('Empate!')
	}

	//Función para mostrar resultado
	function res(resultado){
		document.getElementById('res').innerHTML = resultado;
	}

}
