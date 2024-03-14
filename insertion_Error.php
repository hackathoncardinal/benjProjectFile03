<?php  
	$FullUrl = "http://$SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		
	if(strpos($FullUrl,"insert=empty")){
		echo "<p class='error'> You Did not Fill in all Fields! </p> ";
	}
?>