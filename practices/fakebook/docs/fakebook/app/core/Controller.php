<?php

class Controller {

    public function view($view, $data = []){

        require_once 'app/views/' . $view . '.php';

    }

    public function redirect($view){

        if($view === '/'){

            header('Location: ' . App::basedir() . '/');

        } else {

            header('Location: ' . App::basedir() . '/' . $view);
            
        }

    }

    public function back(){

        if(isset($_SERVER['HTTP_REFERER'])){

            header('Location: ' . $_SERVER['HTTP_REFERER']);

        } else {

            $this->redirect('/');

        }

        exit();

    }

}

?>