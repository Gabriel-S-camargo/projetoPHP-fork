<?php 

class Logout {

    use Controller;

    public function index(){
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        unset($_SESSION['loggedin']);
        session_destroy();

        $this->view('logout');
    }

}