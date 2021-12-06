<?php

class Account extends Controller
{
    public function index()
    {
        $this->view('default');
    }

    public function create() {

        $this->view('createAccount');
    }

}

?>