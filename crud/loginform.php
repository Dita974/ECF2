<?php

require '../validation.php';
require '../php/datamanager.php';

if(isset($_POST['pseudo'], $_POST['pwd'])){
    if(!empty($_POST['pseudo']) && !empty($_POST['pwd'])){

        $pseudo = valid_data($_POST['pseudo']);
        $user = select_user($pseudo);

        if(password_verify($_POST['pwd'], $user['pwd'])){
            session_start();
          
      $_SESSION['user'] = $user['pseudo'];
    
        header ('location:http://localhost/livre_recettes/recettes.php?status=success&message=connected');    
        } else {
            echo "L'identifiant ou le mot de passe est invalide.";
        }

    }
}
