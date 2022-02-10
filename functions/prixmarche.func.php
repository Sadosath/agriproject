<?php

function get_prixmarche($prefec,$produit){
    global $db;
    $req = $db->query("SELECT * FROM prefectures , marches,produits, commercialiser  WHERE prefectures.NOM_PREFEC='$prefec'
AND prefectures.ID_PREFEC=marches.ID_PREFEC AND marches.ID_MARCHE=commercialiser.ID_MARCHE AND commercialiser.ID_PRODUIT=produits.ID_PRODUIT and produits.NOM_PRODUIT like '$produit'");
    $results = array();
    while($rows = $req->fetchObject()){
        $results[] = $rows;
    }
    return $results;
}
