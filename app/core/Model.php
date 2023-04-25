<?php

class Model{

    use Database;

    function test(){
        $query = "SELECT * FROM users";
        $result = $this->query($query);
        show($result);
    }
}