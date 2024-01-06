<?php
		$conn = mysqli_connect("localhost", "root", "", "agri-boost");
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
?>