<div class="cartd">
    <div style="height:30px;width:100%;font-size:1.5vw">History</div>
    <div style="height:30px;width:100%;border: 1px solid rgb(2, 20, 36);">
        <div class="thecart" style="width:10%">#</div>
        <div class="thecart" style="width:25%">Date</div>
        <div class="thecart" style="width:30%">Total</div>
        <div class="thecart" style="width:15%"></div>
        <div style="clear: both"></div>
    </div>
        <?php
        $stt=0;
        $conn=mysqli_connect("localhost","root","","market");
        $idkh= $_SESSION['matk'];
        $sql="SELECT Date,Total,orders.OrderID  FROM `orders`,customer WHERE customer.CustomerID = orders.CustomerID AND customer.CustomerID='$idkh'";
        $result= mysqli_query($conn,$sql);
        while($row1= mysqli_fetch_array($result)){
            $stt++;
            echo '<div style="height:50px;width:100%;border: 1px solid rgb(2, 20, 36);">
            <div class="thecart" style="width:10%">'.$stt.'</div>
            <div class="thecart" style="width:25%">'.$row1[0].'</div>
            <div class="thecart" style="width:30%">'.$row1[1].'</div>
            <div class="thecart" style="width:10%;color: white;background-color:#007bff;height:30px;boder-radius:10px;"><a href="index.php?amt=histo&idname='.$row1[2].'">&nbsp;Detail</a></div>
            <div style="clear: both"></div>
            </div>';
        }
    ?>
    </div>