<?php
    function generatorPsw($number){
        $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*";
        $password = "";
        for ($i=0; $i < $number ; $i++) { 
            $randomPosition = rand(0 , strlen($characters)-1);
            $password .= $characters[$randomPosition];
        }
        $_SESSION["password"] = $password;
        return $password;
    }
?>
