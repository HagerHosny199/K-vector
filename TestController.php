<?php
include("database.php");
//mysqli_query("SET NAMES 'utf8'");
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$QUES1=$_POST['ques1'];
	$QUES2=$_POST['ques2'];
    $QUES3=$_POST['ques3'];	
	$QUES4=$_POST['ques4'];
$sql = "UPDATE Board SET QUES1='$QUES1',
QUES2='$QUES2',
QUES3='$QUES3',
QUES4='$QUES4'
 WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}


	


}
 header('Location:Thanks.php');  
$conn->close();
?>
