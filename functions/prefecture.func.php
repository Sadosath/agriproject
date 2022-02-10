<?php

    function get_prefecture(){
             global $db;
        $req = $db->query("SELECT * FROM prefectures , regions WHERE prefectures.IdR=regions.IdR");
        $results = array();
        while($rows = $req->fetchObject()){
              $results[] = $rows;
        }
        return $results;
    }
    function number_of_results(){
         global $db;
        $req = $db->query("SELECT * FROM prefectures  ");
        $number_of_results = $req->rowCount();
        return $number_of_results ;
    }
function get_produit(){
    global $db;
    $req = $db->query("SELECT * FROM produits  ");
    $results = array();
    while($rows = $req->fetchObject()){
        $results[] = $rows;
    }
    return $results;
}
function number_of_resultss(){
    global $db;
    $req = $db->query("SELECT * FROM produits ");
    $number_of_resultss = $req->rowCount();
    return $number_of_resultss ;
}
    function nomprefec (){
          global $db;
      $req = $db ->query("select * FROM prefectures");
        $nomprefec = $req->rowCount();
          return $nomprefec ;
      }

    function allprefec (){
          global $db;
      $req = $db ->query("select * FROM prefectures");
          return $req ;
      }
