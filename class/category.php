<?php
require_once("../vegetable/connection.php");
$p = new cddl(); 
$conn=$_SESSION['conn'];
class category{
    public $cate;
    function getAll(){
        $sql="SELECT * FROM `category` WHERE 1";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            return mysqli_fetch_array($result);
        } 
        return null;
    }
    function add($cate){
        $name = $cate['Name'];
        $des = $cate['Description'];
        $sql="INSERT INTO `category`( `Name`, `Description`) VALUES ('.$name.','$des')";
        mysqli_query($conn,$query);
        mysqli_isert_id($conn);
    }

}
mysqli_close($conn);
?>