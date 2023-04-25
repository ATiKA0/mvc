<?php

Trait Database{
    private function connect(){
        $string = "mysql:hostname=".DBHOST.";dbname=".DBNAME."";
        return $con = new PDO($string,DBUSER,DBPASS);    
    }

    public function query($query, $data = []){
        $con = $this->connect();
        $statement = $con->prepare($query);

        $check = $statement->execute($data);
        if($check){
            $result = $statement->fetchAll(PDO::FETCH_OBJ);
            if(is_array($result) && count($result)){
                return $result;
            }
        }
        return false;
    }
}