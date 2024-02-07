<?php
    function generatorPsw($array){
        $number = "0123456789";
        $alphabet ="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $token ="!@#$%&*";
        $characters = "";

        if($array["numeri"]){
            $characters .= $number ;
        }
        if ($array["lettere"]) {
            $characters .= $alphabet;
        }
        if($array["simboli"]){
            $characters .= $token ;
        }

        $password = "";

        for ($i=0; $i < $array["lunghezza"] ; $i++) { 
            if ($array["repeat"] == "repeat") {
                $randomPosition = rand(0 , strlen($characters)-1);
                $password .= $characters[$randomPosition];
            }
            else{
                $randomPosition = rand(0 , strlen($characters)-1);
                if(strpos($password,$characters[$randomPosition]) == false){
                    $password .= $characters[$randomPosition];
                }
                else{
                    $i--;
                }
            }
        }

        $_SESSION["password"] = $password;
        return $password;
    }
?>
