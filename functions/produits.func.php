<?php
function get_produit($this_page_first_result, $results_per_page){
    global $db;
    $req = $db->query("SELECT * FROM produits  limit {$this_page_first_result},{$results_per_page}");
    $results = array();
    while($rows = $req->fetchObject()){
        $results[] = $rows;
    }
    return $results;
}
function number_of_results(){
    global $db;
    $req = $db->query("SELECT * FROM produits ");
    $number_of_results = $req->rowCount();
    return $number_of_results ;
}

function produitmarche($sql,$param){
    global $db;
    $req = $db->prepare($sql);
    $req->execute($param);
    while($rows = $req->fetchObject()){
        $produit[] = $rows;
    }
    return $produit;
}