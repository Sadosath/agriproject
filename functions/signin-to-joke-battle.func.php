<?php

    function user_exist($email,$password){
        global $db;
        $u = array(
            'email'=>$email,
            'password'=>$password
        );
        $sql = "SELECT * FROM user WHERE email=:email AND password=:password AND confirme = 1";
        $req = $db->prepare($sql);
        $req->execute($u);
        $exist = $req->rowCount($sql);
        return $exist;

    }
        function week_exist($week){
        global $db;
        $u = array(
            'week'=>$week
        );
        $sql = "SELECT * FROM week WHERE week=:week";
        $req = $db->prepare($sql);
        $req->execute($u);
        $exist = $req->rowCount($sql);
        return $exist;

    }
           function week_add(){
        global $db;
        $sql = "INSERT INTO week (week) VALUES (NULL)";
        $req = $db->prepare($sql);
        $req->execute();
    }
            function win_exist($win){
        global $db;
        $u = array(
            'win'=>$win
        );
        $sql = "SELECT * FROM last WHERE num_lweek=:win";
        $req = $db->prepare($sql);
        $req->execute($u);
        $exist = $req->rowCount($sql);
        return $exist;

    }
           function win_add($id , $win){
        global $db;
        $sql = "INSERT INTO last (id_ljokes, num_lweek) VALUES ('$id' , '$win')";
        $req = $db->prepare($sql);
        $req->execute();
    }
function get_jokes(){
        global $db;
        $req = $db->query("SELECT * FROM jokes , user  WHERE jokes.num_week =(SELECT week 
FROM week
ORDER BY week DESC 
limit 1,1) AND jokes.user_number = user.id ORDER BY jokes.like_count desc limit 3 ");
        $results = array();
        while($rows = $req->fetchObject()){
            $results[] = $rows;
        }
        return $results;
    }
    
