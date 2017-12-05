<?php
include("database.php");

if($_SERVER['REQUEST_METHOD']=='POST')
{
	$Email=$_POST['email'];
	$Name=$_POST['name'];
	//$Field=$_POST['section2'];
	$oc=$_POST['OC2'];
	if($oc!="none")
	$COMMITTEE=$oc;

$PR=$_POST['PR'];
	if($PR!="none")
	$COMMITTEE=$PR;
$Automotive=$_POST['Automotive'];
	if($Automotive!="none")
	$COMMITTEE=$Automotive;
$Multimedia=$_POST['Multimedia'];
	if($Multimedia!="none")
	$COMMITTEE=$Multimedia;

$Marketing=$_POST['Marketing'];
	if($Marketing!="none")
	$COMMITTEE=$Marketing;

$Academic=$_POST['Academic'];
	if($Academic!="none")
	$COMMITTEE=$Academic;

$Jouniors=$_POST['Jouniors'];
	if($Jouniors!="none")
	$COMMITTEE=$Jouniors;


	$Phone=$_POST['phone'];
	$Message=$_POST['message'];
echo($COMMITTEE);

	$sql = "INSERT INTO Board (NAME, EMAIL,COMMITTEE,PHONE, MESSAGE)
VALUES ('$Name', '$Email','$COMMITTEE','$Phone','$Message')";
mysqli_query($conn, $sql);
echo($sql);
$query = "SELECT MAX(ID) FROM Board ";
	
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_row($result);
	$id=$row[0];
echo($id);
$query = "SELECT MESSAGE FROM Board ";
	
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_row($result);
	$MSG=$row[0];
	echo($MSG);
/*	if($COMMITTEE=='Engine')
	{
   header('Location:Test1.php?id='.$id);  
	}
	else if($COMMITTEE=='suspension')
	{
     header('Location:Test2.php?id='.$id);  
	}
	else if($COMMITTEE=='Aerodynamics')
	{
     header('Location:Test3.php?id='.$id);  
	}
else
{
	header('Location:Thanks.php');
}*/

}
  
$conn->close();
?>
