 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <!-- CDN de font-awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/jpg" href="assets/img/logo_carotte.png" />
    <link rel="stylesheet" href="assets/styles.css">
    <title>Online-Bio, la ferme écologique</title>
</head>
<body>
    <!------------------------------------------------------HEADER---------------------------------------------------------->
    <header>
        <div class="logo">
            <a href="index.php">
                <img src="assets/img/logo_carotte.png" class="logo_img" alt="Logo d'Online-Bio, la ferme écologique">
            </a>
        </div>
        <div class="header_nav">
        <?php
        include 'nav.php';
        ?>        
            <div class="nav_paragraph">
                <h1>La ferme écologique</h1>
                <p>Au coeur de la région parisienne, venez découvrir notre sélection de fruits et légumes cultivés
                    fièrement par nos producteurs partenaires. <br> Une agriculture écologique, raisonnée et bio. 
                </p>
            </div>
        </div>
    </header>
    <div class="header_chevron">
        <p>Commencer la visite</p>
        <a href="#asideone"><img src="assets/img/Icon ionic-ios-arrow-down.png" alt="Cliquez ici pour revenir en haut du site OnlineBio"/></a>
    </div>
    <!------------------------------------------------------MAIN------------------------------------------------------------->
<main>
    <div id="prod">
    <div id="div-1"></div>
    <div id="div-2"></div>
    <div id="div-3"></div>
    <div id="div-4"></div>
    <div id="div-5"></div>
    </div>
    <div id="assiettes">
        <div class="assiette"></div>
        <div class="assiette"></div>                                              
    </div>
</main>
    
    <!---------------------------------------------------- FOOTER ----------------------------------------------------------->
    <?php
    include 'footer.php';
    ?>

