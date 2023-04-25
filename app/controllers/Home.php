<?php
class Home extends Controller{

    public function index($a = "", $b = "", $c =""){
        
        $data['username'] = empty($_SESSION['USER'])? 'User' :$_SESSION['USER']->email;
        $this->view('home',$data);
    }
}