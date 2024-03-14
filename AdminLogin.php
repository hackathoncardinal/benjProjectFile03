<?php

function alert($msg) {
    	echo "<script type='text/javascript'>
			alert('$msg');
			</script>";
}

require_once("config.php");
if(isset($_POST['buttonLogin1'])){
	$login = $_POST['username'];
	$password = $_POST['password'];
	$query = "SELECT * From adminuser where (username='$login' And password='$password')";
	$result = mysqli_query($dbc,$query);
	$numRows =mysqli_num_rows($result);
	if($numRows == 1){
		//echo "Succes Login!!";	
		header("Location: Admin-Dashboard.php");
	}else{
		//header("Location: Admin.html");
		//alert("Failed Login!!");

echo "<script>alert('Failed Login!!!');</script>";
		echo '<button type="button" class= "btn btn-default" name="backbtn" onclick="history.go(-1);"> 
						Go Back 
			</button>';
		exit();

	}
}
?>
