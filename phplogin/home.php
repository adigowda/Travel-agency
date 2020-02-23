<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit();
}
?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet" href="styles.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>DEMO</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome, <?=$_SESSION['name']?>!</p>
		</div>
		<div class="data">
			<div class="form"><a  href="form.php">View forms submitted by users</a></div>
		<div class="blog">
		<a  href="submitBlog.php">Submit a blog</a>
		</div>
		</div>

</body>
</html>