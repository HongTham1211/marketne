<?php
if (isset($_POST['add']) && isset($_FILES['img'])) {
    $target = 'C:/xampp/htdocs/ThiCuoiKi2/images/' .basename($_FILES["img"]["name"]);
    $imageFileType = pathinfo($target,PATHINFO_EXTENSION);
    $allowtypes    = array('jpg', 'png');
    $allowUpload1= true;
    $allowUpload2 = true;
    if ($_FILES["img"]["size"] > 2000000)
    {
        $allowUpload1 = false;
    }
    if (!in_array($imageFileType,$allowtypes ))
    {
        $allowUpload2 = false;
    }
echo $target;
if($allowUpload1!= false && $allowUpload2!= false){
    move_uploaded_file($_FILES["img"]["tmp_name"],$target );
    $names= $_POST['namesp'];
    $unit= $_POST['unit'];
    $sl= $_POST['soluong'];
    $file= $_FILES['img']['name'];;
    $loaisp= $_POST['loaisp'];
    $gia= $_POST['gia'];
    $conn=mysqli_connect("localhost","root","","market");
    $sql="INSERT INTO `vegetable`( `categoryID`, `VegetableName`, `Unit`, `Amout`, `Image`, `Price`) 
    VALUES ('$loaisp','$names','$unit','$sl','../images/$file','$gia')";
    mysqli_query($conn,$sql);
    mysqli_insert_id($conn);
    mysqli_close($conn);
    header("location:../vegetable/index.php?addsp=true");
}
else  header("location:../vegetable/index.php?addsp=false&amt=newveget");
}
?>