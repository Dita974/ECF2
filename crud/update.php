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
    <title>Online-Bio, modifier une recette</title>
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
                    <h1>Modifier une recette ?</h1>
                </div>
            </div>
        </header>
        <!------------------------------------------------------MAIN------------------------------------------------------------->
<main>
    <div id="main_update">
        <h2 id="form">Modifier une recette !</h2>

        <?php
        require '../php/datamanager.php';
        $allrecipes = select_all_recipes();
        $size = count($allrecipes); 
        ?>

        <form action="update.php" method="get">
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

        <form action="updateform.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">       
            <label for="nomRecette">Modifier le nom de la recette :</label>
            <input class="update_input" type="text" name="nomRecette" value="<?php echo $recipe['nomRecette']; ?>" required><br>

            <label for="image">Modifier l'image :</label>
            <input class="update_input" type="file" name="image" required><br>
            <input class="update_input" type="hidden" name="MAX_FILE_SIZE" value="4194304">

            <label for="description">Modifier la description :</label>
            <input class="update_input" type="text" name="description" value="<?php echo $recipe['description']; ?>"><br> 
        
            <input class="btn" type="submit" name="update" value="Modifier">
        </form>

        <?php endif; ?>

        <a href="../recettes.php"><button class="btn">Revenir aux recettes !</button></a>
    </div>
</main>
 <!---------------------------------------------------- FOOTER ----------------------------------------------------------->
 <?php
    include '../footer.php';
?>
   

