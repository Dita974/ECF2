
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
    <title>Online-Bio, les recettes</title>
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
                    <h1>En quête d'inspiration ?</h1>
                    <p>Venez vite découvrir nos recettes, pour régaler toute la famille, de la grand-mère au petit dernier ! </p>
                </div>
            </div>
        </header>
        <div class="header_chevron">
            <p>Par ici les idées recettes !</p>
            <a href="#titre-section"><img src="assets/img/Icon ionic-ios-arrow-down.png" alt="Cliquez ici pour revenir en haut du site OnlineBio"/></a>
        </div>
        <!------------------------------------------------------MAIN------------------------------------------------------------->
       
         <?php
        require 'php/datamanager.php';
        $recipes = select_all_recipes();  
        $size = count($recipes); ?>

        <div id="welcome">
            <?php
            session_start();
            if(isset($_SESSION['user'])){
            ?>
            
            <h2>Bienvenue <?php echo $_SESSION['user']; ?> !</h2><br> <a href="./crud/logout.php" ><button class="btn">Déconnexion</button></a><br><br>
            <?php
            }else echo "<h2> Connectez-vous !</h2>";
            ?>
        </div>
        

        <main id="recettes">
            <section id="titre-section">
            <?php for($i=0;$i < $size; $i++): ?>           
                <a href="#"><div class="card">
                <?php foreach($recipes[$i] as $key => $value): ?>
                <?php if($key != 'image'): ?>
                <?php echo $value; ?>
                <?php else: ?>
                <img src="assets/img/<?php echo $value; ?>"><?php endif ?>   
                <?php endforeach; ?>
                </div></a>           
            <?php endfor; ?>
            </section> 

            
            <div>
                <?php                             
                 if(isset($_SESSION['user'])){
                ?>
                <section id="choice_btn">
                <div id="choice">
                    <a href="crud/add.php"><button class="btn">Ajouter une recette</button></a><br>
                    <a href="crud/update.php"><button class="btn">Modifier une recette</button></a><br>
                    <a href="crud/delete.php"><button class="btn">Supprimer une recette</button></a>
                </div>                
                <?php 
                }else{
                ?>
                <div id="btn_inscription">
                    <br><br>
                    <a href="./crud/login.php"><button class="btn">Se connecter</button></a>
                    <br><br>           
                    <a href="./crud/signup.php"><button class="btn">S'inscrire</button></a>
                </div>              
                <?php 
                } ?>       
            </div>
          
            <br><br><br><br>
        </section>
        </main>
       <!---------------------------------------------------- FOOTER ----------------------------------------------------------->
        <?php include 'footer.php';?>
  
