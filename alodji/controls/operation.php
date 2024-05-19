<?php
    //fonction qui se charge de ce connecter à la base de donner
    function connectToDB(){
        $server="localhost";
        $user="root";
        $mdp="";
        $bdd="alodji";

        try {
            $connexion = new PDO("mysql:host=$server;dbname=$bdd",$user,$mdp);
            echo"connexion correcte!<br>";
        } catch (PDOException $e) {
            echo"Error <br>".$e->getMessage();
        }
        return $connexion;
    }
?>