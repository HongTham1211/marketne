<?php
require_once("../vegetable/connection.php");
$p = new csdl();
class Customer{
    public $cusid;
    public $cus;
    $conn=$_SESSION['conn'];
    function getByID($u){
        $query = "SELECT * FROM customer WHERE CustomerID='$u'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            return mysqli_fetch_assoc($result);
        } 
        return null;
    }
    function add($cus){
        $Password = $cus['Password'];
        $Fullname = $cus['Fullname'];
        $Address = $cus['Adress'];
        $city = $cus['City'];
        $sql = "INSERT INTO `customer`(`CustomerID`, `Password`, `Fullname`, `Address`, `city`) 
        VALUES ('$ma','$Password','$Fullname','$Address','$city')"; 
        mysqli_query($conn,$sql);
        mysqli_insert_id($conn);
    }
}
?>