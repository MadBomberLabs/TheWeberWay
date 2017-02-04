<!doctype html>
<html>
<head>
	<meta charset="utf-8">

	<title>Welcome!</title>
	
	<!-- Stylesheet Links -->
	<link rel="stylesheet" type="text/css" href="./css/header.css" />
	<link rel="stylesheet" type="text/css" href="./css/master.css" />
	
	<!-- JS Links -->
	<script type="text/javascript" src="js/master.js"></script>
	
</head>

<body>
	
	<!-- HEADER -->
	<?php include 'templates/header.php'; ?>
	
	<!--BODY -->
	<div id="home_body" class="invisible">
		<?php include 'templates/home_body.php'; ?>
	</div>
	
	<div id="res_body" class="invisible">
		<?php include 'templates/res_body.php'; ?>
	</div>

	<!-- FOOTER -->
	<?php include 'templates/footer.php'; ?>
	
</body>

</html>