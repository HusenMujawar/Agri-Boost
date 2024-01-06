<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="nav2.css">
<link rel="stylesheet" type="text/css" href="form4.css">
<title>
Customers
</title>
</head>

<body>

		<div class="sidenav" style="overflow-y:scroll;">
			<h2 style="font-family:Arial; color:white; text-align:center;"> Agri-Boost </h2>
			<p style="margin-top:-20px;color:white;line-height:1;font-size:12px;text-align:center">Developed by,Husen Mujawar</p>
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
	<h2> ADD CUSTOMER DETAILS</h2>
	</div>
	</center>

	<br><br><br><br><br><br><br><br>
	
	<div class="one" style="padding-left:150px;">
		<div class="row">
			<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
				<div class="column">
					<p>
						<label for="cid">Customer ID:</label><br>
						<input type="number" name="cid">
					</p>
					<p>
						<label for="cfname">First Name:</label><br>
						<input type="text" name="cfname">
					</p>
					<p>
						<label for="clname">Last Name:</label><br>
						<input type="text" name="clname">
					</p>
					<p>
						<label for="age">Age:</label><br>
						<input type="number" name="age">
					</p>
					
					<p>
						<label for="sex">Sex: </label><br>
						<select id="sex" name="sex">
								<option value="selected">Select</option>
								<option>Female</option>
								<option>Male</option>
								<option>Others</option>
						</select>
					</p>
					
				</div>
				<div class="column">
					
					<p>
						<label for="phno">Phone Number: </label><br>
						<input type="number" name="phno">
					</p>
					<p>
						<label for="emid">Email ID:</label><br>
						<input type="text" name="emid">
					</p>
				</div>
				
			
			<input type="submit" name="add" value="Add Customer">
			</form>
		<br>
		
		
			<?php
			include "config.php";
			 
			if(isset($_POST['add']))
			{
			$id = mysqli_real_escape_string($conn, $_REQUEST['cid']);
			$fname = mysqli_real_escape_string($conn, $_REQUEST['cfname']);
			$lname = mysqli_real_escape_string($conn, $_REQUEST['clname']);
			$age = mysqli_real_escape_string($conn, $_REQUEST['age']);
			$sex = mysqli_real_escape_string($conn, $_REQUEST['sex']);
			$phno = mysqli_real_escape_string($conn, $_REQUEST['phno']);
			$mail = mysqli_real_escape_string($conn, $_REQUEST['emid']);

			 
			$sql = "INSERT INTO customer VALUES ($id, '$fname', '$lname',$age,'$sex',$phno, '$mail')";
			if(mysqli_query($conn, $sql)){
				echo "<p style='font-size:8;'>Customer successfully added!</p>";
			} else{
				echo "<p style='font-size:8; color:red;'>Error! Check details.</p>";
			}
			}
			 
			$conn->close();
			?>
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