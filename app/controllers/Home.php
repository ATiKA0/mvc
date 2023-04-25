<?php
class Home extends Controller{
    public function index($a = "", $b = "", $c =""){
        $model = new Model;
        $model->test();
        echo"This is the home ctonroller";
        $this->view('home');
    }
}