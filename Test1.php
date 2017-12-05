<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title> Board</title>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Hind:300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<style>

#container{

  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  width: 100%;
  height: 1200px;
  border-radius: 5px;
  background: rgba(48, 47, 47,3);
  box-shadow: 1px 1px 50px #fff;
  
}
@media(max-width:768px)
{
	.form a,
.form input,.form select,.form textarea{
  font-family: 'Open Sans Condensed', sans-serif;
  text-decoration: none;
  position:relative;
  width: 90%;
  display: block;
  margin-top: 1% ;
  margin-bottom: 2%;
  margin-left:25%;
  font-size: 17px;
  color: #fff;
  padding: 8px;
  border-radius: 6px;
  border: none;
  background: rgba(186, 186, 186,0.1);
  -webkit-transition: all 2s ease-in-out;
  -moz-transition: all 2s ease-in-out;
  -o-transition: all 2s ease-in-out;
  transition: all 0.2s ease-in-out;
  float:left;
  
}
}
/* Heading */
.form h1{
  font-family: 'Open Sans Condensed', sans-serif;
  position: relative;
  margin-top: 0px;
  text-align: center;
  font-size: 40px;
  color: #ddd;
  text-shadow: 3px 3px 10px #000;
}

/* Inputs */
.form a,
.form input,.form select,.form textarea{
  font-family: 'Open Sans Condensed', sans-serif;
  text-decoration: none;
  position:relative;
  width: 50%;
  display: block;
  margin-top: 1% ;
  margin-bottom: 2%;
  margin-left:25%;
  font-size: 17px;
  color: #fff;
  padding: 8px;
  border-radius: 6px;
  border: none;
  background: rgba(186, 186, 186,0.1);
  -webkit-transition: all 2s ease-in-out;
  -moz-transition: all 2s ease-in-out;
  -o-transition: all 2s ease-in-out;
  transition: all 0.2s ease-in-out;
  float:left;
  
}
.form p,.form label{
	  font-family: 'Open Sans Condensed', sans-serif;
  text-decoration: none;
  position:relative;
  width: 50%;
  margin-top: 0 ;
  margin-bottom: 0;
  margin-left:25%;
  font-size: 17px;
  color: #fff;
  padding: 8px;
  border-radius: 6px;
  border: none;

  -webkit-transition: all 2s ease-in-out;
  -moz-transition: all 2s ease-in-out;
  -o-transition: all 2s ease-in-out;
  transition: all 0.2s ease-in-out;
  float:left;
  
}
.form input:focus{
  outline: none;
  box-shadow: 3px 3px 10px #333;
  background: rgba(186, 186, 186,0.18);
}
.form textarea:focus{
  outline: none;
  box-shadow: 3px 3px 10px #333;
  background: rgba(186, 186, 186,0.18);
}

/* Placeholders */
::-webkit-input-placeholder {
   color: #ddd;  }
:-moz-placeholder { /* Firefox 18- */
   color: red;  }
::-moz-placeholder {  /* Firefox 19+ */
   color: red;  }
:-ms-input-placeholder {  
   color: #333;  }

/* Link */
.form a{
  font-family: 'Open Sans Condensed', sans-serif;
  text-align: center;
  padding: 4px 8px;
  background: rgba(107,255,3,0.3);
}

.form a:hover{
  opacity: 0.7;
}

.form .btn
{
	width:100px;
	background-color:rgba(196, 17, 17,.5); 
	font-family: 'Open Sans Condensed', sans-serif;
	text-align: center;
	padding: 4px 8px;
}
</style>
<?php 
$id=$_GET['id'];
?>
<body style="background-color:lightgray;height:100%">

<div id="container" class="form">
<br><br>
<h1 >Test</h1>
<form action="<?php echo("TestController.php?id=$id")?>" method="POST" enctype="multipart/form-data">

	<textarea  name="ques1" placeholder="What is the difference between v8 &8v ?" required="required" rows="9" cols="25" style="margin-right:20px;"></textarea>
   <textarea  name="ques2" placeholder="Cloud you shift gear in manual transmission without using clutch paddle?" required="required" rows="9" cols="25" style="margin-right:20px;"></textarea>
   <textarea  name="ques3" placeholder="Do you have the ability to learn new computer program related to your Branch?" required="required" rows="9" cols="25" style="margin-right:20px;"></textarea>
   <textarea  name="ques4" placeholder="Mention any computer program you know it there " rows="9" cols="25" style="margin-right:20px;"></textarea>
   
    <input type="submit" name="submit" value="Next" class="btn "  >
	
</form>
</div>



</body>
</html>