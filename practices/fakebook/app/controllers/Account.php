<?php

require_once('app/models/User.php');
class Account extends Controller
{
    public function index()
    {
        $this->view('createAccount');
    }

    public function create() {
        
        // $this->view('createAccount');
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = new User($name, $username, $email, $password);
        if ($user) 
            $this->redirect('/');
        else 
            $user->error;

    }

}

?>