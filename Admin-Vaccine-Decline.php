<?php
require_once("config.php");

if(isset($_POST['btnDecline'])){

	
if(!empty($_POST['txtReason_Type2'])){
	$r1 = "";
	$r2 = "";
	$r3 = "";
	foreach($_POST['txtReason_Type2'] as $key => $reason){
		//echo "<p> $key </p>";
		//echo "<p> $reason </p>";
		if($key == 0){
			$r1 = $reason;
		}else if($key == 1){
			$r2 = $reason;
		}else if($key == 2){
			$r3 = $reason;
		}
	}	
}else{
	echo "please select";
}
	
//echo "$r1 $r2 $r3";
	
//exit();	
	
  $varRefID = $_POST['txtrefID2'];
  $varFname = $_POST['txtFname2'];
  $varEmail = $_POST['txtEmail12'];
  
  $varStatus = "Decline";
  $d = strtotime('+6 hour'); //add 6hr in time
  $varRequest_Approved_date =  date("Y-m-d H:i:s",$d);

 echo "alert('$varRefID''$varEmail' '$varFname')";

//
$query = "UPDATE `vaccine_table` SET `Status`='$varStatus',`Email`='$varEmail$varStatus' WHERE `refID`='$varRefID'";
$result = mysqli_query($dbc,$query);
echo "$query";
	if($result){
		//echo "alert('Update Succes')";


		//Start Email Sender-----------------------------------------------------
				
				
$fromEmail = 'QVA issuance';
$subjectName = 'Vaccine Decline';
$yourName = $varFname;
$refID = $varRefID;
	
$toEmail = $varEmail;
 
//$message = $_POST['message'];
	
	

$to = $toEmail;
$subject = $subjectName;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
$message = 
'
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    </head>
<style>
    .container{
                margin:0 auto;
                width:95%;
                overflow:auto;
            }
</style>


<body>
    <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;"></span>
<div>

<br/>
<br/>
Hi! '.$yourName.'<br/>
                 <br/>
	Sorry to inform you that your request for Vaccine was declined. Please provide a valid response on the form and re-apply again.  http://bucandalateamapp.ddns.net/
<br/>
<br/>
Your information was not valid .<br/>
<hr>
	<p>'.$r1.'</p>
	<p>'.$r2.'</p>
	<p>'.$r3.'</p>
<hr>
<br/>
If you have questions or suggestions, email us at
bucandalavcityofimus@gmail.com.
<br/>
<br>
Thank you and Keep safe.
<br>
<br>
</div>
<div class="container">

        Best Regards,<br/>
        '.$fromEmail.' -  App Team
</div>
</body>
</html>
';
    $result = @mail($to, $subject, $message, $headers);
				
//end of email sender-------------------------------
	header("location: Admin-Vaccine.php?Decline=Succes");			
	//	echo "alert('DECline Succes')";		
	exit();


		
	}else{echo "alert('Error Process!!!')";
			header("location: Admin-Vaccine.php");
	}
}else{
	
}

