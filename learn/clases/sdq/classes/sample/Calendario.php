<?php

//namespace Fecha;

class Calendario {

	protected $mes;
	protected $ano;
	protected $otroMes;

	public function __construct($mes = 1, $ano = 1970, $otroMes = false){

		$this->mes = $mes;
		$this->ano = $ano;
		$this->otroMes = $otroMes;

	}

	public function dibujar(){

		$primerDia = strtotime($this->ano . '-' . $this->mes . '-01');
		$titulo = $this->traducirTitulo(Date('F', $primerDia));
		$diasBlancos = Date('w', $primerDia);

		$diasEnMes = cal_days_in_month(0, $this->mes, $this->ano);

		if($this->mes == 1){
			$mesAnterior = 12;
			$anoAnterior = $this->ano - 1;
		} else {
			$mesAnterior = $this->mes - 1;
			$anoAnterior = $this->ano;
		}

		$diasMesAnterior = cal_days_in_month(0, $mesAnterior, $anoAnterior);

		$diasAntes = $diasMesAnterior - $diasBlancos + 1;

		$calendario = '<table class="table table-striped">';
		$calendario .= '<tr><th colspan="7">' . $titulo . '</th></tr>';
		$calendario .= '<tr><th>Domingo</th><th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th><th>Sábado</th></tr><tr>';

		$diasSemana = 1;

		while($diasBlancos > 0){

			$calendario .= $this->otroMes ? '<td class="text-muted">' . $diasAntes . '</td>' : '<td></td>';
			$diasBlancos--;
			$diasSemana++;
			$diasAntes++;

		}

		$dia = 1;

		while($dia <= $diasEnMes){

			$calendario .= $diasSemana == 1 || $diasSemana == 7 ? '<td class="text-danger">' . $dia . '</td>' : '<td>' . $dia . '</td>';
			$dia++;
			$diasSemana++;

			if($diasSemana > 7){
				$calendario .= '</tr><tr>';
				$diasSemana = 1;
			}

		}

		$proximosDias = 1;

		while ($diasSemana > 1 and $diasSemana <= 7) {

        	$calendario .= $this->otroMes ? '<td class="text-muted">' . $proximosDias . '</td>' : '<td></td>';
        	$diasSemana++;
        	$proximosDias++;

    	}

		$calendario .= '</tr></table>';

		return $calendario;

	}

	public function aplicarMes($mes){

		$this->mes = $mes;

	}

	public function aplicarAno($ano){

		$this->ano = $ano;

	}

	public function mostrarOtrosDias($estado){

		$this->otroMes = $estado;

	}

	private function traducirTitulo($mes){

		$buscar = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		$reemplazar = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiember', 'Octubre', 'Noviembre', 'Diciembre'];

		return str_replace($buscar, $reemplazar,$mes);

	}

}

?>