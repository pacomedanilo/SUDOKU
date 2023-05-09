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

<body>
  <div class="background container">
    <?php
    require_once "component/Navbar.php"
    ?>
    <div class="row">
      <div class="col l12 m12 s12">
        <img class="technologie" src="../img/info_joueurs.png" alt="" />
      </div>
    </div>
    
    <div class="row">
      <div class="col s12 m12 l12">
          <div class="block_players col s12 l6 m12">
            <img class="Profil responsive-img" src="img/site-principal/player/f5a74ee9b9575195f6a09cdd98e19db3 1.jpg" alt="" />
            <img class="jgl hide-on-med-and-down responsive-img" src="img/site-principal/player/jungle logo 1.png" alt="" />
          </div>
          <div class="col s12 l6 m12 name-player">
            <h1>MARTIN "REKKLES" <br> LARSSON</h1>
            <h3>NE LE 20 SEPTEMBRE 1996</h3>
            <div>
              <h3>A &ensp; ALVAEN, SUEDE &ensp; <img class="drapeau" src="img/site-principal/player/sweden-flag-with-waving-effect-official-proportion_292608-2954 1.png" alt=""></h3>
            </div>
            <h3>TAILLE &emsp; 1M80</h3>
            <h3>POIDS &emsp; 75KG</h3>
            <h3>ARRIVEE AU CLUB &emsp; NOVEMBRE 2021</h3>
            <h3>JEU &emsp; LEAGUE OF LEGENDS</h3>
          </div>
        </div>
    </div>

    <div class="row ">
      <div class="carriere col s12 l12 m12">
        <ul class="collapsible">
          <li>
            <div class="collapsible-header col s12 l4 m4 offset-l6 offset-m6 ">CARRIERE DU JOUEUR</div>
            <div class="collapsible-body">
              <div class="carriere  col s12 l11 m11 offset-l1 offset-m1">
                <h2>"REKKLES"&ensp;<img class="drap" src="img/site-principal/player/sweden-flag-with-waving-effect-official-proportion_292608-2954 1.png" alt=""></h2>
                <div class="ddddd"></div>
                <h3>PARCOURS</h3>
              </div>
              <div class="col s12 l8 m8">
                <div class="col s12 l3 m4">
                  <img class="parcour col s12 l12 m12" src="img/site-principal/palyerinfo/G2_Esports_2015 1.png" alt="">
                  <p class="col s12 l12 m12">2015-2020</p>
                  </div>

                  <img class="hide-on-med-and-down col s12 l1 m1" src="img/site-principal/palyerinfo/Arrow 1.png" alt="">

                  <div class="col s12 l3 m4">
                  <img class="parcour col s12 l12 m12" src="img/site-principal/palyerinfo/Logo Colored PNG 2.png" alt="">
                  <p class="col s12 l12 m12">2020-2020</p>
                  </div>

                  <img class="hide-on-med-and-down col s12 l1 m1" src="img/site-principal/palyerinfo/Arrow 1.png" alt="">

                  <div class="col s12 l3 m4">
                  <img class="parcour col s12 l12 m12 " src="img/site-principal/palyerinfo/Logo Colored PNG 2.png" alt="">
                  <p class="col s12 l12 m12">2021</p>
                  </div>
              </div>
              <div class="col s12 l4 m4 ">
              <img class="Profil2" src="img/site-principal/palyerinfo/photo.jpg" alt="">
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>


    <div class="row divreseaux">
      <div>
        <div class="col s12 l12 m12 ">
          <h2 class="center-align">SES RESEAUX</h2>
          <div class="bar-nav"></div>
        </div>
          <a href=""><img class="reseau col s4 l1 m2 offset-l1 offset-m1 offset-s1 " src="img/site-principal/palyerinfo/2048px-Instagram_icon 1.png" alt="" /></a>
          <a href=""><img class="reseau col s4 l1 m2 offset-l2 offset-m1 offset-s1" src="img/site-principal/palyerinfo/logo-rond-twitter 1.png" alt="" /></a>
          <a href=""><img class="reseau col s4 l1 m2 offset-l2 offset-m1 offset-s1" src="img/site-principal/palyerinfo/twitch-512 1.png" alt="" /></a>
          <a href=""><img class="reseau col s4 l1 m2 offset-l2 offset-m1 offset-s1" src="img/site-principal/teams/League-of-Legends-Embleme 1.png" alt="" /></a>
        </div>

        <div class="boutique">
          <div class="col s12 l12 m12">
          <h2 class="center-align">BOUTIQUE</h2>
          <div class="bar-nav"></div>
          </div>
          <div class="col s12 l4 m4">
          <a href=""><img class="lien" src="img/site-principal/palyerinfo/ensemble alkya 1.png" alt="" /></a>
          </div>
          <div class="col s12 l4 m4">
          <a href=""><img class="lien" src="img/site-principal/palyerinfo/ensemble alkya 1.png" alt="" /></a>
          </div>
          <div class="col s12 l4 m4">
          <a href=""><img class="lien" src="img/site-principal/palyerinfo/ensemble alkya 1.png" alt="" /></a>
        </div>
      </div>
    </div>

        <!----------------- sponsor ---------------->
        <?php
        require_once "component/Sponsor.php"
        ?>

        <?php
        require_once "component/Footer.php"
        ?>

  <!----------------- Format site (on au debut) ---------------->

  </div>

  <!--JavaScript at end of body for optimized loading-->

  <script src="js/jquery.js"></script> 
    <script src="js/materialize.min.js"></script> 
    <script src="js/script.js"></script>
</body>

</html>