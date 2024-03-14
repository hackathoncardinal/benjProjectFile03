<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Vaccine Process Data</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/apple-touch-icon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="css/custom.css">
    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>
   
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<style>
		p{
				
		} 
		
	.error1{
text-align-last: center;
    color: red;
    font-weight: bold;
}
	</style>

	
</head>
<body>

	
	
</body>
</html>


<?php
 		//"dayname"   name="t_dayname"
        //"month"  name="t_month"
        //"daynum"  name="t_daynum"
        //"year"  name="t_year"
    
        //"hour"  name="t_hour"
        //"minutes"  name="t_minutes"
        //"seconds"  name="t_seconds"
		//"period"  name="t_period"
require_once("config.php");
if(isset($_POST['btnVaccine'])){
	$varFname= $_POST['txtFname'];
	$varLname= $_POST['txtLname'];
	$varMname= $_POST['txtMname'];
	$varGender= $_POST['RadioGender1'];
	$varBOD= $_POST['BOD'];
	$varAge= $_POST['txtAge'];
	$varEmail= $_POST['txtEmail'];
	$varAddress= $_POST['txtAddress'];
	$varArea= $_POST['txtArea_Type'];
	$varContact= $_POST['txtContact'];
	$varRegister_voter= $_POST['RadioRegister_voter'];
	
	
	$varStatus= "Request"; //----> Request ,Unclaim , Claimed , Decline
	
	//date set here ---> t_year-t_month-t_daynum t_hour:t_minutes:t_seconds t_period
	//$d = strtotime($_POST['t_year'],'-',$_POST['t_month'],'-',$_POST['t_daynum'],' ',$_POST['t_hour'],':',$_POST['t_minutes'],':',$_POST['t_seconds'], $_POST['t_period']);
	
	$d = strtotime('+6 hour'); //add 6hr in time
	$varRefID = date("YmdHis",$d);
	$varRequest_date =  date("Y-m-d H:i:s",$d);
	
	if(empty($varLname)||empty($varLname)||empty($varMname)||empty($varBOD)||empty($varAge)
	   ||empty($varEmail)||empty($varAddress)||empty($varContact)){
		echo "<button type='button' class= 'btn btn-default' name='backbtn' style= background: orange' onclick='history.go(-1);'> 
						Go Back 
			</button>";
		echo "<script>alert('You Did not Fill in all Fields!');</script>";
		//header("location: vaccine.php?insert=empty");
		exit();
	}else{


// user exist ------------------------------------------------------

	$Usercheck = "SELECT * From vaccine_table where (Fname='$varFname' and Lname='$varLname' and Mname='$varMname')";
	$UserChecker = mysqli_query($dbc,$Usercheck);
	$numRows1 =mysqli_num_rows($UserChecker);
	if($numRows1 >= 1){ 
		echo "User Already |Exist!!";
		header("location: QPA.php?insert=IdentityAlreadyUse");
		exit();
	}else{

	}

	
//emailcheck -------------------------------------------------------	
	
	$Emailcheck = "SELECT * From vaccine_table where (Email='$varEmail')";
	$EmailChecker = mysqli_query($dbc,$Emailcheck);
	$numRows =mysqli_num_rows($EmailChecker);
	if($numRows >= 1){ 
		echo "Email Already |Exist!!";
		header("location: vaccine.php?insert=EmailAlreadyUse");
		exit();
	}else{
		// uploading img start--------------------------- webUploads
	
//	echo "$numRows";	
//	exit();	
	
	$imgID = $varRefID;

	$fileName = $_FILES['txtFile']['name'];
	//print_r($_FILES['file']);//die();
	$fileTmpName = $_FILES['txtFile']['tmp_name'];
	$fileSize = $_FILES['txtFile']['size'];
	$fileError = $_FILES['txtFile']['error'];
	$fileType = $_FILES['txtFile']['type'];
	

	$fileExt = explode('.', $fileName);
	$flieActualExt = strtolower(end($fileExt));

	$allowed = array('jpg','jpeg','png');
 
 	$img_Upload = 'false';

	if(in_array($flieActualExt, $allowed)){
		if($fileError === 0){

			if($fileSize < 5000000){  // 1MB  = 1000000
				//$fileNameNew = uniqid('', true).".".$flieActualExt;
				$fileNameNew = 	$imgID.".".$flieActualExt;
				$fileDestanation = 'webUploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestanation);
				//header("Location: index.php?upload=success");
				$img_Upload = 'true';
			}else{	
				echo "<script>alert('Your File is too Big!');</script>";
				echo '<button type="button" class= "btn btn-default" name="backbtn" onclick="history.go(-1);"> 
						Go Back 
			</button>';
		exit();
			}
		}else
		{
			
		echo "<script>alert('There was an error uploading your file!');</script>";
		echo '<button type="button" class= "btn btn-default" name="backbtn" onclick="history.go(-1);"> 
						Go Back 
			</button>';
		exit();
		}
	}else{
		
	echo "<button type='button' class= 'btn btn-default' name='backbtn' style= background: orange' onclick='history.go(-1);'> 
						Go Back 
			</button>";
		if($fileName == ""){
			echo "<script>alert('Please Enter Picture Attachment file');</script>";
		}else{
	echo "<script>alert('you cannot upload files of this type!!!!!');</script>";
		}
		exit();
	}


		
		
		// uploading img End---------------------------
		
		
		
		//header("Location: Admin.html");
		// email valid
			$query = "INSERT INTO `vaccine_table`(`refID`,`Fname`, `Lname`, `Mname`, `Email`, `Register_voter`, `Address`, `BOD`, `Contact`, `Gender`, `Age`, `Status`, `Request_date`,`Area`,`img_type`) VALUES ('$varRefID','$varFname','$varLname','$varMname','$varEmail','$varRegister_voter','$varAddress','$varBOD','$varContact','$varGender','$varAge','$varStatus','$varRequest_date','$varArea','$flieActualExt')";
			$result = mysqli_query($dbc,$query);
			if($result)
			{
//Start Email Sender-----------------------------------------------------
				
				
$fromEmail = 'QVA issuance';
$subjectName = 'Vaccine Application Request';
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
We have received your Vaccine  form. 
<br/>Your reference number is '.$refID.'.
<br/>
We are currently processing your request, we will get back to you as soon as possible.<br/>
<br/>
<br/>
Please wait for an e-mail regarding your claiming date schedule.<br>
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
				
				header("location: QPA_MSG_SUCCESS.html");	
				exit();
			}else
			{	
			header("location: QPA_MSG_FAILED.html?insert=Failed");
				exit();
			}
		}
	} //end if
}
