<?php
    include 'connection.php';
    $action = $_GET['action'];
    $idProduct = $_GET['idProduct'];
    if ($action == 'editProduct') {
            $nameProduct = $_POST['nameProduct'];
            $priceProduct = $_POST['priceProduct'];
            $stockProduct = $_POST['stockProduct'];
            $descProduct = $_POST['descProduct'];
            $urlProduct = $_POST['urlProduct'];
        $queryProduct=mysqli_query($connection,
        "UPDATE product SET nameProduct = '$nameProduct',priceProduct = '$priceProduct',stockProduct = '$stockProduct',descProduct = '$descProduct',urlProduct = '$urlProduct' WHERE id=$idProduct");
        header("location:../index.php?page=productsData");
    }