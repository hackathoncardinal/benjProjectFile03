<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Admin Master list Data</title>  
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

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>


<link rel="stylesheet" type="text/css" href="Login%20Form_files/util.css">
<link rel="stylesheet" type="text/css" href="Login%20Form_files/main.css">




    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
	
	
</head>
<body>


	
	
	
    <!-- LOADER -->
<!--
    <div id="preloader">
        <div class="loader">
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__ball"></div>
		</div>
    </div>
-->
	<!-- end loader -->
    <!-- END LOADER -->
    

	<style>
            .container{
                margin:0 auto;
                width:95%;
                overflow:auto;
            }
            table.gridtable {
                margin:0 auto;
                width:95%;
                overflow:auto;
                font-family: helvetica,arial,sans-serif;
                font-size:14px;
                color:#333333;
                border-width: 1px;
                border-color: #666666;
                border-collapse: collapse;
                text-align: center;
            } 
            table.gridtable th {
                border-width: 1px;
                padding: 8px;
                border-style: solid;
                border-color: #666666;
                background-color: #F6B4A5;
            }
            table.gridtable td {
                border-width: 1px;
                padding: 8px;
                border-style: solid;
                border-color: #666666;
            }
            a.bb1 {
                text-decoration: none;
            }
			tr:hover {background-color: #D8DA5C ;cursor: pointer;}
            }
        </style>
	




<?php
include("config.php"); 


if(isset($_POST['btnAddData'])){
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

	$d = strtotime('+6 hour'); //add 6hr in time
	$varRefID = date("YmdHis",$d);
	$varRequest_date =  date("Y-m-d H:i:s",$d);



	$Usercheck = "SELECT * From masterlist_table where (Fname='$varFname' and Lname='$varLname' and Mname='$varMname')";
	$UserChecker = mysqli_query($dbc,$Usercheck);
	$numRows1 =mysqli_num_rows($UserChecker);
	if($numRows1 >= 1){ 
		echo "User Already |Exist!!";
		header("location: Admin-Masterlist.php?insert=IdentityAlreadyUse");
		exit();
	}else{

	}

	$query = "INSERT INTO `masterlist_table`(`refID`, `Fname`, `Lname`, `Mname`, `Email`, `Register_voter`, `Address`, `BOD`, `Contact`, `Gender`, `Age`,`Area`) VALUES 
	('$varRefID', '$varFname', '$varLname','$varMname','$varEmail','$varRegister_voter','$varAddress','$varBOD','$varContact','$varGender','$varAge','$varArea')";
	$result = mysqli_query($dbc,$query);
	if($result){
		header("location: Admin-Masterlist.php?insert=Success");
		exit();
	}else{
		header("location: Admin-Masterlist.php?insert=Failed");
		exit();
	}
}



if(isset($_POST['btnEditData'])){

	$varTxtID= $_POST['txtID'];
	

	$d = strtotime('+6 hour'); //add 6hr in time
	$varRefID = date("YmdHis",$d);
	$varRequest_date =  date("Y-m-d H:i:s",$d);


	$Usercheck = "SELECT * From masterlist_table WHERE `refID`='$varTxtID'";
	$UserChecker = mysqli_query($dbc,$Usercheck);
	$numRows1 =mysqli_num_rows($UserChecker);

 while($res = mysqli_fetch_array($UserChecker)){ 
 	$varTxtID1 = $res['refID'];

 	$varFname= $res['Fname'];
	$varLname= $res['Lname'];
	$varMname= $res['Mname'];
	$varGender= $res['Gender'];
	$varBOD= $res['BOD'];
	$varAge= $res['Age'];
	$varEmail= $res['Email'];
	$varAddress= $res['Address'];
	$varArea= $res['Area'];
	$varContact= $res['Contact'];
	$varRegister_voter= $res['Register_voter'];

 }

	if($numRows1 >= 1){ 
		//echo "Data Exist!!";




		echo'<form method="POST" action="Admin-Masterlist-AddDataFN.php">

	<div class="form-horizontal"> 
	
			
				 <div class="form-group"> 
					<label style="color: orangered;" class="control-label col-sm-2"
					for="content"  > 
					Edit/Update Information
					</label> 
					<div class="col-sm-10"> 

					<!-- Input box to enter the 
						required data -->

					</div> 
				</div>


				<div class="form-group"> 
					<label class="control-label col-sm-2"
					for="content"> 
					ID Number : 
					</label> 
					<div class="col-sm-10"> 

					<!-- Input box to enter the 
						required data -->
					<input type="text" size="60"
						maxlength="60" class="form-control"
						id="IDnumber" name="txtID" placeholder="Please Enter existing ID number to Update " value="'.$varTxtID1.'" readonly /> 
					</div> 
				</div>


				<div class="form-group"> 
					<label class="control-label col-sm-2"
					for="content"> 
					First Name: 
					</label> 
					<div class="col-sm-10"> 

					<!-- Input box to enter the 
						required data -->
					<input type="text" size="60"
						maxlength="60" class="form-control"
						id="Firstname" name="txtFname" placeholder="Enter content" value="'.$varFname.'" readonly /> 
					</div> 
				</div>
				<!-- asdasdasdasd-->
				<div class="form-group"> 
					<label class="control-label col-sm-2"
					for="content"> 
					Last Name: 
					</label> 
					<div class="col-sm-10"> 

					<!-- Input box to enter the   
						required data -->
					<input type="text" size="60"
						maxlength="60" class="form-control"
						id="Lastname" name="txtLname" placeholder="Enter content" value="'.$varLname.'"  readonly /> 
					</div> 
				</div> 


				<div class="form-group"> 
					<label class="control-label col-sm-2"
					for="content"> 
					Middle Name: 
					</label> 
					<div class="col-sm-10"> 

					<!-- Input box to enter the 
						required data -->
					<input type="text" size="60"
						maxlength="60" class="form-control"
						id="Middle" name="txtMname" placeholder="Enter content" value="'.$varMname.'" readonly /> 
					</div> 
				</div> 


				<div class="form-group"> 
					<label class="control-label col-sm-2"
					for="content"> 
					Gender:
					</label> 
					<fieldset class="col-sm-10"> 

					<!-- Input box to enter the 
						required data -->
					<p>
					
					 '.$varGender.'
					
					</p>
					</fieldset> 
				</div> 

		
		<div class="form-group"> 
					<label class="control-label col-sm-2"
					for="content"> 
					Registered voter?:
					</label> 
					<fieldset class="col-sm-10"> 

					<!-- Input box to enter the 
						required data -->
					<p>
					
					'.$varRegister_voter.'
					
					</p>
					</fieldset> 
				</div> 
		
		
				<div class="form-group"> 
					<label class="control-label col-sm-2"
					for="content"> 
					Birth Date:
					</label> 
					<div class="col-sm-10"> 

					<!-- Input box to enter the 
						required data -->
					<input type="text" size="60"
						maxlength="60" class="form-control"
						id="BOD" name="BOD" placeholder="Enter content" value="'.$varBOD.'" readonly /> 

					</div> 
				</div> 


				<div class="form-group"> 
					<label class="control-label col-sm-2"
					for="content"> 
					Age: 
					</label> 
					<div class="col-sm-10"> 

					<!-- Input box to enter the 
						required data -->
					<input type="number" min="1" max="120" maxlength = "3"
						 class="form-control"
						id="Age" name="txtAge" pattern="[0-9]{3}" value="'.$varAge.'"  readonly /> 
					</div> 
				</div> 

			<!---------------------------------------------------->

			<div class="form-group"> 
					<label style="color: orangered;" class="control-label col-sm-2"
					for="content"  > 
					Contact Information
					</label> 
					<div class="col-sm-10"> 

					<!-- Input box to enter the 
						required data -->

					</div> 
				</div>

				<div class="form-group"> 
					<label class="control-label col-sm-2"
					for="content"> 
					Email: 
					</label> 
					<div class="col-sm-10"> 

					<!-- Input box to enter the 
						required data -->
					<input type="email" size="60"
						maxlength="60" class="form-control"
						id="EmailAddress1" name="txtEmail" placeholder="Enter content" value="'.$varEmail.'" required /> 
					</div> 
				</div> 



				<div class="form-group"> 
					<label class="control-label col-sm-2"
					for="content"> 
					Address: 
					</label> 
					<div class="col-sm-10"> 

					<!-- Input box to enter the 
						required data -->
					<input type="text" size="100"
						maxlength="100" class="form-control"
						id="Address" name="txtAddress" placeholder="Enter content" value="'.$varAddress.'" required /> 


			<select name="txtArea_Type" id="area_Type" required>
				<option value="">Please select Area</option>
				<option value="Hoteliers Village 2">Hoteliers Village 2</option>
				<option value="Sunnydale The Garden Village">Sunnydale The Garden Village</option>
				<option value="Monterra Homes Subdivision">Monterra Homes Subdivision</option>
				<option value="Gradiose South">Gradiose South</option>
				<option value="Guevarra s Compound">Guevarra s Compound</option>
			</select>

					</div> 
				</div> 




			<div class="form-group"> 
					<label class="control-label col-sm-2"
					for="content"> 
					Contact: 
					</label> 
					<div class="col-sm-10"> 

					<!-- Input box to enter the 
						required data -->
						<input type="tel" 
						 class="form-control"
						id="Contact" onkeyup="addDash(this)" name="txtContact" placeholder="xxxx-xxxx-xxx" pattern="[0-9]{4}-[0-9]{4}-[0-9]{3}" maxlength="13" value="'.$varContact.'" required /> 
						<small>Format: 1234-4566-234</small>
					</div> 
				</div> 



				<!-- Generate -->
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10"> 

					<!-- Button to generate QR Code for 
					the entered data -->
					 <button  type="submit" class= 
						"btn btn-default" style="color: white;background: orange;" 
						name="btnEditData-Selected"> 
						Update Data
					</button>

					<button  type="button" class= 
            "btn btn-default" name="ppp" onClick="btnExit()"> 
            Exit 
        	</button>

					</div> 


</form>

<script>
    function addDash (element) {		
		
        let ele = document.getElementById(element.id);
        ele = ele.value.split("-").join("");    // Remove dash (-) if mistakenly entered.
		
        let finalVal = ele.match(/.{1,4}/g).join("-");
		document.getElementById(element.id).value = finalVal;
		
		
    }
</script>

<script type="text/javascript">
  function btnExit()
  {
	    window.location = "Admin-Masterlist-Edit.php";
  }
</script>


';



		//exit();
	}else{
		echo "Data Not Found!!";
		header("location: Admin-Masterlist-Edit.php?insert=empty");
	}

exit();
//update data start

	$query = "UPDATE `masterlist_table` SET `Fname`='$varFname',`Lname`='$varLname',`Mname`='$varMname',`Email`='$varEmail',`Address`='$varAddress',`BOD`='$varBOD',`Contact`='$varContact',`Age`='$varAge',`Area`='$varArea' WHERE `refID`='$varTxtID'";

	$result = mysqli_query($dbc,$query);
	if($result){
		header("location: Admin-Masterlist-Edit.php?insert=Success");
		exit();
	}else{
		header("location: Admin-Masterlist-Edit.php?insert=Failed");
		exit();
	}
//update data end

}


if(isset($_POST['btnDeleteData'])){
	$varTxtID= $_POST['txtID'];



	$query = "DELETE FROM `masterlist_table` WHERE `refID`='$varTxtID'";

	$result = mysqli_query($dbc,$query);
	if($result){
		header("location: Admin-Masterlist-Delete.php?insert=Success");
		exit();
	}else{
		header("location: Admin-Masterlist-Delete.php?insert=Failed");
		exit();
	}
}




if(isset($_POST['btnEditData-Selected'])){

	$varTxtID= $_POST['txtID'];
	$varFname= $_POST['txtFname'];
	$varLname= $_POST['txtLname'];
	$varMname= $_POST['txtMname'];

	$varBOD= $_POST['BOD'];
	$varAge= $_POST['txtAge'];
	$varEmail= $_POST['txtEmail'];
	$varAddress= $_POST['txtAddress'];
	$varArea= $_POST['txtArea_Type'];
	$varContact= $_POST['txtContact'];


$Emailcheck = "SELECT * From masterlist_table where Email='$varEmail'";
$Usercheck = "SELECT * From masterlist_table where (Fname='$varFname' and Lname='$varLname' and Mname='$varMname')";
$Emailchecker = mysqli_query($dbc,$Emailcheck);
	$UserChecker = mysqli_query($dbc,$Usercheck);

while($res = mysqli_fetch_array($UserChecker)){ 
	$varEmailold= $res['Email'];
 }
while($res = mysqli_fetch_array($Emailchecker)){ 
	$varEmailCheck= $res['Email'];
 }

	$numRows1 =mysqli_num_rows($UserChecker);
	$numRows1EmailCheck =mysqli_num_rows($Emailchecker);




if($varEmailold == $varEmail ){

}else{

	if($numRows1EmailCheck >= 1 ){ 
		echo "User Already |Exist!! $varEmailold == $varEmail ";

		echo "<button type='button' class= 'btn btn-default' name='backbtn' style= background: orange' onclick='history.go(-1);'> 
						Go Back 
			</button>";
		echo "<script>alert('Email Already Exist Please Unique Email Address!');</script>";

		//header("location: Admin-Masterlist-Edit.php?insert=IdentityAlreadyUse");
		exit();
	}else{

	}

}








	


	//update data start

	$query = "UPDATE `masterlist_table` SET `Fname`='$varFname',`Lname`='$varLname',`Mname`='$varMname',`Email`='$varEmail',`Address`='$varAddress',`BOD`='$varBOD',`Contact`='$varContact',`Area`='$varArea' WHERE `refID`='$varTxtID'";

	$result = mysqli_query($dbc,$query);
	if($result){
		header("location: Admin-Masterlist-Edit.php?insert=Success");
		exit();
	}else{
		header("location: Admin-Masterlist-Edit.php?insert=Failed");
		exit();
	}
//update data end

}


?>





</body>
</html>
