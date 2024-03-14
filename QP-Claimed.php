<?php
require_once("config.php");

if(isset($_POST['btnClaim'])){

  $varRefID = $_POST['txtrefID'];
  $varFname = $_POST['txtFname'];
  $varEmail = $_POST['txtEmail1'];
  $vartxtPersonClaim = $_POST['txtPersonClaim'];
  
  $varStatus = "Claimed";
  $d = strtotime('+6 hour'); //add 6hr in time
  $varRequest_Claimed_date =  date("Y-m-d H:i:s",$d);

// echo "alert('$varRefID''$varEmail' '$varFname')";

//
$query = "UPDATE `qp_table` SET `Status`='$varStatus',`Request_Claimed_date`='$varRequest_Claimed_date' WHERE `refID`='$varRefID'";
$result = mysqli_query($dbc,$query);
//echo "$query";
	if($result){
		//echo "alert('Update Succes')";


		//Start Email Sender-----------------------------------------------------
				
				
$fromEmail = 'QVA issuance';
$subjectName = 'Quarantine Pass Claim';
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
This is to inform you that your Quarantine Pass has been claimed last '.$varRequest_Claimed_date.'.
<br/>
The name of the person who took your Item is '.$vartxtPersonClaim.'
<br/>
<br/>
For more inquiries, you may e-mail us at bucandalavcityofimus@gmail.com. <br/>
<hr>

<hr>
<br/>
<br/>
<br>
Thank you!
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
	header("location: Admin-QP.php?Claim=Succes");			
	//	echo "alert('DECline Succes')";		
	exit();


		
	}else{echo "alert('Error Process!!!')";
			header("location: Admin-QP.php");
	}
}else{
	
}

