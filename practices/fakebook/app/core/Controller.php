<?php

    class Controller {
        
        public function view($viewFileName, $data = array()){
            
            extract($data);

            require_once('app/views/' . $viewFileName . '.php');

        }

    }

?>