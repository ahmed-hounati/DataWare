<?php
$serveur = "localhost";
$nomBD = "DataWare";
$login = "root";
$password = "";
$connexion = mysqli_connect($serveur, $login, $password, $nomBD);

if (mysqli_connect_errno()) {
    echo "Failed to connect!";
    exit();
}
?>