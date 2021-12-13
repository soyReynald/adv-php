<?php

    class Controller {
        
        public function view($viewFileName, $data = array()){
            
            extract($data);

            require_once('app/views/' . $viewFileName . '.php');

        }

        public function redirect($view) {
            
            if($view === '/')
                header('Location: ' . App::basedir() . "/");
            else
                header('Location: ' . App::basedir() . "/" . $view);

        }

    }

?>