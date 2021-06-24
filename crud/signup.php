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
    <title>Online-Bio, inscrivez-vous !</title>
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
            <p id="h1_ml">Inscription</p>
            </div>
        </div>
    </header>
    <div class="header_chevron">
        <p>Par ici l'inscription !</p>
        <a href="#signup_form"><img src="../assets/img/Icon ionic-ios-arrow-down.png" alt="accèder au formulaire d'inscription"/></a>
    </div>
    <!-------------------------------------------------------MAIN----------------------------------------------------------->
    <main>
        <div  id="signup_form">
            <h2 class="inscription">Inscrivez-vous :</h2>

            <form action="signupform.php" method="post">
                <br><br>

                <label for="pseudo">Pseudo</label>
                <input class="signup_input" type="text" name="pseudo" value="">

                <label for="password">Mot de passe</label>
                <input class="signup_input" type="password" name="pwd" value="">

                <br><br>
                <button class="btn" type="submit">S'inscrire</button>  
            </form>

            <a href="../recettes.php"><button class="btn">Revenir aux recettes</button></a>
        </div>
    </main>
    <br><br><br><br>
  <!---------------------------------------------------- FOOTER ----------------------------------------------------------->
    <?php
    include '../footer.php';
    ?>
