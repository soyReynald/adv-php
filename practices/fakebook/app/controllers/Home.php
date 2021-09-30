<?php

// require 'app/models/ user.php';

class Home extends Controller {
    
    public function index(){
        // This is just sample purposes:
        $data = array(
                    'company'=>'Cientificos Del Software',
                    'web'=>'cientificosdelsoftware.com',
                    'address'=>'Los Rios, Santo Domingo'
                );

        $this->view('default', $data);
    }

}

?>