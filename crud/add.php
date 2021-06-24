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
    <link rel="stylesheet" href="../assets/styles.css">
    <title>Online-Bio, ajouter une recette</title>
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
            include '../nav.php';
            ?>        
                <div class="nav_paragraph">
                    <h1>Ajouter une recette ?</h1>
                </div>
            </div>
        </header>
        <!------------------------------------------------------MAIN------------------------------------------------------------->
<main>
    <div id="main_add">
        <h2 id="form">Ajouter une recette ici !</h2>

        <?php if(isset($_GET['status'])): ?>
        <div class="<?php echo $_GET['status'] ?>"><?php echo $_GET['status'] ?></div>
        <?php endif; ?>

        <form action="addform.php" method="post">
            <label for="nomRecette">Recette :</label>
            <input class="add_input" type="text" name="nomRecette" required><br>
            <label for="image">Image :</label>
            <input class="add_input" type="file" name="image" required><br>
            <label for="description">Description :</label>
            <input class="add_input" type="text" name="description"><br>
            <button class="btn" type="submit">Ajouter !</button>
            </form>

        <a href="../recettes.php"><button class="btn">Revenir aux recettes !</button></a>
    </div>
</main>
 <!---------------------------------------------------- FOOTER ----------------------------------------------------------->
 <?php
    include '../footer.php';
?>
   