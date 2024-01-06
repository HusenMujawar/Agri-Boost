<?php
	include "config.php";
	
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$qry1="SELECT * FROM meds WHERE med_id='$id'";
		$result = $conn->query($qry1);
		$row = $result -> fetch_row();
	}
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="nav2.css">
<link rel="stylesheet" type="text/css" href="form4.css">
<title>
Medicines
</title>
</head>

<body>

	<div class="sidenav" style="overflow-y:scroll, padding-left:100px;">
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
			<a href="expiryreport.php">fertilizer - Soon to Expire</a>
			<a href="salesreport.php">Transactions Reports</a>
		</div>	
	</div>

	<div class="topnav">
		<a href="logout.php">Logout</a>
	</div>
	
	<center>
	<div class="head">
	<h2> UPDATE FERTILIZER DETAILS</h2>
	</div>
	</center>

	<div class="one">
		<div class="row" style="padding-left:100px;">
			<form action="fertilizerup.php" method="post">
				<div class="column">
				<p>
					<label for="medid">Fertilizer ID:</label><br>
					<input type="number" name="medid" value="<?php echo $row[0]; ?>" readonly>
				</p>
				<p>
					<label for="medname">Fertilizer Name:</label><br>
					<input type="text" name="medname" value="<?php echo $row[1]; ?>">
				</p>
				<p>
					<label for="qty">Quantity:</label><br>
					<input type="number" name="qty" value="<?php echo $row[2]; ?>">
				</p>
				<p>
					<label for="cat">Category:</label><br>
					<input type="text" name="cat" value="<?php echo $row[3]; ?>">
				</p>
				</div>
				
				<div class="column">
				<p>
					<label for="sp">Price: </label><br>
					<input type="number" step="0.01" name="sp" value="<?php echo $row[4]; ?>">
				</p>
				<p>
					<label for="loc">Location:</label><br>
					<input type="text" name="loc" value="<?php echo $row[5]; ?>">
				</p>
				</div>
		
				<input type="submit" name="update" value="Update">
				</form>
				
	
		</div>
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