<?php

    function get_jokes($id){
        global $db;
        $req = $db->query("SELECT * FROM jokes , user WHERE jokes.user_number = user.id AND jokes.id_joke >= $id order by jokes.id_joke asc limit 10");
        $results = array();
        while($rows = $req->fetchObject()){
            $results[] = $rows;
        }
        return $results;
    }
     function ip_exist($ip, $pays){
        global $db;
        $u = array(
            'ip'=>$ip,
            'pays'=> $pays
        );
        $sql = "SELECT * FROM visit WHERE ip=:ip AND pays= :pays";
        $req = $db->prepare($sql);
        $req->execute($u);
        $exist = $req->rowCount($sql);
        return $exist;

    }
           function ip_add($ip, $pays){
        global $db;
        $sql = "INSERT INTO visit (ip, pays) VALUES ('$ip', '$pays')";
        $req = $db->prepare($sql);
        $req->execute();
    }

function getLocationInfoByIp(){
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = @$_SERVER['REMOTE_ADDR'];
    $result  = array('country'=>'', 'city'=>'');
    if(filter_var($client, FILTER_VALIDATE_IP)){
        $ip = $client;
    }elseif(filter_var($forward, FILTER_VALIDATE_IP)){
        $ip = $forward;
    }else{
        $ip = $remote;
    }
    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));    
    if($ip_data && $ip_data->geoplugin_countryName != null){
        $result['country'] = $ip_data->geoplugin_countryCode;
        $result['city'] = $ip_data->geoplugin_city;
    }
    return $result;
}