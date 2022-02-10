<?php

    function user_exist($email){
        global $db;
        $u = array(
            'email'=>$email
            
        );
        $sql = "SELECT * FROM user WHERE email=:email ";
        $req = $db->prepare($sql);
        $req->execute($u);
        $exist = $req->rowCount($sql);
        return $exist;

    }
    function randomString($length) {
    $str = "";
    $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
    $max = count($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $rand = mt_rand(0, $max);
        $str .= $characters[$rand];
    }
    return $str;
}