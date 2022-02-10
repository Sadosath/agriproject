<?php function redeem($email, $cash){
        global $db;
        $r = array('email' => $email ,
        'cash'=> $cash );
        $sql = "INSERT INTO redeem (email, cash) VALUES (:email, :cash)";
        $req = $db->prepare($sql);
        $req->execute($r);
    }
    function countzero($userid){
    	global $db;
        $r = $userid;
        $sql = " UPDATE user SET click = 0 , cash = 0 WHERE id = $r";
        $req = $db->prepare($sql);
        $req->execute();
    }
    ?>