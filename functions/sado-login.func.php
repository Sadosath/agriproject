<?php

    function admin_exist($num,$password){
        global $db;
        $u = array(
            'num'=>$num,
            'password'=>$password
        );

        $sql = "SELECT * FROM administrateur WHERE NUMEROADMIN=:num AND PASSWORD=:password ";
        $req = $db->prepare($sql);
        $req->execute($u);
        $exist = $req->rowCount($sql);
        return $exist;

    }

    function user_exist($num,$password){
        global $db;
        $u = array(
            'num'=>$num,
            'password'=>$password
        );
        $sql = "SELECT * FROM agent WHERE NUMERO=:num AND PASSWORD_AGENT=:password ";
        $req = $db->prepare($sql);
        $req->execute($u);
        $exist = $req->rowCount($sql);
        return $exist;
    }
