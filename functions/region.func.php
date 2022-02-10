<?php

function get_region($this_page_first_result, $results_per_page){
    global $db;
    $req = $db->query("SELECT * FROM regions  limit {$this_page_first_result},{$results_per_page}");
    $results = array();
    while($rows = $req->fetchObject()){
        $results[] = $rows;
    }
    return $results;
}
function number_of_results(){
    global $db;
    $req = $db->query("SELECT * FROM regions ");
    $number_of_results = $req->rowCount();
    return $number_of_results ;
}