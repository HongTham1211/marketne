<div class="cartd">
    <div style="height:30px;width:100%;font-size:1.5vw;text-align:center;">Category</div>
    <div style="height:auto; width: 30%;float:left;margin-left:10px">
    <form action="../category/add.php" method="post">
        <div style="margin-top:10px;">Name</div>
        <div style="margin-top:5px;"><input type="text" name="newname" ></div>
        <div style="margin-top:5px;">Description</div>
        <div style="margin-top:5px;"><input type="text" name="newdes" ></div>
        <div style="margin-top:5px;text-align:center;"><input type="submit" value="ADD"></div>
    </form>
    </div>
    <div style="height:auto; width: 63%;float:left;margin-left:20px">
    <div style="height:30px;width:100%">
        <div class="thecart" style="width:10%">#</div>
        <div class="thecart" style="width:30%">Name</div>
        <div class="thecart" style="width:50%">Description</div>
        <div style="clear: both"></div>
    </div>
        <?php
        $stt=0;
        $conn=mysqli_connect("localhost","root","","market");
        $sql="SELECT * FROM `category` WHERE 1";
        $result= mysqli_query($conn,$sql);
        while($row1= mysqli_fetch_array($result)){
            $stt++;
            echo '<div style="height:60px;width:100%";border: 1px solid rgb(2, 20, 36);">
            <div class="thecart" style="width:10%">'.$stt.'</div>
            <div class="thecart" style="width:30%">'.$row1[1].'</div>
            <div class="thecart" style="width:50%">'.$row1[2].'</div>
            <div style="clear: both"></div>
            </div>';
        }
    ?>
    </div>

</div>