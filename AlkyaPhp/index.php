<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Team Alkya</title>
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

        <?php
        require_once "component/Navbar.php"
        ?>

        <div class="first-title center-align">
            <h1>Alkya</h1>
        </div>
        <div class="container">
            <div class="presentation">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nisi quisquam Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, voluptatibus. Unde rerum recusandae ipsa eaque iste at dolore aliquam? Voluptatibus hic commodi placeat quos, excepturi magnam enim blanditiis veniam sit? voluptas nihil esse. Deleniti corrupti accusamus autem voluptas molestias assumenda rem ducimus! Quos, non sequi! Fugiat molestias ullam sed!</p>
            </div>
        </div>  

        <div class="rounded-image center-align">
            <div class="row">
                <img class="circle responsive-img" src="img/site-principal/Ellipse 3.png" alt="">
                <img class="circle responsive-img" src="img/site-principal/Ellipse 3.png" alt="">
                <img class="circle responsive-img" src="img/site-principal/Ellipse 3.png" alt="">
                <img class="circle responsive-img" src="img/site-principal/Ellipse 3.png" alt="">
            </div>
        </div>

        <div class="carousel-team center-align">
            <div class="title-carousel">
                <h2>Nos équipes</h2>
            </div>

            <div class="carousel carousel-slider center">
                <div class="carousel-fixed-item center">
                  <a class="btn waves-effect white grey-text darken-text-2">button</a>
                </div>
                <div class="carousel-item white-text" href="#one!">
                  <a href=""><img class="responsive-img" src="img/site-principal/image 2.png" alt=""></a>
                </div>
                <div class="carousel-item amber white-text" href="#two!">
                  <h2>Second Panel</h2>
                  <p class="white-text">This is your second panel</p>
                </div>
                <div class="carousel-item green white-text" href="#three!">
                  <h2>Third Panel</h2>
                  <p class="white-text">This is your third panel</p>
                </div>
                <div class="carousel-item blue white-text" href="#four!">
                  <h2>Fourth Panel</h2>
                  <p class="white-text">This is your fourth panel</p>
                </div>
            </div>
            
            <div class="second-title-carousel">
                <h3>Toutes nos équipes</h3>
            </div>    
        </div>

        <div class="news center-align">
            <div>
                <h2>Dernières actualitées</h2>
            </div>
            <div class="row">
                <a class="col s12 m6 " href=""><img class="responsive-img" src="img/site-principal/image 4.png" alt=""></a>        
                <a class="col s12 m6 " href=""><img class="responsive-img" src="img/site-principal/Article.png" alt=""></a>
                
            </div>
            <div>
                <a href=""><h3>En savoir plus</h3></a>
            </div>
        </div>

        <?php
        require_once "component/Sponsor.php"
        ?>

        <?php
        require_once "component/Footer.php"
        ?>

    </div>

    <script src="js/jquery.js"></script> 
    <script src="js/materialize.min.js"></script> 
    <script src="js/script.js"></script>
    </body>
    
</html>