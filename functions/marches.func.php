<?php
function get_marche($this_page_first_result, $results_per_page){
    global $db;
    $req = $db->query("SELECT * FROM marches,prefectures where prefectures.ID_PREFEC = marches.ID_PREFEC  limit {$this_page_first_result},{$results_per_page}");
    $results = array();
    while($rows = $req->fetchObject()){
        $results[] = $rows;
    }
    return $results;
}
function number_of_results(){
    global $db;
    $req = $db->query("SELECT * FROM marches,prefectures where prefectures.ID_PREFEC = marches.ID_PREFEC ");
    $number_of_results = $req->rowCount();
    return $number_of_results ;
}

function marcheprefec($sql,$param){
    global $db;
    $req = $db->prepare($sql);
    $req->execute($param);
    while($rows = $req->fetchObject()){
        $marche[] = $rows;
    }
    return $marche;
}