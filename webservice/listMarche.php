<?php

$host="localhost";
$user="root";
$pass="";
$db="agri";

$con=mysqli_connect($host,$user,$pass,$db);

/**
 * Recursively convert to Utf8
 *
 * @param array|string $d
 * @return array|string
 **/
function convertToUtf8($d) {
    if (is_array($d)) {
        foreach ($d as $k => $v) {
            $d[$k] = convertToUtf8($v);
        }
    } else if (is_string ($d)) {
        return utf8_encode($d);
    }
    return $d;
}

$query="SELECT ID_MARCHE as ID_MARCHE,NOM_MARCHE as NOM_MARCHE,LIEU_MARCHE as LIEU_MARCHE FROM `marches` ;";
$result=mysqli_query($con,$query);
$response=array();

while($row=mysqli_fetch_array($result))
{
    array_push($response,array('ID_MARCHE'=>$row[0],'NOM_MARCHE'=>$row[1],'LIEU_MARCHE'=>$row[2]));
}
mysqli_close($con);
echo json_encode(convertToUtf8(array('marches'=>$response)));

