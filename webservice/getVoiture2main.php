	<?php

$host="localhost";
$user="root";
$pass="";
$db="voiture_db";

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
 
$query="SELECT Libelle as Libelle,Prix as Prix FROM `voiture2main` ;";
$result=mysqli_query($con,$query);
$response=array();

while($row=mysqli_fetch_array($result))
{
array_push($response,array('Libelle'=>$row[0],'Prix'=>$row[1]));
}
mysqli_close($con);
echo json_encode(convertToUtf8(array('voitures'=>$response)));

