<?php 
    // include 'connexion.php';
    $server="localhost";
    $nomBD="DataWare";
    $login="root";
    $pass="";

    $conn = mysqli_connect($server, $login, $pass, $nomBD);

    if (isset($_GET['DeleteID'])){
        $id=$_GET['DeleteID'];

        $sql = "DELETE FROM perssonel WHERE Id= '$id'";
        $result = mysqli_query($conn,$sql);
        if ($result) {
            header("Location: ./dashboardpo.php");
            exit();
        }else{
            die(mysqli_connect_error($conn));
        }
    }