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
    </head>

    <body>
        <div class="background container">
            
        <?php
        require_once "component/Navbar.php"
        ?>
            <div class="teams ">
                <div class="title-teams">
                    <h2>Nos équipes</h2>
                </div>
                <div class="row teams-group">
                    <div class="col s12 m6 teams-block">
                        <a href="teams_infos.php"><img class="responsive-img cover-teams" src="img/site-principal/teams/COVER LOL v2 1.jpg" alt=""></a> 
                        <img class="logo-jeux" src="img/site-principal/teams/League-of-Legends-Embleme 1.png" alt="">
                    </div>
                    <div class="col s12 m6 teams-block">
                        <a href=""><img class="responsive-img cover-teams" src="img/site-principal/teams/cover valorant  v2 1.jpg" alt=""></a>
                        <img class="logo-jeux" src="img/site-principal/teams/valorant-game-logo-icon-eps-10-gaming-streamer-vector-33193787 1.png" alt="">
                    </div>
                </div>
                <div class="row teams-group">
                    <div class="col s12 m6 teams-block">
                        <a href=""><img class="responsive-img cover-teams" src="img/site-principal/teams/cover team r6 v2 1.jpg" alt=""></a> 
                        <img class="logo-jeux" src="img/site-principal/teams/rainbow-six-siege-logo 1.png" alt="">
                    </div>
                    <div class="col s12 m6 teams-block">
                        <a href=""><img class="responsive-img cover-teams" src="img/site-principal/teams/RL cover 1.jpg" alt=""></a>
                        <img class="logo-jeux" src="img/site-principal/teams/logo rocket 1.png" alt="">
                    </div>
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