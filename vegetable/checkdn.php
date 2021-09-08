<?php 
if(isset($_SESSION['dangnhap'])) 
{
    echo $_SESSION['dangnhap'];
    echo "<script>
    document.getElementById('his').style.display='block';
    document.getElementById('dnne').style.display='none';
    document.getElementById('out').style.display='block';
    </script>";
}
else 
{
    echo "<script>
    document.getElementById('his').style.display='none';
    document.getElementById('dnne').style.display='block';
    document.getElementById('out').style.display='none';
    </script>";
}

?>