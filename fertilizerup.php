<?php
include "config.php";
if( isset($_POST['update'])){
		if( isset($_POST['medname'])||isset($_POST['qty'])||isset($_POST['cat'])||isset($_POST['sp'])||isset($_POST['loc'])) {
			 $id=$_POST['medid'];
			 $name=$_POST['medname'];
			 $qty=$_POST['qty'];
			 $cat=$_POST['cat'];
			 $price=$_POST['sp'];
			 $lcn=$_POST['loc'];
			 
		$sql="UPDATE meds SET med_name='$name',med_qty='$qty',category='$cat',med_price='$price',location_rack='$lcn' where med_id='$id'";
		
		
			$conn->query($sql);
			header("location:fertilizer-view.php");
		}
	}

	?>