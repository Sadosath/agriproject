<?php
include 'functions/main-functions.php';
if (isLogged() == 0) { ?>
    <script >window.location.assign("sado-logi.php")</script>
<?php }

$page = 'sado';


$pages_functions = scandir('functions/');

if(in_array($page.'.func.php',$pages_functions)){
    include 'functions/'.$page.'.func.php';
}

?>


<!doctype html>
<html lang="fr">
<head>
    <script charset="UTF-8" src="//cdn.sendpulse.com/js/push/518595a8536a26ee35c7f06975653e09_1.js" async></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sado sath</title>
    <link rel="icon"
          type="image/jpg"
          href="https://dumbestjoke.com/css/lol.jpg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Begin emoji-picker Stylesheets -->

    <!-- End emoji-picker Stylesheets -->

    <link rel="stylesheet" href="css/sado.css"/>
    <link rel="stylesheet" href="css/anime.css"/>
    <script src="wow.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto:500,700,400' rel='stylesheet' type='text/css'>
</head>
<body ondblclick ="w3_close()">
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
    <button onclick="w3_close()" class="blb" style="width:25%;margin-left: 37%;">&times;</button><br/><br/>
    <div style="padding-left: 10%;" class="countholder">
        <form  action="search.php" method="Post">
            <input style="border-radius: 15px;width: 80%;background-color: rgba(0, 0, 0, 0.5);border:3px solid yellow;color: white;" type="text" placeholder="Search a user.." name="username">
            <div style="padding-left: 30%;"> <button style=" padding: 0px;margin: 0px;" class="blb" type="submit"><i style="color: white;bottom: 5px;" class="fa fa-search"></i></button></div>
        </form>
    </div><br/><br/>
    <a href="" class=" w3-button">ADMIN</a><br/><br/><br/>


    <?php
    if(isLogged() == 1){
        ?>
        <a href="prefecture.php" class=" w3-button">Prefectures</a><br/><br/><br/>
        <a href="" class=" w3-button">Agents</a><br/><br/><br/>
        <a href="" class=" w3-button">Marchés</a><br/><br/><br/>
        <a href="" class=" w3-button">Produits</a><br/><br/><br/>
        <a href="" class=" w3-button">Utilisateurs</a><br/><br/><br/>
        <?php

    }
    ?>

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


    <div class="w3-teal">
        <button class="blb wow rubberBand animated" data-wow-iteration="infinite" data-wow-duration="2s" onclick="w3_open()">☰</button>

        <div class="container2">

            <h1 class="header wow bounce animated">Admin page</h1>

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