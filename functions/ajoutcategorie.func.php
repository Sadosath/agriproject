
<?php

function categorie($nomcategorie,$image){
    global $db;
    $r = array(
        'nomcategorie'=>$nomcategorie,
        'image'=>$image,
    );

    $sql = "INSERT INTO categorieproduit ( NOMCATEGORIE , IMAGE) VALUES(:nomcategorie,:image)";
    $req = $db->prepare($sql);
    $req->execute($r);
}

