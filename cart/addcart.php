<?php 
require_once("../vegetable/connection.php");
$conn= $_SESSION['conn'];
if(isset($_POST['buy'])){
    $loai = $_POST['ploai'];
    $name = $_POST['pname'];
    $img = $_POST['img'];
    $price= $_POST['price'];
    $amount= $_POST['amount'];
    $sql1="SELECT `Amount`  FROM `cart` WHERE Name='$name'";
    $result = mysqli_query($conn,$sql1);
    $row=mysqli_fetch_array($result);
    if($row>0){
        $so=0;
        $so = $row[0]+1;
        if($so > $_POST['amount'])
        {
            mysqli_close($conn);
            header("location:../vegetable/index.php?cartto=false");
        }
        else $sql = "UPDATE `cart` SET `Amount`= '.$so.' WHERE Name='$name'";
    }
    else $sql = "INSERT INTO `cart`(`Name`, `Picture`, `Amount`, `price`, `idloai`) VALUES ('$name','$img','1','$price','$loai')";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("location:../vegetable/index.php?cartto=true");
}
?>