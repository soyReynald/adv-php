<?php

require_once('app/models/AccountModel.php');
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

        $user = new AccountModel;
        if ($user->create($name, $username, $email, $password)) {
            $this->redirect('/');
        } else {
            $user->error;
        }

    }

}

?>