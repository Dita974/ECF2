<?php
require 'database.php';

function addrecipes(string $nomRecette, string $image, string $description) {
    $dbco;  
    connexion($dbco);    
    try {
        $query = $dbco->prepare("INSERT INTO recette(nomRecette, image, description)
                VALUES(:nomRecette, :image, :description)");                   
        $query->bindValue(':nomRecette',$nomRecette);
        $query->bindValue(':image',$image);
        $query->bindValue(':description',$description);       
        $query->execute();
        
    } catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
}

function select_all_recipes() {
    $dbco;   
    connexion($dbco);
    try {
        $query = $dbco->prepare("SELECT * FROM recette");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
        
    } catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
}

function select_recipe_by_id(int $id) {
    $dbco = NULL;
    connexion($dbco);
    try {
        $query = $dbco->prepare("SELECT * FROM recette WHERE id = :id");
        $query->bindValue(':id',$id, PDO::PARAM_INT); 
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    } catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
}

function update_recipe_by_id($id, $nomRecette, $image, $description){
    $dbco = NULL;
    connexion($dbco);
    try {
    $query = $dbco->prepare("UPDATE recette SET nomRecette = :nomRecette, image = :image, description = :description WHERE id = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->bindParam(':nomRecette', $nomRecette, PDO::PARAM_STR);
    $query->bindParam(':image', $image, PDO::PARAM_STR);
    $query->bindParam(':description', $description, PDO::PARAM_STR);      
    $query->execute();
    } catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
}

function delete_recipe_by_id($id){
    $dbco = NULL;
    connexion($dbco);
    try {
    $query = $dbco->prepare("DELETE FROM recette WHERE id = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
   
    $query->execute();
    } catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
}

function adduser(string $pseudo, string $pwd) {
    $dbco = NULL;  
    connexion($dbco);    
    try {
        $query = $dbco->prepare("INSERT INTO user(pseudo, pwd)
                VALUES(:pseudo,:pwd)");                   
        $query->bindValue(':pseudo',$pseudo, PDO::PARAM_STR);
        $query->bindValue(':pwd',$pwd, PDO::PARAM_STR);
       
        return $query->execute();
        
    } catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
}

function select_user(string $pseudo) {
    $dbco = NULL;
    connexion($dbco);
    try {
        $query = $dbco->prepare("SELECT pseudo,pwd FROM user WHERE pseudo = :pseudo");
        $query->bindValue(':pseudo',$pseudo, PDO::PARAM_STR); 
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    } catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
}
