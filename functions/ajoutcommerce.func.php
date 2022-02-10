<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 15/09/2019
 * Time: 02:53
 */
function commerce ($idmarche, $idproduit, $prix){
    global $db;
    $r = array ($idmarche, $idproduit, $prix);
    $sql = "INSERT INTO commercialiser (ID_MARCHE,ID_PRODUIT,PRIX) VALUES (?,?,?)";
    $req = $db->prepare($sql);
    $req->execute($r);

}