
<?php

function prefecture ($idregion,$nomprefec){
    global $db;
    $r = array('idregion'=>$idregion,'nomprefec'=>$nomprefec);
    $sql = "INSERT INTO prefectures (IdR,NOM_PREFEC) VALUES(:idregion,:nomprefec)";
    $req = $db->prepare($sql);
    $req->execute($r);

}

?>

