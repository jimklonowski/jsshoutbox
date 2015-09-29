<?php 
	//Connect to MySQL
	$conn = mysqli_connect("localhost", "root", "admin", "jsshoutbox");
	//Test
	if(mysqli_connect_errno()){
		echo 'Failed to connect: '.mysqli_connect_error();
	}

