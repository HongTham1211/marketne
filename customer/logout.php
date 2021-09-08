<?php 
 
if (isset($_SESSION['dangnhap'])){
    unset($_SESSION['username']); // xóa session login
    unset($_SESSION['dangnhap']);
    unset($_SESSION['matk']);
    $conn=mysqli_connect("localhost","root","","market");
    mysqli_query($conn,'DELETE FROM cart');
    mysqli_close($conn);
    echo "<script>
    document.getElementById('out').style.display='none';
    </script>";
}
header("location:../vegetable/index.php");
?>
