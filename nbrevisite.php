<?php
include 'functions/main-functions.php';

$page = 'search';

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
    <h1 class="h3 mb-2 text-gray-800">Le nombre de consultations par produit</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="row">
            <div class="col-md-3">
                <h4>Données</h4>
            </div>
            <div class="col-lg-9">

            </div>
            <div class="col-lg-3">
                <button type="submit" class="print " onclick="window.print();">Imprimer</button>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>
                    <tr>

                        <th>Nom du produit</th>
                        <th>Image du produit</th>
                        <th>Nombre de fois que le produit a été consulté</th>
                        <th>Catégorie du produit</th>


                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php
                        global $db;
                        foreach (get_produi() as $produits ){
                            $id =$produits->ID_PRODUIT;


                        ?>
                    <tbody>
                    <tr>
                        <td style="text-align: center"> <?= $produits->NOM_PRODUIT  ?></td>
                        <td style="text-align: center"> <?php echo "<img style ='width : 300px' src='images/".($produits->IMAGE_PRODUIT)."'>"?></td>
                        <td style="text-align: center"><?= $produits->Nbrevisite?></td>
                        <td style="text-align: center">   <?=$produits->NOMCATEGORIE
                            ?></td>

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




