<?php 
    $server="localhost";
    $nomBD="DataWare";
    $login="root";
    $pass="";

    $conn = mysqli_connect($server, $login, $pass, $nomBD);

    if (isset($_GET['DeleteID'])){
        $id=$_GET['DeleteID'];

        $sql = "DELETE FROM equipes WHERE IDEquipe= '$id'";
        $result = mysqli_query($conn,$sql);
        if ($result) {
            header("Location: ./squads.php");
            exit();
        }else{
            die(mysqli_connect_error($conn));
        }
    }