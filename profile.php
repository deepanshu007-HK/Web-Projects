<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h2>Profile</h2>
				<p>Email: <?php echo $_SESSION['email']; ?></p>
				<a href="logout.php">Logout</a>
			</div>
		</div>
	</div>
</body>
</html>
