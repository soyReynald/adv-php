<?php

class Persona {
    protected $dpi;
    protected $nombre;
    protected $edad;

    function __construct(int $dpi, string $nombre, int $edad){
        $this->dpi = $dpi;
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function getDatosPersonales(){
        return $this->dpi . "<br/>" . $this->nombre . "<br/>" . $this->edad;
    }
}

class Cliente extends Persona {
    protected $credito;

    function __construct(int $dpi, string $nombre, int $edad){
        parent::__construct($dpi, $nombre, $edad);
    }

    public function setCredito($credito){
        return $this->credito = $credito;
    }

    public function getCredito():float{
        return $this->credito;
    }
}


?>