<?php 
    include 'connection.php';
    session_start();

    if (isset($_SESSION['username'])) {
        header("location:index.php");
    }

    if (isset($_POST['submit'])) {  
        $username = $_POST['username'];
        $pass     = md5($_POST['password']);
    $query  = "SELECT * FROM users WHERE username='$username' AND password = '$pass'";
    $result = mysqli_query($connection,$query);
    if ($result->num_rows>0) {
        $row = mysqli_fetch_array($result);
        $_SESSION['name']=$row['name'];
        $_SESSION['username']=$row['username'];
        header("location:../index.php");

    }else {
        echo "<script>
        alert('Username Atau Password Anda Salah');
        document.location.href='../login.php';
        </script>";
    }
    }
?>