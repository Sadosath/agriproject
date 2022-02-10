<?php
    include 'functions/main-functions.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agridiff</title>

    <!-- Custom fonts for this template -->
    <link href="startbootstrap-sb-admin-2-gh-pages/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="startbootstrap-sb-admin-2-gh-pages/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <title>togo-prefectures</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--Fireworks CS5 Dreamweaver CS5 target.  Created Fri Aug 23 11:09:26 GMT+0200 2019-->
    <link href="startbootstrap-sb-admin-2-gh-pages/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="startbootstrap-sb-admin-2-gh-pages/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"><title>togo-prefectures</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--Fireworks CS5 Dreamweaver CS5 target.  Created Fri Aug 23 11:09:26 GMT+0200 2019-->
    <link href="startbootstrap-sb-admin-2-gh-pages/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="startbootstrap-sb-admin-2-gh-pages/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<body bgcolor="#ffffff">
    <div CLASS="row">
        <div CLASS="col-md-4">
            <div CLASS="ROW">
                <?php

                $page = 'search';

                $pages_functions = scandir('functions/');

                if(in_array($page.'.func.php',$pages_functions)){
                    include 'functions/'.$page.'.func.php';
                }
                if(isset($_POST['produit'])){ ;
                $produit = $_POST['produit'];
                $prod = $_POST['produit'];
                global $db;
                foreach (get_produits($produit) as $produits ){
                    $id =$produits->ID_PRODUIT;
                }
                add_visit($id);
                ?>


                <br>
                <h2 style="text-align: center;color: #b30000">Les différents prix du produit : <?=$produits->NOM_PRODUIT?> </h2>
            </div>
            <div CLASS="ROW">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title"></div>
                    </div>
                    <div class="ibox-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Préfectures</th>
                                <th>Prix</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <?php
                                    foreach(get_pro($id) as $p)
                                {

                                ?>
                                    <tr>
                                <td><?=$p->NOM_PREFEC  ?></td>
                                <td><?=$p->pri  ?> francs CFA</td>

                                <?php
                                }
                                ?>


                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div CLASS="col-md-4">

                <img name="togoprefectures" src="togo-prefectures.jpg" width="488" height="1140" border="0" id="togoprefectures" usemap="#m_togoprefectures" alt="" />
                <map name="m_togoprefectures" id="m_togoprefectures">
                    <area shape="poly" coords="411,998,422,1003,422,1009,423,1013,426,1016,430,1018,435,1026,437,1029,440,1033,436,1036,441,1037,442,1045,443,1048,445,1054,444,1056,440,1056,435,1059,424,1062,416,1065,410,1066,408,1069,400,1071,388,1074,378,1077,370,1077,362,1080,362,1080,359,1079,359,1073,366,1067,373,1066,378,1068,385,1069,394,1068,400,1065,402,1057,403,1050,407,1043,409,1038,406,1031,403,1029,397,1020,393,1007,393,1005,394,1001,403,995,411,998" href="prixmarche.php?prefec=Lacs&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'Lacs';
                    foreach (get_products($id,$prefec) as $produit ){

                    }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri  ?> francs CFA"  alt="Lacs" />
                    <area shape="poly" coords="394,1009,399,1024,407,1035,401,1051,398,1063,394,1067,380,1069,366,1066,361,1055,355,1032,358,1024,369,1011,378,1004,390,1002" href="prixmarche.php?prefec=Vo&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'Vo';
                    foreach (get_products($id,$prefec) as $produit ){

                    }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri  ?> francs CFA"  alt="Vo" />
                    <area shape="poly" coords="360,1022,353,1023,343,1002,342,985,340,977,332,972,330,966,339,953,349,948,360,940,372,940,380,940,388,936,399,926,403,937,403,951,407,958,405,964,397,970,397,976,403,981,409,993,411,998,406,996,400,995,397,999,387,1002,379,1002,371,1005,364,1014,367,1011" href="prixmarche.php?prefec=Yoto&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'Yoto';
                    foreach (get_products($id,$prefec) as $produit ){

                    }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri  ?> francs CFA"  alt="Yoto" />
                    <area shape="poly" coords="247,993,256,1002,263,1013,262,1027,262,1041,258,1047,250,1040,239,1034,232,1029,227,1022,222,1014,222,1008,231,1002,237,999,247,993" href="prixmarche.php?prefec=Avé&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'Avé';
                    foreach (get_products($id,$prefec) as $produit ){

                    }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri  ?> francs CFA"  alt="Avé" />
                    <area shape="poly" coords="261,944,271,945,282,945,296,944,305,949,314,955,320,962,328,964,329,969,332,971,339,978,341,981,341,989,341,1003,351,1022,356,1029,355,1041,362,1064,359,1072,350,1072,334,1069,328,1067,321,1061,310,1058,303,1057,299,1068,302,1082,298,1082,290,1074,283,1066,279,1050,271,1048,262,1046,258,1046,262,1042,262,1036,263,1028,264,1017,260,1009,254,999,249,994,243,991,248,988,252,983,255,973,257,966,257,957,257,953,261,944" href="prixmarche.php?prefec=Zio&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'ZIO';
                    foreach (get_products($id,$prefec) as $produit ){

                    }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri  ?> francs CFA"  alt="ZIO" />
                    <area shape="poly" coords="253,941,256,949,256,966,252,982,241,995,230,1003,222,1003,224,999,220,995,213,993,207,988,204,983,201,973,203,966,193,958,185,947,180,941,187,941,203,943,214,942,222,941,235,942,245,939,253,941" href="prixmarche.php?prefec=Danvi&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'Danyi';
                    foreach (get_products($id,$prefec) as $produit ){

                    }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri  ?> francs CFA"  alt="Danyi" />
                    <area shape="poly" coords="399,910,407,907,413,905,411,896,411,883,410,863,411,843,411,826,408,825,401,833,389,845,373,850,364,855,351,858,351,865,359,873,370,882,381,894,392,905" href="prixmarche.php?prefec=Moyen-Mono&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'Moyen-Mono';
                    foreach (get_products($id,$prefec) as $produit ){

                    }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri  ?> francs CFA"  alt="Moyen-Mono" />
                    <area shape="poly" coords="349,861,355,869,367,880,386,900,394,911,399,920,391,933,375,941,364,938,344,947,331,964,320,959,304,947,286,943,257,940,255,928,257,915,261,901,273,890,288,884,296,877,310,871,337,865,349,861" href="prixmarche.php?prefec=Haho&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'Haho';
                    foreach (get_products($id,$prefec) as $produit ){

                    }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri  ?> francs CFA"  alt="Haho" />
                    <area shape="poly" coords="200,872,196,895,195,905,186,910,178,915,181,923,188,927,179,939,183,942,193,942,205,942,221,941,236,940,252,938,256,938,256,929,256,916,260,904,260,894,249,886,236,877,222,874,210,870,207,870" href="prixmarche.php?prefec=Kloto&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'Kloto';
                    foreach (get_products($id,$prefec) as $produit ){

                    }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri  ?> francs CFA" alt="Kloto" />
                    <area shape="poly" coords="274,856,274,885,267,892,262,899,259,893,246,886,235,879,215,872,202,867,202,861,201,853,205,844,207,836,207,826,218,825,228,823,234,822,233,832,235,841,242,845,254,845,265,846,274,856" href="prixmarche.php?prefec=Agou&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'Agou';
                    foreach (get_products($id,$prefec) as $produit ){

                    }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri  ?> francs CFA"  alt="Agou" />
                    <area shape="poly" coords="411,749,409,761,410,782,414,796,409,823,397,838,376,848,352,857,318,868,287,883,278,886,276,874,275,856,297,843,304,828,306,810,306,788,311,770,312,759,319,762,344,757,368,757,385,749,395,744,401,739,411,736,411,743" href="prixmarche.php?prefec=Ogou&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'Ogou';
                    foreach (get_products($id,$prefec) as $produit ){

                    }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri  ?> francs CFA" alt="Ogou" />
                    <area shape="poly" coords="296,730,299,740,304,747,311,758,311,772,307,784,303,802,304,808,307,812,304,829,300,842,284,851,275,855,265,845,242,842,233,842,233,833,235,823,245,812,260,800,275,787,273,779,264,777,260,768,259,755,260,738,265,729,277,717,287,716,291,718,291,721" href="prixmarche.php?prefec=Amou&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'Amou';
                    foreach (get_products($id,$prefec) as $produit ){

                    }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri  ?> francs CFA" alt="Amou" />
                    <area shape="poly" coords="273,701,261,702,243,706,224,713,204,717,197,715,197,725,198,743,198,752,199,758,191,760,191,768,189,779,182,780,178,789,174,805,177,814,190,826,202,825,213,824,223,823,235,819,245,811,257,801,272,788,276,784,270,780,265,780,258,771,257,756,257,745,263,731,270,722,276,718,282,715,288,714,288,709,285,703,280,701" href="prixmarche.php?prefec=Wawa&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'Wawa';
                    foreach (get_products($id,$prefec) as $produit ){

                    }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri  ?> francs CFA"  alt="Wawa" />
                    <area shape="poly" coords="409,623,409,645,409,721,411,733,400,739,379,753,326,760,310,758,304,741,295,731,292,719,286,710,286,703,308,702,323,698,331,685,334,665,334,646,326,623,334,615,370,617,394,617,405,617" href="prixmarche.php?prefec=Est-Mono&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'Est-Mono';
                    foreach (get_products($id,$prefec) as $produit ){

                    }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri  ?>francs CFA"  alt="Est-Mono" />
                    <area shape="poly" coords="372,427,381,437,393,448,406,464,407,475,407,500,409,526,409,577,413,590,413,604,407,616,399,617,380,618,350,615,328,614,327,595,334,563,336,545,343,528,350,504,358,478,360,457,363,444,372,427" href="prixmarche.php?prefec=Tchamba&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'Tchamba';
                    foreach (get_products($id,$prefec) as $produit ){

                    }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri  ?> francs CFA"  alt="Tchamba" />
                    <area shape="poly" coords="184,512,172,524,162,531,153,531,150,540,155,552,169,572,191,586,206,606,216,628,191,656,197,709,206,716,220,713,237,707,270,701,305,702,327,692,333,661,328,622,328,597,332,568,321,545,299,539,274,517,256,495,244,480,230,475,213,482" href="prixmarche.php?prefec=sotouboua&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'Sotouboua';
                    foreach (get_products($id,$prefec) as $produit ){

                    }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri  ?> francs CFA"  alt="Sotouboua" />
                    <area shape="poly" coords="363,422,354,430,328,436,299,437,283,436,277,466,277,471,270,476,257,482,259,494,267,504,276,520,293,537,314,537,325,549,332,549,339,535,344,519,345,509,351,499,355,492,356,475,361,465,363,453,362,443,368,437,371,430,369,423" href="prixmarche.php?prefec=Tchaoudjo&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'Tchaoudjo';
                    foreach (get_products($id,$prefec) as $produit ){

                    }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri  ?> francs CFA"  alt="Tchaoudjo" />
                    <area shape="poly" coords="325,391,310,395,286,395,274,389,271,402,276,414,282,422,286,430,284,439,297,435,321,436,347,429,365,420,363,414,361,397,356,390,341,391" href="prixmarche.php?prefec=Assoli&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'Assoli';
                    foreach (get_products($id,$prefec) as $produit ){

                    }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri  ?> francs CFA"  alt="Assoli" />
                    <area shape="poly" coords="275,359,278,382,269,400,274,414,282,426,280,442,276,466,264,478,252,482,230,473,211,482,192,500,179,514,174,507,173,497,164,483,165,465,169,454,176,435,181,414,184,400,193,395,222,381,236,372,247,363,263,352" href="prixmarche.php?prefec=Bassar&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'Bassar';
                    foreach (get_products($id,$prefec) as $produit ){

                    }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri  ?> francs CFA"  alt="Bassar" />
                    <area shape="poly" coords="323,320,304,338,304,338,284,345,262,351,279,360,278,380,280,394,290,396,306,395,319,393,332,390,341,389,354,391,361,388,358,383,346,378,339,372,338,363,340,354,341,343,335,331,329,324" href="prixmarche.php?prefec=Kozah&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'Kozah';
                    foreach (get_products($id,$prefec) as $produit ){

                    }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri  ?> francs CFA"  alt="Kozah" />
                    <area shape="poly" coords="324,312,332,300,340,295,349,289,351,289,352,301,354,308,355,314,355,327,355,335,356,347,356,361,352,369,351,380,348,380,341,374,337,367,337,360,341,348,341,337,334,332,330,328,325,318" href="prixmarche.php?prefec=Binah&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'Binah';
                    foreach (get_products($id,$prefec) as $produit ){

                    }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri ?> francs CFA" alt=alt="Binah" />
                    <area shape="poly" coords="260,344,270,344,291,343,297,342,307,336,316,328,321,319,327,308,335,297,347,291,352,289,351,282,346,271,332,262,319,256,315,253,308,271,307,283,297,295,289,302,266,303,252,304,244,304,245,313,250,324,251,336,260,344" href="prixmarche.php?prefec=Doufelgou&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'Doufelgou';
                    foreach (get_products($id,$prefec) as $produit ){

                    }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri  ?> francs CFA" alt="alt=Doufelgou" />
                    <area shape="poly" coords="144,273,148,267,157,269,158,278,170,284,180,288,183,293,191,295,202,297,213,302,230,298,243,299,244,305,247,317,250,333,258,346,264,352,258,356,243,366,230,377,208,387,187,398,180,395,172,387,161,382,147,379,136,389,126,396,119,394,117,385,122,382,126,378,130,375,124,372,121,370,118,366,120,364,126,363,133,361,134,361,144,361,146,358,149,354,145,354,140,354,137,354,134,354,130,354,126,351,125,347,124,344,128,342,130,342,133,342,137,342,138,342,141,339,139,330,139,330,139,327,138,317,142,307,143,298,146,286,146,279" href="prixmarche.php?prefec=Dankpen&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'Dankpen';
                    foreach (get_products($id,$prefec) as $produit ){

                    }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri  ?> francs CFA"  alt="Dankpen" />
                    <area shape="poly" coords="278,227,273,234,262,234,246,236,232,235,221,255,212,282,210,297,217,304,224,303,232,295,243,299,251,301,268,302,283,299,294,300,301,286,307,275,315,256,311,250" href="prixmarche.php?prefec=Kéran&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'Keran';
                    foreach (get_products($id,$prefec) as $produit ){

                    }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri  ?> francs CFA" alt="Kéran" />
                    <area shape="poly" coords="236,146,237,121,224,125,204,132,180,138,156,146,139,152,97,165,110,187,118,186,124,186,132,191,136,200,140,209,149,208,147,237,144,249,148,256,155,261,159,271,169,280,180,285,186,295,202,295,210,291,228,235,249,232,275,229,275,226" href="prixmarche.php?prefec=Oti&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'Oti';
                    foreach (get_products($id,$prefec) as $produit ){

                    }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri  ?> francs CFA"  alt="Oti" />
                    <area shape="poly" coords="61,103,54,114,51,134,76,148,93,164,105,161,123,156,141,151,140,142,125,130,112,116,70,98" href="prixmarche.php?prefec=Oti&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'Tandjouaré';
                    foreach (get_products($id,$prefec) as $produit ){

                    }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri  ?> francs CFA"  alt="Tandjouaré" />
                    <area shape="poly" coords="203,61,218,62,251,59,259,65,255,85,251,102,238,116,217,123,185,137,172,137,173,103,174,75" href="prixmarche.php?prefec=Tandjouaré&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'Tone';
                    foreach (get_products($id,$prefec) as $produit ){

                    }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri  ?> francs CFA"  alt="Tone" />
                    <area shape="poly" coords="50,31,40,33,49,38,62,38,81,40,128,50,153,55,170,61,174,66" href="prixmarche.php?prefec=Tone&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'Kpendjal';
                    foreach (get_products($id,$prefec) as $produit ){

                    }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri   ?> francs CFA" alt="Préfecture de Kpendjal" />
                    <area shape="poly" coords="65,39,74,46,73,63,63,87,70,96,91,107,123,124,143,145,157,143,172,139,173,104,176,74,165,60,173,62,65,39" href="prixmarche.php?prefec=Kpendjal&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'Kpendjal';
                    foreach (get_products($id,$prefec) as $produit ){

                    }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri  ?> francs CFA"  alt="Préfecture de golfe" />
                    <b><area shape="poly" coords="346,1074,357,1073,358,1079,342,1087,332,1091,321,1095,320,1086,308,1081,302,1085,303,1065,305,1057,316,1060,323,1063" href="prixmarche.php?prefec=golfe&produit=<?php  echo $prod  ; ?>" target="_blank" title="<?php $prefec = 'Golfe';
                        foreach (get_products($id,$prefec) as $produit ){

                        }?> <?=$produits->NOM_PRODUIT?> est à <?= $produit->pri  ?> francs CFA"  alt="Golfe" /></b>
                </map>

                <?php
            }
            ?>


        </div>
        <div CLASS="col-md-4"></div>
    </div>
</body>
<!-- Bootstrap core JavaScript-->
<script src="startbootstrap-sb-admin-2-gh-pages/vendor/jquery/jquery.min.js"></script>
<script src="startbootstrap-sb-admin-2-gh-pages/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="startbootstrap-sb-admin-2-gh-pages/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="startbootstrap-sb-admin-2-gh-pages/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="startbootstrap-sb-admin-2-gh-pages/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="startbootstrap-sb-admin-2-gh-pages/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="startbootstrap-sb-admin-2-gh-pages/js/demo/datatables-demo.js"></script>

</body>

</html>


<?php
include 'functions/main-functions.php';

?>

