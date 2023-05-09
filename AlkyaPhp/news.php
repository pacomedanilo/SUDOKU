<!DOCTYPE html>
<html>

<head>
    <title>Team Alkya</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <meta name="description" content="Ceci est notre portfolio, pour exposer notres travail, au monde entier !">
    <link rel="icon" type="image/x-icon" href="img/site-principal/Logo Colored PNG 1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="background container">
        <!--------------------Navbar----------------->
        <?php
        require_once "component/Navbar.php"
        ?>

        <!----------------- Format site (off a la fin) ---------------->

  

         <!----------------- Image + Tritre ---------------->
        <div class="row">
        <h2 class="col l12 m12 s12 center-align title-news ">Actualitées</h2>
        </div>
        <div class="row">
        <div>
            <a class="col l5 m5 s12 offset-l1 offset-m1" href="newspage.php"><img
                class="technologie reponsive-img" src="img/site-principal/Article.jpg" alt="" /></a>
            <a class="col l5 m5 s12" href="newspage.php"><img class="technologie reponsive-img"
                src="img/site-principal/Article.jpg" alt="" /></a>
            <a class="col l5 m5 s12 offset-l1 offset-m1" href="newspage.php"><img
                class="technologie reponsive-img" src="img/site-principal/Article.jpg" alt="" /></a>
            <a class="col l5 m5 s12" href="newspage.php"><img class="technologie reponsive-img"
                src="img/site-principal/Article.jpg" alt="" /></a>
            <a class="col l5 m5 s12 offset-l1 offset-m1" href="newspage.php"><img
                class="technologie reponsive-img" src="img/site-principal/Article.jpg" alt="" /></a>
            <a class="col l5 m5 s12" href="newspage.php"><img class="technologie reponsive-img"
                src="img/site-principal/Article.jpg" alt="" /></a>
        </div>
           
        </div>
        <ul class="pagination center-align">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>

        <!----------------- sponsor ---------------->
        <?php
        require_once "component/Sponsor.php"
        ?>

        <?php
        require_once "component/Footer.php"
        ?>

    </div>


  <!--JavaScript at end of body for optimized loading-->
    <script src="js/jquery.js"></script> 
    <script src="js/materialize.min.js"></script> 
    <script src="js/script.js"></script>
</body>

</html>