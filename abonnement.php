<?php
include 'functions/main-functions.php';
?>
<?php

$page = 'abonnement';


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

  <title>S'abonner</title>

  <!-- Custom fonts for this template-->
  <link href="startbootstrap-sb-admin-2-gh-pages/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background: url('imgg/bg.jpg');">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class=""></div>
          <div class="col-lg-17">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Création de votre compte d'abonnement!</h1>
              </div>
              <?php

              if(isset($_POST['utilisateur'])){ ;

              $nomutil = $_POST['nomutil'];
              $prenomutil = $_POST['prenomutil'];
              $mail = $_POST['mail'];
              $password = $_POST['password'];

              global $db;
              $u = array(

                  'mail'=>$mail,

              );
              $sql = "SELECT * FROM utilisateur WHERE MAIL=:mail";
              $req = $db->prepare($sql);
              $req->execute($u);
              $exist = $req->rowCount($sql);
                {

                }
              if ($exist==1){
                $erreur = " Ce mail est déjà abonné!!!";
                echo  '<font color = "red">'.$erreur. "</font>";
              }
              else
              {
              utilisateur ( $nomutil,$prenomutil,$mail,$password);?>
              <script> alert("Opération effectuée avec succès. Vous recevrez dès à présent des notifications à chaque opération");

              </script>
                <?php
              }

              }
              ?>


              <form  class="user" method="post" action="#">
                <div class="form-group row" style="text-align: center" >
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text"  class="form-control form-control-user" id="exampleFirstName" name="nomutil" placeholder="Nom de famille" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" name="prenomutil" placeholder="Prénom(s)" required>
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="mail"  required oncopy="return false" onpaste="return false" placeholder="mail@serveur.com">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" minlength="6"  placeholder="Mot de passe" required oncopy="return false" onpaste="return false" onkeyup="testPassword(this.value);" type="password" id="passWords">
                    <span id="Words"></span>
                  </div>
                  <br>
                  <div class="col-sm-6">

                  </div>

                </div>
                <div><button class="btn btn-primary" data-toggle="modal" name="utilisateur" style="color : white" type="submit" OnClick="return confirm('Veuillez confirmer !!')">Enregistrer votre abonnement</button>
                </div>
                <hr>

              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Mot de passe oublié?</a>
              </div>
              <div class="text-center">
                <a class="small" href="sado-login.php">Avez-vous déjà un compte ? Connexion!</a>
              </div>
            </div>
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
