<?php
class Cuadrado{

    protected $ancho = 5;
    protected $alto = 5;


    private function getAncho($ancho){
        $this->ancho = $ancho;
    }

    private function getAlto($alto){
        $this->alto = $alto;
    }

    public function drawSquare($ancho, $alto){
        $this->ancho = $this->getAncho($ancho);
        $this->alto = $this->getAlto($alto);
        for ($i=0; $i < $ancho; $i++) { 
            echo " * ";
            for ($j=0; $j < $alto; $j++) { 
                echo " * ";
            }
            echo "<br/>";
        }
    }
}

?>

