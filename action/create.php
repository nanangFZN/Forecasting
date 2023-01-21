<?php 
include 'connection.php';
$action = $_GET['action'];
    if ($action=="createProduct") {
       $query_id = mysqli_query($connection,"SELECT MAX(id) as maxId from product");
       $result = mysqli_fetch_array($query_id);
       $idProduct = $result['maxId'];
       $number=$result['maxId'];
       $number++;
       $char="PRD";
       $newIdProduct=$char.date('dmY').sprintf("%04s",$number);
        $nameProduct=$_POST['nameProduct'];
        $priceProduct=$_POST['priceProduct'];
        $stockProduct=$_POST['stockProduct'];
        $descProduct=$_POST['descProduct'];
        $urlProduct=$_POST['urlProduct'];
       
      $final = mysqli_query($connection,"INSERT INTO product VALUES('','$newIdProduct','$nameProduct','$priceProduct','$stockProduct','$descProduct','$urlProduct')");
        header("location:../index.php?page=productsData");

    }elseif ($action=="createSoldProduct") {
      $menuSold=$_POST['menuSold'];
      $dateSold =  $_POST['dateSold'];
      $quantity = $_POST['soldProduct'];
      $query  = mysqli_query($connection,"INSERT INTO soldProduct VALUES('','$menuSold','$dateSold','$quantity')");
      header("location:../index.php?page=ordersData");

    }elseif ($action=="createCake") {
      $nameCake  =  $_POST["nameCake"];
      $category  =  $_POST["category"];
      $query  = mysqli_query($connection,"INSERT INTO cake VALUES('','$nameCake','$category')");
      header("location:../index.php?page=cakeData");
    }

?>