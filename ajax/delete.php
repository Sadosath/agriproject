<?php

    include '../functions/main-functions.php';
    global $db;
    $uid = (int)$_POST['uid'];
    $pid = (int)$_POST['pid'];
    $sql1 = "DELETE FROM likes WHERE  id_jokes = ?";
    $req1 = $db->prepare($sql1);
    $req1->execute(array($pid ));
   /* $sql = "DELETE FROM jokes WHERE  id_joke = ?";
    $req = $db->prepare($sql);
    $req->execute(array($pid ));*/