<?php
	session_start();
	if (isset($_SESSION['login']) ) { } else {
		header('location:index.php');
		exit();
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Prayer</title>
		<meta charset = "UTF-8">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name = "viewport" content = "width=device-width,height=device-height,initial-scale=1.0,user-scalable=no,user-scalable=0">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400' rel='stylesheet' type='text/css'>
		<link rel = "stylesheet" type = "text/css" href = "./lib/bootstrap.css">
		<link rel = "stylesheet" type = "text/css" href = "./css/prayer.css">
		<link rel="icon" type="image/png" href="./images/favicon.png">
		<link rel="apple-touch-icon-precomposed" href="./images/favicon.png"/>
		<script type = "text/javascript" src = "./lib/jquery.js"></script>
		<script type = "text/javascript" src = "./lib/bootstrap.js"></script>
		<script type = "text/javascript" src = "./js/prayer.js"></script>
	</head>
	<body>
		<nav class = "navbar navbar-inverse navbar-fixed-top" role = "navigation">
			<div class="navbar-header">
				<div class = "navbar-brand hidden-xs"><a href="landing.php"><img src="./images/logo.png" class="navbar-image"></a></div>
				<div class = "navbar-brand brand-center visible-xs"><a href="landing.php"><img src="./images/logo.png" class="navbar-image"></a></div>
			</div>
		</nav>
		<div id="cbox" style="display:none">
			<div id="prayer"></div>
			<div id="source"></div>
		</div>
	</body>
</html>