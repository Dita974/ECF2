<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["user"]);
header('location:http://localhost/livre_recettes/recettes.php?status=success&message=connected');