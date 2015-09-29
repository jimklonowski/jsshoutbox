<?php include 'database.php'; ?>
<?php 
	//Create select query
	$query = "SELECT * FROM shouts ORDER BY id DESC";
	$shouts = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>
<head>
	<title>js ShoutBox</title>
	<link rel="stylesheet" href="css/styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<div id="container">
		<header>
			<h1>js ShoutBox</h1>
		</header>
		<div id="shouts">
			<ul>
				<?php while($row = mysqli_fetch_assoc($shouts)) : ?>
				<li>[<?php echo $row['date']; ?>] <?php echo $row['name']; ?>: <?php echo $row['shout']; ?></li>
			<?php endwhile; ?>
			</ul>
		</div>
		<footer>
			<form>
				<label>Name: </label>
				<input type="text" id="name">
				<label>Shout Text: </label>
				<input type="text" id="shout">
				<input type="submit" id="submit" value="Shout!">
			</form>
		</footer>
	</div>
</body>
</html>