<?php

class User{
    
    use Model;

    protected $table = 'users';
    protected $allowedColomns = [
        'email',
        'passwd',
    ];

    public function validate($data){
        $this->errors = [];

        if(empty($data['email'])){
            $this->errors['email'] = "Email is required";
        }else{
            if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
                $this->errors['email'] = "Email is not valid";
            }
        }

        if(empty($data['passwd'])){
            $this->errors['passwd'] = "Password is reuired";
        }

        if(empty($this->errors)){
            return true;
        }

        return false;
    }
}