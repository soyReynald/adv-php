<?php

class Errors {

    public static function checkMsg(){

        self::init();

        if(isset($_SESSION['msg']) and count($_SESSION['msg']) > 0){

            return true;

        } else {

            return false;

        }

    }

    public static function getMsg(){

        self::init();

        if(isset($_SESSION['msg'])){

            return $_SESSION['msg'];

        } else {

            return false;

        }

    }

    public static function setMsg($msg){

        self::init();

        if(!isset($_SESSION['msg'])){

            $_SESSION['msg'] = array();

        }

        array_push($_SESSION['msg'], $msg);

    }

    public static function deleteMsg(){

        self::init();

        unset($_SESSION['msg']);

    }

    static function init(){

        if(!isset($_SESSION)){

            session_start();

        }

    }

}
