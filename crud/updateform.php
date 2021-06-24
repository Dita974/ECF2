<?php
require '../validation.php';
require '../php/datamanager.php';


if(isset($_GET['id'], $_POST['nomRecette'], $_FILES['image'], $_POST['description'])){

    if(!empty($_GET['id']) && !empty($_POST['nomRecette']) && !empty($_FILES['image']) && !empty($_POST['description']))
    {
        $id = valid_data($_GET['id']);
        $nomRecette = valid_data($_POST['nomRecette']);
        $description = valid_data($_POST['description']);
        $image = $_FILES['image'];
        $ext = array('png', 'jpg', 'jpeg', 'gif');

        if(!$description) :
            $msg_error = "merci de renseigner une description valide";
        elseif($image['error'] > 0 && $image['error'] < 3) :
            $msg_error = "taille du fichier trop grand";
        elseif($image['error'] == 3 || $image['error'] > 4) :
            $msg_error = "problème pendant l'upload";
        else :
            if($image['error'] == 4) :
                $image_name = 'generic.jpg';
                $set_request = TRUE;
            else :
                // je revérifie la taille de l'image côté serveur
                if($image['size'] > 4194304) {
                    $msg_error = "taille du fichier trop grand"; // 4Mo => 1024*1024*4
                }
                // je vérifie que l'extension est bien une image
                elseif(!in_array(strtolower(pathinfo($image['name'], PATHINFO_EXTENSION)), $ext)) {
                    $msg_error = "le fichier n'est pas une image";
                }
                // taille ok, extension ok
                else {
                    // je donne un nouveau nom à l'image pour éviter les doublons
                    $image_name = uniqid() . '_' . $image['name'];
                    $img_folder = dirname(__DIR__) . '/assets/img/';
                    @mkdir($img_folder, 0777);
                    $dir = $img_folder . $image_name;
    
                    $move_file = @move_uploaded_file($image['tmp_name'], $dir);
    
                    if(!$move_file) {
                        $msg_error = "problème pendant l'upload";
                    }
                    else {
                        $set_request = TRUE;
                    }
                }
            endif;
        endif;
    }  
}        

echo $image_name;
    if(isset ($set_request)){
update_recipe_by_id($id, $nomRecette, $image_name, $description);

    header('location:http://localhost/livre_recettes/recettes.php?status=success&message=updated');
}
    elseif(isset ($msg_error)){

    header('location:http://localhost/livre_recettes/update.php?status=invalid');
}





