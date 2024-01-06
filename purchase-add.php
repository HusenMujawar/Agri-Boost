<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="nav2.css">
<link rel="stylesheet" type="text/css" href="form4.css">
<title>
Purchases
</title>
</head>

<body>

	<div class="sidenav" style="overflow-y:scroll">
			<h2 style="font-family:Arial; color:white; text-align:center;"> Agri-Boost </h2>
			<p style="margin-top:-20px;color:white;line-height:1;font-size:12px;text-align:center">Developed by, Husen Mujawar</p>
			<a href="adminmainpage.php">Dashboard</a>
			<button class="dropdown-btn">Fertilizer
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="fertilizer-add.php">Add New Fertilizer</a>
				<a href="fertilizer-view.php">Manage Fertilizer</a>
			</div>
			<button class="dropdown-btn">Suppliers
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="supplier-add.php">Add New Supplier</a>
				<a href="supplier-view.php">Manage Suppliers</a>
			</div>
			<button class="dropdown-btn">Stock 
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="purchase-add.php">Add New Stock</a>
				<a href="purchase-view.php">Manage Stock</a>
			</div>		
			<button class="dropdown-btn">Agrist
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="employee-add.php">Add New Agrist</a>
				<a href="employee-view.php">Manage Agrist</a>
			</div>			
			<button class="dropdown-btn">Customers
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="customer-add.php">Add New Customer</a>
				<a href="customer-view.php">Manage Customers</a>
			</div>
			<a href="sales-view.php">View Sales Invoice Details</a>
			<a href="salesitems-view.php">View Sold Products Details</a>
			<a href="pos1.php">Add New Sale</a>			
			<button class="dropdown-btn">Reports
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="stockreport.php">Fertilizer - Low Stock</a>
				<a href="expiryreport.php">Fertilizer - Soon to Expire</a>
				<a href="salesreport.php">Transactions - Last Month</a>				
			</div>			
	</div>

	<div class="topnav">
		<a href="logout.php">Logout</a>
	</div>
	
	<center>
	<div class="head">
	<h2> ADD STOCK PURCHASE DETAILS</h2>
	</div>
	</center>
	
	
	<br><br><br><br><br><br><br><br>
	
	
	<div class="one row" style="padding-left:150px;">
		<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
				
	<?php
	
		include "config.php";
		 
		if(isset($_POST['add']))
		{
		$pid = mysqli_real_escape_string($conn, $_REQUEST['pid']);
		$sid = mysqli_real_escape_string($conn, $_REQUEST['sid']);
		$mid = mysqli_real_escape_string($conn, $_REQUEST['mid']);
		$qty = mysqli_real_escape_string($conn, $_REQUEST['pqty']);
		$cost = mysqli_real_escape_string($conn, $_REQUEST['pcost']);
		$pdate = mysqli_real_escape_string($conn, $_REQUEST['pdate']);
		$mdate = mysqli_real_escape_string($conn, $_REQUEST['mdate']);
		$edate = mysqli_real_escape_string($conn, $_REQUEST['edate']);

		$sql = "INSERT INTO purchase VALUES ($pid, $sid, $mid,'$qty','$cost','$pdate','$mdate','$edate')";
		if(mysqli_query($conn, $sql)){
			echo "<p style='font-size:8;'>Purchase details successfully added!</p>";
		} else{
			echo "<p style='font-size:8;color:red;'>Error! Check details.</p>";
		}
		
		}
		 
		$conn->close();
	?>
	
			<div class="column">
					<p>
						<label for="pid">Purchase ID:</label><br>
						<input type="number" name="pid">
					</p>
					<p>
						<label for="sid">Supplier ID:</label><br>
						<input type="number" name="sid">
					</p>
					<p>
						<label for="mid">Fertilizer ID:</label><br>
						<input type="number" name="mid">
					</p>
					<p>
						<label for="pqty">Purchase Quantity:</label><br>
						<input type="number" name="pqty">
					</p>
					
					
				</div>
				<div class="column">
					
					<p>
						<label for="pcost">Purchase Cost:</label><br>
						<input type="number" step="0.01" name="pcost">
					</p>
					
					
					<p>
						<label for="pdate">Date of Purchase:</label><br>
						<input type="date" name="pdate">
					</p>
					<p>
						<label for="mdate">Manufacturing Date:</label><br>
						<input type="date" name="mdate">
					</p>
					<p>
						<label for="edate">Expiry Date:</label><br>
						<input type="date" name="edate">
					</p>
					
				</div>
				
			
			<input type="submit" name="add" value="Add Purchase">
			</form>
		<br>
	
	</div>
		
</body>

<script>
	
		var dropdown = document.getElementsByClassName("dropdown-btn");
		var i;

			for (i = 0; i < dropdown.length; i++) {
			  dropdown[i].addEventListener("click", function() {
			  this.classList.toggle("active");
			  var dropdownContent = this.nextElementSibling;
			  if (dropdownContent.style.display === "block") {
			  dropdownContent.style.display = "none";
			  } else {
			  dropdownContent.style.display = "block";
			  }
			  });
			}
			
</script>

</html>
