<?php

require './validation.php';

if(isset($_POST['pseudo'], $_POST['pwd'])){
    if(!empty($_POST['pseudo']) && !empty($_POST['pwd'])){

    $pseudo = valid_data($_POST['pseudo']);
    
    $pwh = password_hash($_POST['pwd'], PASSWORD_DEFAULT);


    header('location:http://localhost/livre_recettes/recettes.php?status=success&message=connected') echo 'Vous êtes connectés';
    }
    else{
        header('location:http://localhost/livre_recettes/recettes.php/signup.php?status=missing');
    }
}
else{
    header('location:http://localhost/livre_recettes/recettes.php/signup.php?status=invalid');
}



