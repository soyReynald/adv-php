<?php

spl_autoload_register(function($className){

    require_once 'core/' . $className . '.php';

});

/*
require_once 'core/App.php';
require_once 'core/Controller.php';
require_once 'core/Model.php';
require_once 'core/Session.php';
*/
$app = new App;

?>