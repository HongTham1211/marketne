<?php 
function connect()
{
    $conn=mysqli_connect("localhost","root","","market");
    if(mysqli_connect_error())
        echo "<script>alert('Connection Error.');</script>";
    else{
        //echo "<script>alert('Database Connection Successfully.');</script>";
    mysqli_query($conn,"SET NAMES,'utf8'");
    mysqli_set_charset($conn, 'UTF8');
    $_SESSION['conn']= $conn;
    }

}
connect();
?>