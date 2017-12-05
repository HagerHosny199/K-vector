<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
<META HTTP-EQUIV="Content-language" CONTENT="ar">
  <title>High Board</title>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Hind:300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<style>
.control:checked ~ .conditional,
			#immigrant:checked ~ .conditional,
			#required-2:checked ~ .conditional
			#option-2:checked ~ .conditional {
				clip: auto;
				height: auto;
				margin: 0;
				overflow: visible;
				position: static;
				width: auto;
			}

			.control:not(:checked) ~ .conditional,
			#immigrant:not(:checked) ~ .conditional,
			#required-2:not(:checked) ~ .conditional,
			#option-2:not(:checked) ~ .conditional {
				border: 0;
				clip: rect(0 0 0 0);
				height: 1px;
				margin: -1px;
				overflow: hidden;
				padding: 0;
				position: absolute;
				width: 1px;
			}
</style>
<body style="background-color:white;height:100%">
	<form action="">

			<input type="checkbox" id="requirement" class="control" >
		
			
					
			<label for="requirement">Check me</label>
			<input type="checkbox" id="requirement2" class="control">
	    	<label for="requirement2">Check me2</label>
			
				<p style="display:none" id="test" >test</p>	
		</form>
           
	



<script>
 jQuery(function(){
      jQuery("#requirement").click(function () {
        jQuery("#test").toggle("slow");
      });
    });
</script>
</body>
</html>