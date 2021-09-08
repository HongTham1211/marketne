<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <style>
    </style>
</head>
<body leftmargin="0px"; topmargin="0px">
    <div id="trangchu">
        <div id="menu">
            <?php include('menu.php');?>
        </div>
        <div id="content">
            <?php include('content.php');?>
            
                <?php 
                if(empty($_GET['amt'])){
                    include('../vegetable/connection.php');
                    $conn= $_SESSION['conn'];
                    $sql1="SELECT * FROM `category` WHERE 1";
                    $result= mysqli_query($conn,$sql1);
                    echo '<div style="text-align:center;width:100%;height:50px;"><h2> Vegetable </h2></div>
                    <div style="height:550px;width:100%;">
                    <div class="dscate"><div style="width:90%;height:30px">Category Name: </div>';
                    echo '<form class="formcate">';
                    While($row1= mysqli_fetch_array($result)){
                        echo '<div style="width:90%;height:30px">
                        <input type="checkbox" name="categ" value="'.$row1[1].'">'.$row1[1].'</div>';
                    }
                    echo '
                    <div><input type="submit" value="Filter"></div>
                    </form>
                    <div style="height:100px;width:100%;margin-top: 20px">
                    <a href="index.php?amt=newcater"><div style="color:black;">New Category</div></a>
                    <a href="index.php?amt=newveget"><div style="color:black;">New Vegetable</div></a></div>
                    </div>';
                    $sql="SELECT * FROM `vegetable` WHERE 1";
                    if(isset($_GET['categ'])){
                        $catega = $_GET['categ'];
                        $sql="SELECT * FROM `vegetable`,category WHERE category.CategoryID=vegetable.categoryID AND Name='$catega'";
                    }
                    $result1= mysqli_query($conn,$sql);
                        if($result1!=NULL){
                            echo '<div class="formhinh">';
                            while ($row = mysqli_fetch_array($result1)){
                            echo '
                            <form class="form1" action="../cart/addcart.php" method="POST">
                            <div class="avta">
                                <img src="'.$row[5].'" alt="AVT" class="anh">
                            </div>
                            <div class="giua">
                                <div style="float:left;width:70px;height:30px;">'.$row[2].'</div>
                                <div class="gia">'.$row[6].'</div>
                                <div style="clear: both;"></div>
                            </div>
                            <input type="hidden" name="pid" value='.$row[0].'">
                            <input type="hidden" name="ploai" value='.$row[1].'>
                            <input type="hidden" name="pname" value='.$row[2].'>
                            <input type="hidden" name="amount" value='.$row[4].'>
                            <input type="hidden" name="img" value='.$row[5].'>
                            <input type="hidden" name="price" value='.$row[6].'>
                            <div><input type="submit" name="buy" class="nutbuy" value="Buy"></div>
                            </form>';
                        }
                        echo '</div ></div>';
                    }
                    mysqli_close($conn);}
                ?>
                <div style="clear: both"></div>
        </div>
        </div>
</body>
</html>