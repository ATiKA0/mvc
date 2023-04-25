<?php
class Login extends Controller{

    public function index($a = "", $b = "", $c =""){

        $data = [];
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $user=new User;
            $arr['email'] = $_POST['email'];
            $row = $user->first($arr);
            if($row){
                if($row->passwd === $_POST['passwd']){
                    $_SESSION['USER'] = $row;
                    redirect('home');    
                }
            }

            $user->errors['email'] = "Wrong email or password";

            $data['errors'] = $user->errors;
        }
        
        $this->view('login', $data);
    }
}