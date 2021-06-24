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
    <title>Online-Bio, supprimer une recette</title>
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
                    <h1>Supprimer une recette ?</h1>
                </div>
            </div>
        </header>
        <!------------------------------------------------------MAIN------------------------------------------------------------->
<main>
    <div id="main_delete">
        <h2 id="form">Supprimer une recette !</h2>

        <?php
        require '../php/datamanager.php';
        $allrecipes = select_all_recipes();  
        $size = count($allrecipes); 
        ?>

        <form action="delete.php" method="get">
        <select name="select" value="id">
        <option value="">--Choisissez une recette !--</option>

        <?php 
        for($i=0;$i < $size; $i++): ?>
            <option value="<?php echo $allrecipes[$i]['id'];?>">
            <?php echo $allrecipes[$i]['nomRecette']; ?>
            </option>
        <?php endfor; ?>

            </select> 
            <input type="submit" value="select">
        </form>

        <?php 
        if (isset($_GET['select'])):
            $id = $_GET['select'];
            $recipe = select_recipe_by_id($id);
        ?>

        <form action="deleteform.php?id=<?php echo $id;?>" method="post">    
        <label for="nomRecette">Recette à supprimer :</label>
        <input class="delete_input" type="text" name="nomRecette" value="<?php echo $recipe['nomRecette']; ?>" required><br>
        <a href="deleteform.php?id=<?php echo $id?>"><button class="btn" type="submit">Supprimer</button></a>
        </form>
        <?php endif; ?>

        <a href="../recettes.php"><button class="btn">Revenir aux recettes !</button></a>
    </div>
</main>
 <!---------------------------------------------------- FOOTER ----------------------------------------------------------->
 <?php
    include '../footer.php';
  ?>
   