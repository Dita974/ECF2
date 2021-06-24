
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
    <link rel="shortcut icon" type="image/jpg" href="../assets/img/logo_carotte.png"/>
    <link rel="stylesheet" href="../assets/styles.css">
    <title>Online-Bio, page login</title>
</head>
<body>
    <!------------------------------------------------------HEADER---------------------------------------------------------->
    <header>
        <div class="logo">
            <a href="index.php">
                <img src="../assets/img/logo_carotte.png" class="logo_img" alt="Logo d'Online-Bio, la ferme écologique">
            </a>
        </div> 
        <div class="header_nav">
        <?php
        include '../nav.php';
        ?>
            <div class="h1_ml">
            <p id="h1_ml">Se connecter</p>
            </div>
        </div>
    </header>
    <div class="header_chevron">
        <p>Connectez-vous ici !</p>
        <a href="#login_form"><img src="../assets/img/Icon ionic-ios-arrow-down.png" alt=""/></a>
    </div> 
    <!-------------------------------------------------------MAIN----------------------------------------------------------->
        <main>
            <section id="login_form">
                <div>
                    <h2 class="connexion">Connectez-vous :</h2>

                    <form action="loginform.php" method="post">
                    <br><br>

                        <?php if(!isset($_SESSION['id'])): ?> 

                        <label for="pseudo">Votre pseudo</label>
                        <input class="login_input" type="text" name="pseudo" value="">

                        <label for="password">Votre mot de passe</label>
                        <input class="login_input" type="password" name="pwd" value="">

                        <br><br>
                        <button class="btn" type="submit">Se connecter</button>

                        <?php endif; ?>

                        <div class="msg">
                            <?php if(isset($_SESSION['user'])):
                                ?>
                                <a href="<?php header ('location:./crud/logout.php') ?>"><button class="btn">Se déconnecter</button></a>
                            <?php endif; ?>
                        </div>
                    </form>

                   <a href="../recettes.php"><button class="btn">Revenir aux recettes</button></a>
                </div>            
            </section>
            <div id="btn_inscription">
                <p> Pas encore inscrit ? </p>
                <a href="signup.php"><button class="btn">Par ici !</button></a>
                <br><br>
            </div>          
        </main>
        <br><br>
       <!---------------------------------------------------- FOOTER ----------------------------------------------------------->
       <?php
        include '../footer.php';
        ?>
   