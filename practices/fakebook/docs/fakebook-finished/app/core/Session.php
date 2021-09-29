<?php

class Session {

    public static function set($key, $value){

        self::init();

        $_SESSION[$key] = $value;

    }

    public static function get($key){

        self::init();

        if(isset($_SESSION[$key])){

            return $_SESSION[$key];

        } else {

            return false;

        }

    }

    public static function destroy(){

        self::init();

        unset($_SESSION);

        session_destroy();

    }

    public static function getImage($id){

        self::init();

        if(file_exists('public/img/users/' . $id . '.jpg')){

            return App::basedir() . '/public/img/users/' . $id  . '.jpg';

        } else {

            return App::basedir() . '/public/img/users/no-img.jpg';

        }

    }

    private function init(){

        if(!isset($_SESSION)){

            session_start();
        
        }

    }

}

?>