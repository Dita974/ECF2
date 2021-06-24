<?php
require '../php/datamanager.php';
require '../validation.php';

if(isset($_GET['id'])) {
    
    if(!empty($_GET['id']))
    {
        $id = valid_data($_GET['id']);
        delete_recipe_by_id($id);

        header('location:http://localhost/livre_recettes/recettes.php?status=success&message=deleted');
    }
    else{
        header('location:http://localhost/livre_recettes/delete.php?status=missing');
    }
}
else
{
    header('location:http://localhost/livre_recettes/delete.php?status=invalid');
}
    

