<!DOCTYPE html>
<html>
<head>
<title>K-Vector</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">


</head>

<body style="background-color:lightgray">
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('img/k1.jpg');"> 
 
<?php include("Home.php");?>
<br><br>
<?php include("slider.php");?>
</div>

<div id="about">
<?php include("About.php");?>
</div>
<div id="projects">
<?php include("Projects.php");?>
</div>
<div id="magazine">
<?php include("magazine.php");?>
</div>
<div id="events">
<?php include("Hexa-Grid.php");?>
</div>
<div id="contacts">
<?php include("Contact.php");?>
</div>
<?php include("footer.php")?>




<!-- End Top Background Image Wrapper -->
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>

