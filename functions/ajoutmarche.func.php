
<?php

/**
 * @param $idprefec
 * @param $nommarche
 * @param $lieumarche
 * @param $infomarche
 * @param $jours
 * @param $image
 */
function marche ($idprefec, $nommarche, $lieumarche, $infomarche, $jours, $image){
    global $db;
    $r = array ($idprefec, $nommarche, $lieumarche, $infomarche, $jours, $image);
    $sql = "INSERT INTO marches (ID_PREFEC,NOM_MARCHE,LIEU_MARCHE,INFOS,DATE_ANIMATION,IMAGE_MARCHE) VALUES (?,?,?,?,?,?)";
    $req = $db->prepare($sql);
    $req->execute($r);

}
