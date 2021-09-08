<?php session_start();
    if(isset($_POST['user']))
    {
        $u = $_POST['user'];
        $p = $_POST['pass'];
        require_once("../vegetable/connection.php");
        $conn= $_SESSION['conn'];
        $query ="select * from customer where CustomerID='$u' and Password='$p'";
        $resul = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($resul);
        if($row>0){
            $_SESSION['matk']=$row[0];
            $_SESSION['username']=$row[2];
            $_SESSION['dangnhap']=$row[2];
            mysqli_close($conn);
            header("location:../vegetable/index.php?ktdn=true");
        }
        else 
        header("location:../vegetable/index.php?act=dn&ktdn=false");
}
?>