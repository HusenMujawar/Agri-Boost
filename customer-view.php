<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="nav2.css">
<link rel="stylesheet" type="text/css" href="table1.css">
<title>
Customers
</title>
</head>

<body>

		<div class="sidenav" style="overflow-y:scroll">
			<h2 style="font-family:Arial; color:white; text-align:center;">Agri-Boost </h2>
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
				<a href="salesreport.php">Transactions Reports</a>
			</div>
	</div>

	<div class="topnav">
		<a href="logout.php">Logout</a>
	</div>
	
	<center>
	<div class="head">
	<h2>  CUSTOMER LIST</h2>
	</div>
	</center>

	
	<table align="right" id="table1" style="margin-right:100px;">
		<tr>
			<th>Customer ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Age</th>
			<th>Sex</th>
			<th>Phone Number</th>
			<th>Email Address</th>
			<th>Action</th>
		</tr>
	<?php
	
	include "config.php";
	$sql = "SELECT c_id,c_fname,c_lname,c_age,c_sex,c_phno,c_mail FROM customer";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	
		while($row = $result->fetch_assoc()) {

		echo "<tr>";
			echo "<td>" . $row["c_id"]. "</td>";
			echo "<td>" . $row["c_fname"] . "</td>";
			echo "<td>" . $row["c_lname"]. "</td>";
			echo "<td>" . $row["c_age"]. "</td>";
			echo "<td>" . $row["c_sex"] . "</td>";
			echo "<td>" . $row["c_phno"]. "</td>";
			echo "<td>" . $row["c_mail"]. "</td>";
			echo "<td align=center>";
				echo "<a class='button1 edit-btn' href=customer-update.php?id=".$row['c_id'].">Edit</a>";
				echo "<a class='button1 del-btn' href=customer-delete.php?id=".$row['c_id'].">Delete</a>";
			echo "</td>";
		echo "</tr>";
		}
	echo "</table>";
	} 

	$conn->close();
	?>
	
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