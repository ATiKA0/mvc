<?php
class Home extends Controller{

    use Model;
    public function index($a = "", $b = "", $c =""){
        
        $arr['name'] = 'Csaba';
        $arr['age'] = 50;
        //$arr['id'] = 2;
        $result = $this->update(3, $arr);



        echo"This is the home ctonroller";
        $this->view('home');
    }
}