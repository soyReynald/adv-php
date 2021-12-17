<?php

require_once('app/models/User.php');
class Account extends Controller
{
    public function index()
    {
        $this->view('createAccount');
    }

    public function create()
    {

        // $this->view('createAccount');
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = new User(['name' => $name, 'username' => $username, 'email' => $email, 'password' => $password]);
        if ($user)
            $this->redirect('/');
        else
            $user->error;
    }

    public function activate($token)
    {

        $user = new User;

        if ($user->activate($token)) {
            echo '_ACCOUNT_ACTIVE_';
        } else {
            echo 'NO_TOKEN_FOUND';
        }
    }
}
