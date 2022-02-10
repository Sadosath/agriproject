<?php

function produit ($idcategorie,$nomproduit,$info,$image){
    global $db;
    $r = array('idcategorie'=>$idcategorie,'nomproduit'=>$nomproduit, 'info'=>$info, 'image'=>$image);
    $sql = "INSERT INTO produits (IDCATEGORIE,NOM_PRODUIT,INFO,IMAGE_PRODUIT) VALUES(:idcategorie,:nomproduit,:info,:image)";
    $req = $db->prepare($sql);
    $req->execute($r);

}

?>

