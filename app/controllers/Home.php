<?php 

class Home{

    use Controller;
    
    public function index(){
        
        // $user = new User;
        // $arr['login'] = 'pia';
        // $arr['senha'] = '1234';
        
        // $user->insert($arr);

        $this->view('home');
    }
}