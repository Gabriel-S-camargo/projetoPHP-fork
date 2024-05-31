<?php 

class Login {

    use Controller;

    public function index(){
        
        $data = [];
        if($_SERVER['REQUEST_METHOD'] == "POST"){

            $user = new User;
            $arr['login'] = $_POST['login'];
            $login = $_POST['login'];

            $row = $user->first($arr);
            
            if($row){
                if($row->senha === $_POST['senha']){
                    $_SESSION['LOGIN'] = $row;
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $login;
                    redirect('dashboard');
                }
            }

            // print_r($_SESSION['LOGIN']);
                        
            $user->errors['login'] = "Login ou senha inváilo";
            // show($row);
            
            $data['errors'] = $user->errors;
        }

        $this->view('login', $data);
    }
}