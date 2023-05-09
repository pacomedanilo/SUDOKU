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
    <div class=" background container">
            <?php
            require_once "component/Navbar.php"
            ?>
        <!----------------- Image + Tritre ---------------->
        
        <div class="row">
            <div class="col l10 m10 s10 offset-l1 offset-m1 offset-s1 ">
            <div class="bordering">
                <img class="technologie" src="img/image 4.jpg" alt="" />
            </div>
            </div>
        </div>
        <h2 class="center-align" >La rentabilité de<br>l'esport</h2>

        <!-------------------- Information Actues ------------------------>
        <div class="container center-align">      
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Doloremque atque obcaecati cupiditate animi autem. Repellendus dolores 
                possimus eos sint minima, culpa praesentium, reprehenderit ducimus ipsam, 
                tempore tenetur atque doloribus. Impedit? Lorem ipsum dolor sit amet 
                consectetur adipisicing elit. Aspernatur laudantium dolore impedit maiores ea 
                delectus ipsa laborum beatae, similique commodi. Quam commodi similique 
                culpa earum facere odio aliquid aut accusamus? Lorem ipsum dolor, sit amet 
                consectetur adipisicing elit. Adipisci quae eos animi odit officiis eius 
                aliquam autem quisquam facere a voluptatem laudantium minima magnam earum 
                enim, error fugiat cupiditate laborum! Lorem ipsum dolor sit, amet 
                consectetur adipisicing elit. Ad temporibus placeat ipsam possimus sed? 
                Tempora explicabo illum reiciendis. Commodi tempore sint quaerat eligendi 
                autem ipsa minima quam ex veniam praesentium!  Lorem ipsum dolor sit amet 
                consectetur adipisicing elit. Eos, perspiciatis at. Ipsa quam alias illum 
                debitis nostrum. Harum vel molestiae ea aperiam rem itaque iusto magnam 
                possimus pariatur, similique blanditiis?
            </p>
        </div>
        <div class="col l4 m4 s12 offset-l2 offset-m2 paddi">
            <div class="bordering">
            <img class="Sponsors" src="../img/Sponsors.png" alt="" />
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