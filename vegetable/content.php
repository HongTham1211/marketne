<?php 
    if(isset($_GET['act']))
	{	
		if($_GET['act']=="dn")
			include ('../customer/login.php');
		if($_GET['act']=="dk")
			include ('../customer/register.php');
		if($_GET['act']=="logout")
			include ('../customer/logout.php');
	}
	if(isset($_GET['amt'])){
		if($_GET['amt']=="cartt")
			include ('../cart/index.php');
		if($_GET['amt']=="histo")
			include('../cart/history.php');
		if($_GET['amt']=="newcater")
			include ('../category/index.php');
		if($_GET['amt']=="newveget")
			include ('../vegetable/new.php');
	}
	if(isset($_GET['ktdn'])){
		if(($_GET['ktdn'])=='true')
			echo '<script> alert ("dang nhap tai khoan thanh cong");</script>';
		else 
			echo '<script> alert ("tai khoan khong ton tai");</script>';
	}
	if(isset($_GET['ktdk'])){
		if(($_GET['ktdk'])=='true')
			echo '<script> alert ("dang ky tai khoan thanh cong");</script>';
		else 
			echo '<script> alert ("dang ky khong thanh cong");</script>';
	}
	if(isset($_GET['addlsp'])){
		if(($_GET['addlsp'])=='true')
			echo '<script> alert ("Them loai sp thanh cong");</script>';
		else 
			echo '<script> alert ("dang ky khong tai khoan thanh cong");</script>';
	}
	if(isset($_GET['cartto'])){
		if(($_GET['cartto'])=="true")
			echo '<script> alert ("Da them vao gio hang");</script>';
		else 
			echo '<script> alert ("So luong ban mua da qua muc");</script>';
	}
	if(isset($_GET['addsp'])){
		if(($_GET['addsp'])=="true")
			echo '<script> alert ("Them sp thanh cong");</script>';
		else 
			echo '<script> alert ("Không upload được file, có thể do file lớn, kiểu file không đúng ...");</script>';
	}	
	if(isset($_GET['idname'])){
		$mama = $_GET['idname'];
	   include('../cart/detail.php');
	}
?>