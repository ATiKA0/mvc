<?php
class Products extends Controller{
    public function index(){
        echo"This is the products ctonroller";
        $this->view('products');
    }
}