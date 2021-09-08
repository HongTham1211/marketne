<?php
require_once("../vegetable/connection.php");
$conn= $_SESSION['conn'];
$name = $_POST['newname'];
$des= $_POST['newdes'];
$sql = "INSERT INTO `category`(`Name`, `Description`) VALUES ('$name','$des')";
mysqli_query($conn,$sql);
mysqli_insert_id($conn);
mysqli_close($conn);
header("location:../vegetable/index.php?addlsp=true");
?>