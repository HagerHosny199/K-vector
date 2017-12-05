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

<body style="background-color:lightgray;height:100%">

<div id="container" class="form">
<br><br>
<h1 >Board Requirement</h1>
<form action="BoardController.php" method="POST" enctype="multipart/form-data">

    <input type="name" name="name" placeholder="Name" required="required">
	<input type="number" name="phone" placeholder="Phone Number" required="required">
	<input type="email" name="email" placeholder="E-mail" required="required" >
	<!-- start of sections -->
     <p style="font-size:30px">Sections:</p>
	 <label class="radio-inline">
      <input id="OCSection" name="action" class="control" type="radio" value="oc">OC section
    </label><br>
	
    <label class="radio-inline">
      <input id="PRSection" name="action" type="radio" value="pr">PR section 
    </label><br>
	
   <label class="radio-inline">
      <input id="AutomotiveSection" name="action" type="radio" value="auto"> Automotive section 
    </label><br>
	
	<label class="radio-inline">
      <input id="MagazineSection" name="action" type="radio" value="mag"> Magazine 
    </label><br>
	
	<label class="radio-inline">
      <input id="MultimediaSection" name="action" type="radio" value="multi"> Multimedia section 
    </label><br>
	
	<label class="radio-inline">
      <input  id="MarketingSection" name="action" type="radio" value="markt"> Marketing section 
    </label><br>
	
	<label class="radio-inline">
      <input id="AcademicSection" name="action" type="radio" value="acad">Academic section  
    </label><br>
	
	<label class="radio-inline">
      <input id="JouniorsSection" name="action" type="radio" value="jun">Jouniors Section
    </label><br>
	<!-- end of sections -->
	
	<!-- OC committees -->
	<select style="display:none" name="OC2" id="OC">
	<option style="color:black" value="none"></option>
	<option style="color:black" value="DCR">DCR</option>
	<option  style="color:black" value="HR">HR</option>
	</select>
	<!-- OC committees -->
	
<!-- PR  committees -->
	<select style="display:none" name="PR" id="PR">
	<option style="color:black" value="none"></option>
	<option style="color:black" value="EPR">EPR</option>
	<option style="color:black" value="IPR">IPR</option>
	<option style="color:black" value="FR">FR</option>
	</select>
	<!-- PR committees -->
	
<!-- Automotive   committees -->
	<select style="display:none" id="Automotive" name="Automotive">
	<option style="color:black" value="none"></option>
	<option style="color:black" value="Engine">Engine and Transmission</option>
	<option style="color:black" value="suspension">suspension</option>
	<option style="color:black" value="Aerodynamics">Aerodynamics</option>
	</select>
	<!-- Automotive committees -->
	

<!-- Multimedia    committees -->
	<select style="display:none" id="Multimedia" name="Multimedia">
	<option style="color:black" value="none"></option>
	<option style="color:black" value="IT">IT</option>
	<option style="color:black" value="Photography">Photography and video making </option>
	</select>
	<!-- Multimedia  committees -->
	

<!-- Marketing  committees -->
	<select style="display:none" id="Marketing" name="Marketing">
	<option style="color:black" value="none"></option>
	<option style="color:black" value="socialMedia">social media </option>
	<option style="color:black" value="design">design </option>
	</select>
	<!-- Marketing   committees -->
	

<!-- Academic committees -->
	<select style="display:none" id="Academic" name="Academic">
	<option style="color:black" value="none"></option>
	<option style="color:black" value="RoboticsAcademic">Robotics</option>
	<option style="color:black" value="android">android  </option>
	<option style="color:black" value="WebDesign">Web design   </option>
	<option style="color:black" value="photoshop">photoshop  </option>
	<option style="color:black" value="softSkills">soft skills </option>
	<option style="color:black" value="EmbeddedSystems">Embedded Systems</option>
	</select>
	<!-- Academic    committees -->
	
	
<!-- Jouniors  committees -->
	<select style="display:none" id="Jouniors" name="Jouniors">
	<option style="color:black" value="none"></option>
	
	<option style="color:black" value="RoboticsJuniors">Robotics</option>
	<option style="color:black" value="AutomotiveJuniors">Automotive   </option>
	<option style="color:black" value="softSkillsJuniors">soft skills </option>
	</select>
	<!-- Jouniors     committees -->
	
	<textarea  name="message" placeholder="Why do you want to apply for this position ?" required="required" rows="9" cols="25" style="margin-right:20px;"></textarea>
   
    <input type="submit" name="submit" value="Next" class="btn "  >
	
</form>
</div>




<script>
 jQuery(function(){
      jQuery("#OCSection").click(function () {
      
        jQuery("#PR").hide("1");
		jQuery("#Automotive").hide("1");
		jQuery("#Multimedia").hide("1");
		jQuery("#Marketing").hide("1");
		jQuery("#Jouniors").hide("1");
		jQuery("#Academic").hide("1");
		  jQuery("#OC").show("1");
      });
    });
	
 jQuery(function(){
      jQuery("#PRSection").click(function () {

		jQuery("#OC").hide("1");
		jQuery("#Automotive").hide("1");
		jQuery("#Multimedia").hide("1");
		jQuery("#Marketing").hide("1");
		jQuery("#Jouniors").hide("1");
		jQuery("#Academic").hide("1");
		jQuery("#PR").show("1");
      });
    });
	
 jQuery(function(){
      jQuery("#AutomotiveSection").click(function () {
       
		jQuery("#PR").hide("1");
		jQuery("#OC").hide("1");
		jQuery("#Multimedia").hide("1");
		jQuery("#Marketing").hide("1");
		jQuery("#Jouniors").hide("1");
		jQuery("#Academic").hide("1");
		 jQuery("#Automotive").show("1");
      });
    });
	
 jQuery(function(){
      jQuery("#MultimediaSection").click(function () {
       
		jQuery("#PR").hide("1");
		jQuery("#Automotive").hide("1");
		jQuery("#OC").hide("1");
		jQuery("#Marketing").hide("1");
		jQuery("#Jouniors").hide("1");
		jQuery("#Academic").hide("1");
		 jQuery("#Multimedia").show("1");
      });
    });
	
 jQuery(function(){
      jQuery("#MarketingSection").click(function () {
        
		jQuery("#PR").hide("1");
		jQuery("#Automotive").hide("1");
		jQuery("#Multimedia").hide("1");
		jQuery("#OC").hide("1");
		jQuery("#Jouniors").hide("1");
		jQuery("#Academic").hide("1");
		jQuery("#Marketing ").show("1");
      });
    });
 jQuery(function(){
      jQuery("#JouniorsSection").click(function () {
       
		jQuery("#PR").hide("1");
		jQuery("#Automotive").hide("1");
		jQuery("#Multimedia").hide("1");
		jQuery("#Marketing").hide("1");
		jQuery("#OC").hide("1");
		jQuery("#Academic").hide("1");
		 jQuery("#Jouniors ").show("1");
      });
    });
 jQuery(function(){
      jQuery("#AcademicSection").click(function () {
        
		jQuery("#PR").hide("1");
		jQuery("#Automotive").hide("1");
		jQuery("#Multimedia").hide("1");
		jQuery("#Marketing").hide("1");
		jQuery("#Jouniors").hide("1");
		jQuery("#OC").hide("1");
		jQuery("#Academic").show("1");
      });
    });
</script>
</body>
</html>