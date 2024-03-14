<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Approve and Decline</title>
</head>

<body>
</body>
</html>

<?php
include("config.php");
session_start();


if(isset($_POST['btnApprove'])){
	$varRefID = "<script>localStorage.getItem('LS_refID');</script>";
	$varStatus= "Unclaim"; //----> Request ,Unclaim , Claimed , Decline
	$varSetDateClaim = $_POST['txtDateClaim'];
	//date set here ---> t_year-t_month-t_daynum t_hour:t_minutes:t_seconds t_period
	//$d = strtotime($_POST['t_year'],'-',$_POST['t_month'],'-',$_POST['t_daynum'],' ',$_POST['t_hour'],':',$_POST['t_minutes'],':',$_POST['t_seconds'], $_POST['t_period']);
	
	$d = strtotime('+6 hour'); //add 6hr in time
	
	$varRequest_Approved_date =  date("Y-m-d H:i:s",$d);
	print_r($varRefID);
	exit();
	if(empty($varRefID)){
		echo "<button type='button' class= 'btn btn-default' name='backbtn' style= background: orange' onclick='history.go(-1);'> 
						Go Back 
			</button>";
		echo "<script>alert('Error data was not vaild to process');</script>";
		//header("location: QPA.php?insert=empty");
		exit();
	}else{
	
// start of Approve and update -------------------------------------------------------	
		
		//header("Location: Admin.html");
		// email valid
			$query = "UPDATE `qp_table` SET `Status`='$varStatus',`Request_Approved_date`='$varRequest_Approved_date',`SetClaim`='$varSetDateClaim' WHERE `refID`='$varRefID";
			$result = mysqli_query($dbc,$query);
// end of Approve and update -------------------------------------------------------	
if($result){
			
//Start Email Sender-----------------------------------------------------
				
				
$fromEmail = 'Bucandala Contact Tracing';
$subjectName = 'Quarantine Application Request';
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
Email sent by Admin to citizen..
<br/>
<br/>
Hi '.$yourName.'!<br/>
                 <br/>
We have received your Quaratine Pass Application,  your reference number is #'.$refID.'.
<br/>
We will get back to you about your Quarantine Pass Request as soon as possible.<br/>
<br/>
<br/>
Please wait for our next message to get your Quarantine ID.
<br>
<br>
</div>
<div class="container">

        Best Regards,<br/>
        '.$fromEmail.' - App Team
</div>
</body>
</html>
';
    $result = @mail($to, $subject, $message, $headers);
				
//end of email sender-------------------------------
				
				header("location: QPA_MSG_SUCCESS.html");	
				exit();
			}else
			{	
			header("location: QPA_MSG_FAILED.html?insert=Failed");
				exit();
			}	
	}
	
}else{
	exit();
}


if(isset($_POST['btnDecline'])){
	alert("decline in Fn"); exit();
}



?>