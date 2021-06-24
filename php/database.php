<?php

function connexion(&$conn) {
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    try{
        $conn = new PDO("mysql:host=$servername;dbname=livre_recettes;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
    }

}
