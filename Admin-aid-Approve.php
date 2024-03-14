<?php
require_once("config.php");

if(isset($_POST['btnApprove'])){
  $varSession = $_POST['txtSession'];
  $varRefID = $_POST['txtrefID'];
  $varFname = $_POST['txtFname'];
  $varEmail = $_POST['txtEmail1'];
  $varSetDateClaim = $_POST['txtDateClaim'];
  $varStatus = "Unclaimed";
  $d = strtotime('+6 hour'); //add 6hr in time
  $varRequest_Approved_date =  date("Y-m-d H:i:s",$d);
 //echo "alert('$varRefID''$varEmail')";
echo "$varSession";

if($varSession == "Morning"){
	$varSessiontxt = "Morning (8AM-12PM)";
}else{
	$varSessiontxt = "Afternoon (1PM-5PM)";
}
	
$query1 = "SELECT * FROM `aid_table` WHERE (SetClaim='$varSetDateClaim' AND sessionType='$varSession')";
$result = mysqli_query($dbc,$query1);
$numrows =	mysqli_num_rows($result);
if($numrows <= $LimitPerDay){ //if number of rows
	//echo "$numrows";
		
//
$query = "UPDATE `aid_table` SET `Status`='$varStatus',`Request_Approved_date`='$varRequest_Approved_date',`SetClaim`='$varSetDateClaim',`sessionType`='$varSession' WHERE `refID`='$varRefID'";
$result = mysqli_query($dbc,$query);

	if($result){
		//echo "alert('Update Succes')";


		//Start Email Sender-----------------------------------------------------			
$fromEmail = 'QVA issuance';
$subjectName = 'Aid Schedule';
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
Your request for Aid form has been accepted. 
<br/>Your reference number is '.$refID.'.
<br/>
Please visit the barangay office at this schedule.<br/>
<hr>
Scheduled Date: '.$varSetDateClaim.'
<p>Scheduled Time: '.$varSessiontxt.'</p>
<hr>
<br/>
<br/>
Do not forget to bring your valid ID and a copy of your reference number.<br>
Kindly follow the safety and health protocols.<br>
Thank you and Keep Safe!
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
	header("location: Admin-Aid.php?Approve=Succes");			
				
	exit();


		
	}else{echo "alert('Error Process!!!')";
			header("location: Admin-Aid.php?Approve=Error");
	}
	
}else{
	echo "<script>alert('you have reached the maximum capacity per day <$numrows> <$LimitPerDay>');</script>";
	echo '<button  type="button" class= 
						"btn btn-default" style="color: white;background: orange;" 
						name="btnBack" onClick="history.go(-1);"> 
						BACK';
						exit();

}

	

}else{
	
}

