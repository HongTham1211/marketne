<div class="cartd">
<form action="../vegetable/add.php" method="post" enctype="multipart/form-data">
    <div style="height:30px;width:100%;font-size:1.5vw;text-align:center;">Add Vegetable</div>
    <div style="width :100%;height:180px;">
        <div style="height:170px; width: 63%;float:left;margin-left:10px">
            <div style="margin-top:10px;">Vegetable Name</div>
            <div style="margin-top:5px;"><input type="text" name="namesp" ></div>
            <div style="margin-top:5px;width:100%;height:50px;">
                <div style="width:25%;float:left;margin-left:5px;height:40px;">
                    <div>Unit</div>
                    <div><select name="unit">
                        <option value="gam">Gam</option>
                        <option value="qua">Qua</option>
                        <option value="tui">Tui</option>
                        <option value="kg">Kilogam</option>
                    </select></div>
                </div>
                <div style="width:25%;float:left;margin-left:5px;height:40px;">
                    <div >Amount</div>
                    <div><input type="text" name="soluong" style="width:50px;height:13px"></div>
                </div>
                <div style="clear:both"></div>
            </div>
            <div style="margin-top:5px;">Choose File (.JPG; .PNG)</div>
            <div style="margin-top:5px;">
            <input id="img" name="img" type="file" style="width:74%; height:20px; padding:3px 0 5px 2%" /></div>
        </div>
        <div style="height:170px; width: 32%;float:left;margin-left:10px">
            <div style="margin-top:5px;">Category Name</div>
            <div style="margin-top:5px;"><select name="loaisp">
                <?php
                    $conn=mysqli_connect("localhost","root","","market");
                    $sql ="SELECT Name,CategoryID FROM `category` WHERE 1"; 
                    $result= mysqli_query($conn,$sql);
                    while($row= mysqli_fetch_array($result)){
                        echo '<option value="'.$row[1].'">'.$row[0].'</option>';
                    }
                    mysqli_close($conn);
                ?>
                </select>
            </div>
            <div style="margin-top:5px;">Price: </div>
            <div style="margin-top:5px;"><input type="text" style="height:13px;width:120px "name="gia" ></div>
        </div>
    </div>
    <div class="nutadd"><input name="add" type="submit" value="ADD"></div>
</form>
</div>