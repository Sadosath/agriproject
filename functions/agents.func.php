<?php
function get_agents(){
    global $db;
    $req = $db->query("SELECT * FROM agent,administrateur,prefectures WHERE agent.ID_PREFEC=prefectures.ID_PREFEC ");
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
function nomprefec (){
    global $db;
    $req = $db ->query("select * FROM prefectures");
    $nomprefec = $req->rowCount();
    return $nomprefec ;
}

function agent($idprefec, $idadmin,$nomagent,$prenomagent,$numero,$password,$sexe){
    global $db;
    $r = array(
        'idprefec'=>$idprefec,
        'idadmin'=>$idadmin,
        'nomagent'=>$nomagent,
        'prenomagent'=>$prenomagent,
        'numero'=>$numero,
        'password'=>$password,
        'sexe'=>$sexe,

    );
$sql=$db ->query("DELETE FROM agent WHERE ID_AGENT=agents");
$req = $db->prepare($sql);
$req->execute($r);
    }

function allprefec (){
    global $db;
    $req = $db ->exec("select * FROM prefectures");
    return $req ;
}
function delete_agents(){


}
