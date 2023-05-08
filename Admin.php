<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style>
		.card:hover {
			box-shadow: 0 0 10px rgba(0,0,0,.5);
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">My Website</a>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Logout</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container mt-5">
		<div class="row">
			<div class="col-md-2">
				<div class="card" style="height:300px;">
					<div class="card-body">
                    <a class="nav-link" href="Captain_Account.php"><h5 class="card-title">Manage Green Captain Accounts</h5></a>
						<p class="card-text">Some text goes here.</p>
					</div>
				</div>
			</div>
			<div class="col-md-2">
            <div class="card" style="height:300px;">
					<div class="card-body">
					<h5 class="card-title"><a href="Collecting_Staff.php"> Manage Collecting Staff</a></h5>
						<p class="card-text">Some text goes here.</p>
						</div>
				</div>
			</div>
			<div class="col-md-2">
            <div class="card" style="height:300px;">
					<div class="card-body">
						<h5 class="card-title"><a href="GTF_Account.php"> Manage GTF Member Accounts</a></h5>
						<p class="card-text">Some text goes here.</p>
					</div>
				</div>
			</div>
			<div class="col-md-2">
            <div class="card" style="height:300px;">
					<div class="card-body">
						<h5 class="card-title">Post articles</h5>
						<p class="card-text">Some text goes here.</p>
					</div>
				</div>
			</div>
			<div class="col-md-2">
            <div class="card" style="height:300px;">
					<div class="card-body">
						<h5 class="card-title">Manage Articles</h5>
						<p class="card-text">Some text goes here.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
