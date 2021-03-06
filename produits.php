<?php
include 'functions/main-functions.php';
if (isLogged() == 0) { ?>
    <script >window.location.assign("sado-login.php")</script>
<?php }

$page = 'produits';

$pages_functions = scandir('functions/');

if(in_array($page.'.func.php',$pages_functions)){
    include 'functions/'.$page.'.func.php';
}
if(isset($_POST['produit'])){ ;
    $produit = $_POST['produit'];
    global $db;
    $u = array ('id'=>$produit);
    $sql="DELETE FROM produits WHERE produits.ID_PRODUIT =:id";
    $req = $db->prepare($sql);
    $req->execute($u);
}
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

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SB Admin <sup></sup></div>
        </a>
        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Mon compte</span></a>
        </li>

        <!-- Divider -->

        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Donn??es
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="agents.php" data-toggle="" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class=" fas fa-fw fa-users-cog"></i>
                Agents
            </a>

        </li>


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="marches.php" data-toggle="" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-home"></i>
                March??s
            </a>

        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="produits.php" data-toggle="" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-folder"></i>
                Produits
            </a>

        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">


        <!-- Nav Item - Pages Collapse Menu -->

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="utilisateurs.php" data-toggle="" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-users"></i>
                Abonn??s
            </a>

        </li>

        <hr class="sidebar-divider">


        <!-- Nav Item - Pages Collapse Menu -->

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="prefecture.php" data-toggle="" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-building"></i>
                Pr??fectures
            </a>

        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="categorie.php" data-toggle="" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-carrot"></i>
                Cat??gories de Produits
            </a>

        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="region.php" data-toggle="" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-carrot"></i>
                R??gion
            </a>

        </li>

        <!-- Nav Item - Tables -->
        <!-- Divider -->
        <div class="sidebar-heading">
            Quelques statistiques
        </div>


        <li class="nav-item active">
            <a class="nav-link" href="statistiques.php">
                <i class="fas fa-fw fa-table"></i>
                <span>Afficher</span></a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <a class="btn btn-primary" onclick=""; href="ajoutproduit.php" type="">Ajouter</a>

                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->


                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['nomadmin']?> <?= $_SESSION['prenomadmin'] ; ?></span>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profil
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Param??tres
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activit?? r??cente
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php" data-toggle="" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                D??connexion
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Produits </h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Donn??es</h6>


                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                <thead>
                                <tr>

                                    <th>Nom du produit</th>
                                    <th>Informations concernant le produit</th>
                                    <th>Image du produit</th>
                                    <th>Cat??gorie du produit</th>
                                    <th> Premi??re action </th>
                                    <th><i>  </i>Deuxi??me action</th>


                                </tr>
                                </thead>
                                <?php
                                $i = 1 ;
                                $results_per_page = 20;
                                $number_of_results = number_of_results();
                                $number_of_pages = ceil($number_of_results/$results_per_page);
                                if (!isset($_GET['page'])) {
                                    $pag = 1;
                                } else {
                                    $pag = $_GET['page'];
                                }
                                $this_page_first_result = ($pag-1)*$results_per_page;
                                foreach(get_produit($this_page_first_result , $results_per_page ) as $produit){

                                $id = $produit->ID_PRODUIT ;

                                ?>
                                <tbody>
                                <tr>
                                    <td> <?= $produit->NOM_PRODUIT  ?></td>
                                    <td> <?= $produit->INFO  ?></td>
                                    <td> <?php echo "<img style ='width : 300px' src='images/".($produit->IMAGE_PRODUIT)."'>"?></td>
                                    <td>   <?php
                                        global $db;
                                        $produit = $db ->query("select * FROM produits ,categorieproduit WHERE produits.IDCATEGORIE = categorieproduit.IDCATEGORIE");
                                        $row = $produit-> fetch();
                                        $nomproduit = $row['NOMCATEGORIE'];
                                        echo $nomproduit;
                                        ?></td>

                                    <td> <button class="-edit" href="" style="color : green"type="" name="">Modifier</button></td>

                                    <form action="#" method="post">

                                        <input type="hidden"  id="produit" name="produit" value="<?= $produit->ID_PRODUIT?>">

                                        <td> <button type="submit" style="color :red" OnClick="return confirm('Veuillez confirmer !!')"   >Supprimer</button></td>
                                    </form>
                                    <?php }
                                    ?>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2019</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">??</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="sado-login.php">Logout</a>
            </div>
        </div>
    </div>
</div>

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
