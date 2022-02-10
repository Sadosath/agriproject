<?php

    function get_produits($produit){
        global $db;
        $req = $db->query("SELECT * FROM produits  WHERE  NOM_PRODUIT like '$produit'");
        $results = array();
        while($rows = $req->fetchObject()){
            $results[] = $rows;
        }
        return $results;
    }
function get_produi(){
        global $db;
        $req = $db->query("SELECT * FROM produits,categorieproduit where produits.IDCATEGORIE=categorieproduit.IDCATEGORIE ORDER BY Nbrevisite DESC");
        $results = array();
        while($rows = $req->fetchObject()){
            $results[] = $rows;
        }
        return $results;
    }
function add_visit($id){
        global $db;
        $req = $db->query("update produits SET Nbrevisite =Nbrevisite +1 WHERE  ID_PRODUIT= $id");
        $req->execute();
    }

     function number_of_results($produit){
         global $db;
        $req = $db->query("SELECT * FROM produits WHERE NOM_PRODUIT like '$produit'");
        $number_of_results = $req->rowCount();
        return $number_of_results ;
    }
    function get_products($id,$prefec){
        global $db;
        $req = $db->query("SELECT AVG(PRIX) as pri FROM commercialiser,prefectures,marches,produits WHERE commercialiser.ID_MARCHE = marches.ID_MARCHE AND commercialiser.ID_PRODUIT=produits.ID_PRODUIT AND marches.ID_PREFEC = prefectures.ID_PREFEC AND produits.ID_PRODUIT ='$id'AND prefectures.NOM_PREFEC like '$prefec' " );
        $results = array();
        while($rows = $req->fetchObject()){
            $results[] = $rows;
        }
        return $results;

    }
    function get_pro($id){
        global $db;
        $req = $db->query("SELECT NOM_PREFEC, AVG(PRIX) as pri FROM commercialiser,prefectures,marches,produits WHERE commercialiser.ID_MARCHE = marches.ID_MARCHE AND commercialiser.ID_PRODUIT=produits.ID_PRODUIT AND marches.ID_PREFEC = prefectures.ID_PREFEC AND produits.ID_PRODUIT ='$id' GROUP BY NOM_PREFEC ORDER BY pri ASC " );
        $results = array();
        while($rows = $req->fetchObject()){
            $results[] = $rows;
        }
        return $results;
    }
 function get_prefe(){
        global $db;
        $req = $db->query("SELECT AVG(PRIX) as pro FROM commercialiser" );
        $results = array();
        while($rows = $req->fetchObject()){
            $results[] = $rows;
        }
        return $results;
    }


function pp(){
    global $db;
    $req=$db->query("select * from produits");
    $results = array();
    while($rows = $req->fetchObject()){
        $results[] = $rows;
    }
    return $results;
}
