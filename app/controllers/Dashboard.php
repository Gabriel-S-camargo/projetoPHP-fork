<?php 

class Dashboard{

    use Controller;

    public function index(){
        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
            header("Location: login");
            exit();
        }

        $this->view('dashboard');
    }
}