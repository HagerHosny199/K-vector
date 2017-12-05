<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName="kvector";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbName);
$conn->query("SET NAMES 'utf8'");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
	echo 'hello in data base lab lab lab <br>';
?>