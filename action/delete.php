<?php
    include "connection.php";
    $action=$_GET['action'];
    if ($action == "deleteCake") {
        $idCake=$_GET['id'];
        echo $action;
        $query = mysqli_query($connection,"DELETE FROM cake WHERE id='$idCake'");
        header("location:../index.php?page=cakeData");
    }
?>