<?php
function get_utilisateurs(){
    global $db;
    $req = $db->query("SELECT * FROM utilisateur  ");
    $results = array();
    while($rows = $req->fetchObject()){
        $results[] = $rows;
    }
    return $results;
}
function number_of_results(){
    global $db;
    $req = $db->query("SELECT * FROM agent ");
    $number_of_results = $req->rowCount();
    return $number_of_results ;
}

