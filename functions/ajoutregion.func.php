<?php

function region ($nomregion){
    global $db;
    $r = array('nomregion'=>$nomregion);
    $sql = "INSERT INTO regions (NomR) VALUES(:nomregion)";
    $req = $db->prepare($sql);
    $req->execute($r);

}

?>

