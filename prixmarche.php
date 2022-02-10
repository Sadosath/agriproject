<?php
include 'functions/main-functions.php';

$page = 'prixmarche';

$pages_functions = scandir('functions/');

if(in_array($page.'.func.php',$pages_functions)){
    include 'functions/'.$page.'.func.php';
}
?>
<!DOCTYPE html>
<html lang="fr">

<body>

 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-2 text-gray-800">Marchés </h1>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h4 class="m-0 font-weight-bold text-primary">Données</h4>


         </div>
         <div class="col-lg-3">
             <button type="submit" class="print " onclick="window.print();">Imprimer</button>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                     <thead>
                     <tr>

                         <th>Nom du marché</th>
                         <th>Lieu du marché</th>
                         <th>Informations sur le marché</th>
                         <th>Jours d'animation</th>
                         <th>Prix du produit</th>


                     </tr>
                     </thead>
                     <tbody>
                     <?php
                     $prefec= $_GET['prefec'];
                     $produit= $_GET['produit'];
                     global $db;
                     foreach (get_prixmarche($prefec,$produit) as $pri){ ?>
                     <tr>
                             <td style="text-align: center" ><?= $pri->NOM_MARCHE?><br><br></td>
                             <td style="text-align: center"><?= $pri->LIEU_MARCHE?></td>
                             <td style="text-align: center"><?= $pri->INFOS?></td>
                             <td style="text-align: center"><?= $pri->DATE_ANIMATION?><br><br></td>
                             <td style="text-align: center"><?= $pri->PRIX?> francs CFA</td>
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


</body>


</html>




