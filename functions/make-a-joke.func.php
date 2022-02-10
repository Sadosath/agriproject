<?php

   function joke($joke, $userid, $week){
        global $db;
        $r = array(
            'joke'=>$joke,
            'userid'=>$userid,
            'week'=>$week
        );
        $sql = "INSERT INTO jokes(joke, date, user_number, num_week) VALUES(:joke,NOW(),:userid,:week)";
        $req = $db->prepare($sql);
        $req->execute($r);
    }
