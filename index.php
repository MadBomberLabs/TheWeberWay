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
	<!-- HOME -->
	<div id="Home" class="tabcontent">
		<?php include 'templates/home_body.php'; ?>
	</div>
	
	<!-- RESIDENTIAL -->
	<div id="Residential" class="tabcontent">
		<?php include 'templates/res_body.php'; ?>
	</div>
	
	<!-- INDUSTRIAL -->
	<div id="Industrial" class="tabcontent">
		<?php include 'templates/ind_body.php'; ?>
	</div>
	
	<!-- COMMERCIAL -->
	<div id="Commercial" class="tabcontent">
		<?php include 'templates/com_body.php'; ?>
	</div>
	
	<!-- ABOUT US -->
	<div id="AboutUs" class="tabcontent">
		<?php include 'templates/about_body.php'; ?>
	</div>
	
	<!-- CONTACT -->
	<div id="Contact" class="tabcontent">
		<?php include 'templates/contact_body.php'; ?>
	</div>
	
	<!-- NEEDED FOR MENU JS -->
	<script>
		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script>

	<!-- FOOTER -->
	<?php include 'templates/footer.php'; ?>
	
</body>

</html>