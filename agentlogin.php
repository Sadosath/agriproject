<?php
include 'functions/main-functions.php';


$page = 'sado-login';


$pages_functions = scandir('functions/');

if(in_array($page.'.func.php',$pages_functions)){
    include 'functions/'.$page.'.func.php';
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

    <title>Connexion</title>

    <!-- Custom fonts for this template-->
    <link href="startbootstrap-sb-admin-2-gh-pages/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sado.css"/>
    <link rel="stylesheet" href="css/anime.css"/>
</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-8 col-lg-12 col-md-8">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="card-body p-0">
                            <div class="form-row">
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">BIENVENUE</h1>
                                        </div>
                                        <?php
                                        if(isLogged() == 1){?>
                                            <script > window.location.assign("commerce.php");</script>
                                        <?php }
                                        ?>

                                        <?php

                                        if(isset($_POST['submit'])){
                                            $num = htmlspecialchars(trim($_POST['num']));
                                            $password = (htmlspecialchars(trim($_POST['password'])));

                                            if(user_exist($num,$password) == 1){

                                                $_SESSION['agent'] = $num;
                                                global $db;
                                                $req=$db->query("select * from agent where NUMERO ='$num'");
                                                $row=$req->fetch();
                                                $_SESSION['idagent'] = $row['ID_AGENT'];
                                                $_SESSION['nomagent'] = $row['NOM_AGENT'];
                                                $_SESSION['prenomagent'] = $row['PRENOM_AGENT'];
                                                $_SESSION['idprefec'] = $row['ID_PREFEC'];

                                                ?>

                                                <script > window.location.assign("commerce.php");</script>

                                            <?php
                                            }
                                            elseif(user_exist($num,$password)==0) {
                                                $error_user_not_found = "Numéro et/ou mot de passe incorrect";
                                                echo  '<font color = "red">'.$error_user_not_found. "</font>";
                                            }


                                        }

                                        ?>
                                        <form class="user" method="post">

                                            <div class="form-group">
                                                <input type="" class="form-control form-control-user"  aria-describedby="emailHelp" name="num" id="num"  placeholder="Votre numéro" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user"  name="password" id="password"placeholder="Votre mot de passe" required>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                                    <label class="custom-control-label" for="customCheck">Me Rappeler</label>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit" name="submit">Se connecter</button>

                                            <hr>

                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="forgot-password.html">Mot de passe oublié?</a>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="register.html">Créer votre compte!</a>
                                        </div>
                                    </div></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
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

</body>

</html>
