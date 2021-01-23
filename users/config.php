<?php
	$conn = new mysqli("localhost","root","","supershop_management_system");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>