<?php session_start();
require_once("../vegetable/connection.php");
if(isset($_SESSION['dangnhap'])){
    if(isset($_POST['orderm'])){
        $id=$_SESSION['matk'];
        $tsl= $_POST['ptsl'];
        $totien= $_POST['pttien'];
        $conn= $_SESSION['conn'];
        $ngaylap= date("Y/m/d");
        $sql="INSERT INTO `orders`(`CustomerID`, `Date`, `Total`, `Note`) VALUES ('$id','$ngaylap','$totien','complete')";
        mysqli_query($conn,$sql);
        mysqli_insert_id($conn);
        $ma= mysqli_insert_id($conn);
        $sql="SELECT * FROM `cart` WHERE 1";
        $result = mysqli_query($conn,$sql);
        While($row=mysqli_fetch_array($result)){
            $sql2="SELECT vegetable.VegertableID FROM `cart`,vegetable 
            WHERE vegetable.VegetableName= cart.Name 
            AND Name='$row[0]'";
            $result1= mysqli_query($conn,$sql2);
            $row2 = mysqli_fetch_array($result1);
            $sql1="INSERT INTO `orderdetail`(`OrderID`, `VergetableID`, `Quanlity`, `Price`) VALUES ('$ma','$row2[0]','$row[2]','$row[3]');";
            mysqli_query($conn,$sql1);
        } 
        mysqli_query($conn,'DELETE FROM cart');
    }
    mysqli_close($conn);
    header("location:../vegetable/index.php");
}
else 
header("location:../vegetable/index.php?act=dn");
?>