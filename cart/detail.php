<div class="cartt1">
    <div style="height:30px;width:100%;font-size:1.5vw">Order Detail</div>
    <div style="height:30px;width:100%">
        <div class="thecart" style="width:5%">#</div>
        <div class="thecart" style="width:20%">Name</div>
        <div class="thecart" style="width:25%">Picture</div>
        <div class="thecart" style="width:15%">Amount</div>
        <div class="thecart" style="width:15%;margin-left:7px;">Price</div>
        <div style="clear: both"></div>
    </div>
        <?php
        $stt=0;$sl=0;$ttien=0;
        $conn=mysqli_connect("localhost","root","","market");
        $sql="SELECT vegetable.VegetableName,image,Quanlity,orderdetail.Price 
        FROM `orderdetail`,orders,customer,vegetable 
        WHERE orders.OrderID = orderdetail.OrderID 
        AND customer.CustomerID = orders.CustomerID 
        AND vegetable.VegertableID = orderdetail.VergetableID 
        AND orderdetail.OrderID ='$mama'";
        $result= mysqli_query($conn,$sql);
        while($row1= mysqli_fetch_array($result)){
            $stt++;
            $sl=$sl+ $row1[2];
            $ttien= $ttien + $row1[2]*$row1[3];
            echo '<div style="height:100px;width:100%";border: 1px solid rgb(2, 20, 36);">
            <div class="thecart" style="width:5%">'.$stt.'</div>
            <div class="thecart" style="width:20%">'.$row1[0].'</div>
            <div class="thecart" style="width:25%"><img src="'.$row1[1].'" class="anh1"></div>
            <div class="thecart" style="width:15%">'.$row1[2].'</div>
            <div class="thecart" style="width:15%; margin-left:7px;">'.$row1[3].'</div>
            <div style="clear: both"></div>
            </div>';
        }
        echo '
        <div style="height:50px;width:100%;border: 1px solid rgb(2, 20, 36);">
        <div class="thecart" style="width:5%"></div>
        <div class="thecart" style="width:20%"></div>
        <div class="thecart" style="width:25%">Total</div>
        <div class="thecart" style="width:15%">'.$sl.'</div>
        <div class="thecart" style="width:15%; margin-left:7px;">'.$ttien.'</div>
        <div style="clear: both"></div>
        </div>';
        mysqli_close($conn);
        ?>
</div>