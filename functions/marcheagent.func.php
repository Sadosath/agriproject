<?php
function get_marcheagent(){
global $db;
$req = $db->query("SELECT * FROM marches , agent where marches.ID_PREFEC=agent.ID_PREFEC");
$results = array();
while($rows = $req->fetchObject()){
$results[] = $rows;
}
return $results;
}

function get_commerce($idprefec){
global $db;
$idprefec = $_SESSION['idprefec'] ;
    $req = $db->query("SELECT * FROM  marches ,agent , produits, commercialiser where marches.ID_PREFEC LIKE '$idprefec' and commercialiser.ID_PRODUIT=produits.ID_PRODUIT and commercialiser.ID_MARCHE=marches.ID_MARCHE and agent.ID_PREFEC like '$idprefec'");
$results = array();
while($rows = $req->fetchObject()){
$results[] = $rows;
}
return $results;
}

?>