<?php
class Home extends Controller{
    public function index($a = "", $b = "", $c =""){
        echo"This is the home ctonroller";
        $this->view('home');
    }
}