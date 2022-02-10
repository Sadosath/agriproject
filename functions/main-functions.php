<?php
    session_start();
    $dbhost = 'localhost';
    $dbname = 'agri';
    $dbuser = 'root';
    $dbpswd = '';

    try{
        $db = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpswd, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    }catch(PDOexception $e){
        die("An error occured while connecting to database");
    }


    function isLogged(){
        if(isset($_SESSION['admin'] )){
            $logged = 1;
        }elseif(isset($_SESSION['agent'] )){
           $logged = 1;
        }
        else{
            $logged = 0;
        }
        
        return $logged;
    }