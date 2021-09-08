<?php
require_once("../vegetable/connection.php");
$p = new csdl();
$conn=$_SESSION['conn'];
class order{
    public $cusID;
    public $orderid;
    function getAllOrder($cusID){
        $sql= "SELECT `OrderID`, orders.CustomerID, `Date`, `Total`, `Note` FROM orders,customer WHERE customer.CustomerID = orders.CustomerID AND customer.CustomerID='.$cusID.' ";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            return mysqli_fetch_assoc($result);
        } 
        return null;
    }
    function getOrderDetail($orderid){
        $sql="SELECT orderdetail.OrderID,VergetableID,Quanlity,Price FROM `orderdetail`,orders WHERE orders.OrderID=orderdetail.OrderID AND orders.OrderID='.$orderid.'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            return mysqli_fetch_assoc($result);
        } 
        return null;
    }
    function addOrder($order, $detail){
        $id=$_SESSION['matk'];
        $tsl= $order['ptsl'];
        $totien= $order['pttien'];
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
    }
}
?>