<?php include 'database.php'; ?>

<?php
	if(isset($_POST['name']) && isset($_POST['shout'])){
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$shout = mysqli_real_escape_string($conn, $_POST['shout']);
		$date = mysqli_real_escape_string($conn, $_POST['date']);

		// Set Timezone
		date_default_timezone_set('America/Chicago');
		$date = date('h:i:s a', time());

		//Insert query
		$query = "INSERT INTO shouts (name, shout, date) VALUES ('$name', '$shout', '$date')";

		//Validation
		if(!mysqli_query($conn, $query)){
			echo 'Error: '.mysqli_error($conn);
		}else{
			echo '<li>['.$date.'] '.$name.': '.$shout.'</li>';
		}
	}