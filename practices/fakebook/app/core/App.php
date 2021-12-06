<?php

class App {
    private $controller = 'home';
    private $method = 'index';
    private $params = [];

    public function __construct(){
        $url = $this->parseUrl();

        if(isset($url) && file_exists('app/controllers/' . $url[0] . '.php')){
            $this->controller = $url[0];
            unset($url[0]);
        }
       
        require_once 'app/controllers/' . $this->controller . '.php';
       
        $this->controller = new $this->controller;
    
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                
                $this->method = $url[1];
                unset($url[1]);
        
            }
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);
        
    }

    private function parseUrl(){
        if(isset($_GET['url'])){
            return $url = explode('/', filter_var(rtrim($_GET['url']), FILTER_SANITIZE_URL));
        }
    }

    static function basedir() {
        $dir = explode('\\', dirname(__FILE__));

        if(strstr(dirname(__FILE__), '/'))
            $dir = explode('/', dirname(__FILE__));
        
        $basedir = "/" .  $dir[3] . "/" . $dir[4] . "/" . $dir[5]; //! This needs to be changed in production. This returns: /adv-php/practices/fakebook/

        return $basedir;
    }
}

?>