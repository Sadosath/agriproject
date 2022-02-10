<?php
    include 'functions/main-functions.php';


        $page = 'sado-login';
    

    $pages_functions = scandir('functions/');

    if(in_array($page.'.func.php',$pages_functions)){
        include 'functions/'.$page.'.func.php';
    }

?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
        <title>sado SignIn</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Begin emoji-picker Stylesheets -->

    <!-- End emoji-picker Stylesheets -->
        <link rel="stylesheet" href="css/sado.css"/>
        <link rel="stylesheet" href="css/anime.css"/>
        <script src="wow.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Roboto:500,700,400' rel='stylesheet' type='text/css'>
    </head>
    <body >
    
   <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> 
          <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
 
    
</div>
<script type="text/javascript">
        wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
      </script>
<!-- Page Content -->

        <div class="container" style="overflow: auto;">
         
          
            <div class="container2">
<?php
    if(isLogged() == 1){?>
     <script > window.location.assign("prefecture.php");</script>
   <?php }
?>

<h1 class="header">Connexion</h1>

<?php

    if(isset($_POST['submit'])){
        $num = htmlspecialchars(trim($_POST['num']));
        $password = (htmlspecialchars(trim($_POST['password'])));

        if(admin_exist($num,$password) == 1){
           
           $_SESSION['admin'] = $num;
            global $db;


            $req=$db->query("select * from administrateur where NUMEROADMIN ='$num'");
            $row=$req->fetch();
           $_SESSION['idadmin'] = $row['ID_ADMIN'];

           ?>
     <script > window.location.assign("prefecture.php");</script>
   <?php
        }elseif(user_exist($num,$password) == 1){ 
          $_SESSION['utilisateur'] = $num; ?>
      <script > window.location.assign("page-user.php")
     </script> <?php   }
        else{
            $error_user_not_found = "Numéro ou mot de passe incorrect";
        }


    }

?>

<form method="post" id="logForm">

    <div class="field">
        <label class="field-label" for="email">Votre numéro</label>
        <input class="field-input" type="" name="num" id="num"/>
    </div>
<br>
    </br>
    <br>

    </br>
    <div>

    </div>
    <div class="field">
        <label class="field-label" for="password">Mot de passe</label>
        <input class="field-input" type="password" name="password" id="password"/>
    </div></br>
    <h4 style="color: red;">Mot de passe oublié ?  <a href="recover.php">Cliquez ici</a></h4>
    <p class="error"><?php echo (isset($error_user_not_found)) ? $error_user_not_found : ''; ?></p><br/><br/>
    <button type="submit" name="submit">Se connecter</button>

</form>
</div>
        </div>
        <script src="js/jquery.js"></script>
        <?php
            $pages_js = scandir('js/');
            if(in_array($page.'.func.js',$pages_js)){
                ?>
                   <script src="js/<?= $page ?>.func.js"></script> 
                <?php
            }

        ?>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Begin emoji-picker JavaScript -->
    <script src="push.js"></script>
    <script src="lib/js/config.js"></script>
    <script src="lib/js/util.js"></script>
    <!-- End emoji-picker JavaScript -->

    <script>
      // Google Analytics
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-49610253-3', 'auto');
      ga('send', 'pageview');
    </script>
    <script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
    </body>
</html>
<script>


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} 
</script>