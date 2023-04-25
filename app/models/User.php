<?php

class User{
    
    use Model;

    protected $table = 'users';
    protected $allowedColomns = [
        'name',
        'age'
    ];


}