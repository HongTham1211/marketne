<?php session_start();
    require_once("../vegetable/connection.php");
    $yname=$_POST['nuser'];
    $uname=$_POST['npass'];
    $pass=$_POST['adress'];
    $gt=$_POST['city'];
    $conn= $_SESSION['conn'];
    $sql = "INSERT INTO `customer`(`Password`, `Fullname`, `Address`, `city`) 
    VALUES ('$uname','$yname','$pass','$gt')";
    mysqli_query($conn,$sql);
    mysqli_insert_id($conn); 
    mysqli_close($conn);
    header("location:../vegetable/index.php?ktdk=true");
?>