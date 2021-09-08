<?php
require_once("../vegetable/connection.php");
$p = new cddl();
class vegetable{
    public $cateid;
    public $cateids;
    $conn=$_SESSION['conn'];
    function getAll(){
        $sql="SELECT * FROM `vegetable` WHERE 1";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            return mysqli_fetch_array($result);
        } 
        return null;
    }
    function getListByCateID($cateid){
        $query = "SELECT * FROM `vegetable`,'category'
        WHERE 'category'.CategoryID='vegetable'.categoryID 
        AND categoryID='$cateid'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            return mysqli_fetch_array($result);
        } 
        return null;
    }
    function getListByCateID($cateids){
        $cateids= " ' ".implode("' , '",$cateids)." ' ";
        $query = "SELECT * FROM `vegetable` WHERE categoryID IN($cateids)";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            return mysqli_fetch_array($result);
        } 
        return null;
    }
    function getByID($vegetableID) {
        $query = "SELECT Description FROM `category`,vegetable 
        WHERE 'category'.CategoryID='vegetable'.categoryID 
        AND vegertableID='$vegetableID'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            return mysqli_fetch_array($result);
        } 
        return null;
    }
}
?>