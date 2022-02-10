<?php
include 'functions/main-functions.php';

?>
<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Agridiff</title>

  <!-- Bootstrap core CSS -->
  <link href="vendorr/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="csss/business-casual.min.css" rel="stylesheet">

</head>

<body style="background: url('imgg/bg.jpg');background-repeat: no-repeat;">

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">La meilleure plateforme de consultation agricole au TOGO</span>
    <span class="site-heading-lower">Agridiff</span>
  </h1>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.php">Accueil
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="prefectureU.php">Préfectures</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="nbrevisite.php">Produits</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="abonnement.php">S'abonner</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <form action = "togo-prefectures.php" method = "post">
    <div class="input-group">
      <input class="form-control bg-light border-0 small" type = "text" name = "produit" placeholder="Rechercher un produit" aria-label="Search" aria-describedby="basic-addon2" required>
      <!--  <input type = "submit"  value="Rechercher" name="">-->
      <button class="btn btn-primary" data-toggle="modal" name="produits" style="color : white" type="submit" >
        <i class="fas fa-search fa-sm"></i>
      </button>
    </div>


  </form>

  <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="imgg/products-03.jpg" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Ou puis-je trouver ce produit?</span>
            <span class="section-heading-lower">A combien le vend on dans cette localité? </span>
          </h2>
          <p class="mb-3">Autant de questions auxquelles notre plateforme répondra.Ce sera un grand atout de savoir tout ce qui se passe dans le monde agricole du TOGO.
          </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="#">Visiter nous dès à présent!</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Notre promesse</span>
              <span class="section-heading-lower">Pour Vous</span>
            </h2>
            <p class="mb-0">Nous assurons qu'à travers ce site, nous vous permettrons d'etre informés en temps réel sur l'évolution des prix des produits agricoles.Et,ce n'est pas tout! Vous pourrez non seulement connaitre les marchés de votre préfecture mais également les différents prix des produits qui y sont attribués.
            Par des recherches approfondis sur notre site, vous pourrez avoir les informations nécessaires à la prise de décisions de votre entreprise par exemple.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Your Website 2019</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendorr/jquery/jquery.min.js"></script>
  <script src="vendorr/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
