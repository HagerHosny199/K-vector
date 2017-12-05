<?php
include("database.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$Email=$_POST['email'];
	$Name=$_POST['name'];
	$Message=$_POST['message'];
	
$sql = "INSERT INTO contacts (USERNAME, EMAIL, MESSAGE)
VALUES ('$Name', '$Email', '$Message')";

}
 header('Location:index.php');  
$conn->close();
?>
