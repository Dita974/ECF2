<?php

require '../php/datamanager.php';
require '../validation.php';

if(isset($_POST['nomRecette'], $_POST['image'], $_POST['description'])) 
{
    if(!empty($_POST['nomRecette']) && !empty($_POST['image']) && !empty($_POST['description']))
    {
        $nomRecette = valid_data($_POST['nomRecette']);
        $image = valid_data($_POST['image']);
        $description = valid_data($_POST['description']);
        

        addrecipes($nomRecette, $image, $description);
        

        header('location:http://localhost/livre_recettes/recettes.php?status=success&message=added');
    }
    else
    {
        header('location:http://localhost/livre_recettes/add.php?status=missing');
    }
}
else
{
    header('location:http://localhost/livre_recettes/add.php?status=invalid');
}