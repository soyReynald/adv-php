<?php

class Model extends mysqli {

    protected $config;

    public function __construct(){

        $this->getConfig();

        parent::__construct(
            $this->config['server'],
            $this->config['user'],
            $this->config['password'],
            $this->config['database']
        );

        if(mysqli_connect_error()){

            die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error);

        }

    }

    public function clean($text){

        return $this->real_escape_string(strip_tags($text));

    }

    private function getConfig(){

        $this->config = json_decode(file_get_contents('app/config/database.json'), true);

    }

}

?>