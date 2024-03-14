<?php
include("config.php"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Data Selected</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->


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
	
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>





<body>
						
    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__ball"></div>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
<div id="data1">
<form method="POST" action="QP-Approve.php" enctype="multipart/form-data" onsubmit="return Approve()" > 
    <div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box" style="color: #000">
                        <h4>Client Data</h4>
                        <h2 id="refID" name="refID">ID number</h2>
						
						<input hidden id="txtEmail1" name="txtEmail1">
                        <input hidden id="txtrefID" name="txtrefID">
                     	<input hidden id="txtFname" name="txtFname">
						
                        Fname : <span id="Fname"></span><br> 
						
						Lname : <span id="Lname"></span><br> 
						Mname : <span id="Mname"></span><br> 
						Email : <span id="Email1"></span><br>
						
						Register voter : <span id="Register_voter"></span><br>
						Address : <span id="Address"></span><br> 
						BOD : <span id="BOD"></span><br> 
						Contact : <span id="Contact"></span><br> 
						Gender : <span id="Gender"></span><br> 
						Age : <span id="Age"></span><br> 
						Status : <span id="Status1"></span><br> 
						Request_date : <span id="Request_date"></span><br> 
						
<!--
						img_type : <span hidden="" id="img_type"></span><br> 
						imgDIR : <span hidden="" id="dir_img" name="dir_img"> </span><br> 
-->
<hr>
<div class="form-horizontal" style="text-align: center;"> 
	
					<label class="control-label col-sm-2"
					for="content"> 
					Set Date Claim:
					</label> 
					<div class="col-sm-10"> 

					<!-- Input box to enter the 
						required data -->
					<div style="text-align-last: justify;font-weight: bold;">
					
					<input type="radio" name="txtSession" value="Morning" id="txtSession1">Morning
					Afternoon<input type="radio" name="txtSession" value="Afternoon" id="txtSession2">
					</div>
					<small id = "txtlimitperday">Max Entries &#91; <?php echo "$LimitPerDay"; ?>  &#93;</small>
					<input type="date"
						 class="form-control"
						id="txtDateClaim" name="txtDateClaim" /> 
					</div> 
					
	
					<button  type="submit" class= 
						"btn btn-default" style="color: white;background: orange;" 
						name="btnApprove" id="btnApprove" > 
						Approve Request
					</button>
					
	</form>
					
	<form method="POST" action="QP-Decline.php" enctype="multipart/form-data" onsubmit="return Decline()" > 
						<input hidden id="txtEmail12" name="txtEmail12">
                        <input hidden id="txtrefID2" name="txtrefID2">
                     	<input hidden id="txtFname2" name="txtFname2">
		<label hidden style="color: #fff" class="control-label col-sm-2"
					for="content"> 
					Set Date Claim:
		</label> 
				<span  id="refID" name="refID" style="color: #fff">ID number</span>
				<span id="Email1" name="Email1" style="color: #fff">Email</span><br>
					
		
		<div style="text-align-last: left;">
		
			<p><input type="checkbox" id="txtReason_Type21" name="txtReason_Type2[]" value="AGE RESTRICTIONS, 15 YEARS OLD AND ABOVE.">AGE RESTRICTIONS, 15 YEARS OLD AND ABOVE.</p>
			<p><input type="checkbox" id="txtReason_Type22" name="txtReason_Type2[]" value="NOT A VALID ID">NOT A VALID ID</p>
			<p><input type="checkbox" id="txtReason_Type23" name="txtReason_Type2[]" value="LOCATION IS NOT IN BARANGAY BUCANDALA V, IMUS, CAVITE">LOCATION IS NOT IN BARANGAY BUCANDALA V, IMUS, CAVITE</p>

			
	
		</div>
				
		
		
		
					<button  type="submit" class= 
						"btn btn-default" style="color: white;background: Red;" 
						name="btnDecline" id="btnDecline"> 
						Decline Request
					</button>
				
				
	</form>
						<button  type="button" class= 
						"btn btn-default" style="color: white;background: orange;" 
						name="btnBack" onClick="history.go(-1);"> 
						BACK
						</button>
</div>

<hr>
				
						
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                       <div class="post-media wow fadeIn">
					  
					  <img id='Attach' src = "" alt="" class="img-responsive img-rounded"/>
                      
<!--
<?php
		
		//$img_File = "webUploads/noattach.jpg";
		//$img_File = $_GET['dir_img'];
		// echo "<img id='Attach' src = '{$img_File}' alt='' class='img-responsive img-rounded' /> "
?>
-->
						   
                    </div><!-- end media -->
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->


			
            <hr class="hr1"> 
		
        </div><!-- end container -->
    </div><!-- end section -->

</div>
	
	
	

  <?php include("Footer.php"); ?>

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>    

</body>




<script>
 //displaying the value from local storage to another page by their respective Ids
	document.getElementById("Email1").innerHTML = localStorage.getItem("LS_Email",Email1);
	document.getElementById("refID").innerHTML = localStorage.getItem("LS_refID",refID);
	document.getElementById("Fname").innerHTML = localStorage.getItem("LS_Fname",Fname);
	document.getElementById("Lname").innerHTML = localStorage.getItem("LS_Lname",Lname);
	document.getElementById("Mname").innerHTML = localStorage.getItem("LS_Mname",Mname);
	document.getElementById("Register_voter").innerHTML = localStorage.getItem("LS_Register_voter", Register_voter);
	document.getElementById("Address").innerHTML = localStorage.getItem("LS_Address",Address);
	document.getElementById("BOD").innerHTML = localStorage.getItem("LS_BOD",BOD);
	document.getElementById("Contact").innerHTML = localStorage.getItem("LS_Contact",Contact);
	document.getElementById("Gender").innerHTML = localStorage.getItem("LS_Gender",Gender);
	document.getElementById("Age").innerHTML = localStorage.getItem("LS_Age",Age);
	document.getElementById("Status1").innerHTML = localStorage.getItem("LS_Status",Status1);
	document.getElementById("Request_date").innerHTML = localStorage.getItem("LS_Request_date",Request_date);
	document.getElementById("img_type").innerHTML = localStorage.getItem("LS_img_type",img_type);
//	document.getElementById("Email1").innerHTML = localStorage.getItem("LS_Email",Email);
	document.getElementById("dir_img").innerHTML ='webUploads/' + localStorage.getItem('LS_refID') +'.'+ localStorage.getItem('LS_img_type');
</script>

<script>
	let locationIMG = 'webUploads/' + localStorage.getItem('LS_refID') +'.'+ localStorage.getItem('LS_img_type');
	
	if(localStorage.getItem('LS_img_type') == ""){
	    locationIMG = "webUploads/noattach.jpg";
	   }else{
	   
	   }
	
	document.getElementById("Attach").src = locationIMG;
</script>


<script type = "text/javascript">

function Approve(){
	document.getElementById("txtFname").value = localStorage.getItem("LS_Fname",Fname);
	document.getElementById("txtrefID").value = localStorage.getItem("LS_refID",refID);
	document.getElementById("txtEmail1").value = localStorage.getItem("LS_Email",Email1);
	
	if (document.getElementById("txtSession1").checked == false && document.getElementById("txtSession2").checked == false){
		 alert("Please Select Session");
		return false;
		}else{
			
		if(confirm("Are you sure you want to Approve this record?\n")){
			if(document.getElementById("txtDateClaim").value == ""){
				alert("Set Date claim is Null!");
				return false;

			}else{
				return true;
			}
			}else{
				return false;
			}
			 
		} 
}
	
	
</script>
	
<script>
function Decline(){
//	 alert(document.getElementById("txtEmail12").value );
	document.getElementById("txtFname2").value = localStorage.getItem("LS_Fname",Fname);
	document.getElementById("txtrefID2").value = localStorage.getItem("LS_refID",refID);
	document.getElementById("txtEmail12").value = localStorage.getItem("LS_Email",Email1);
	//alert(document.getElementById("txtEmail2").value +"11111" +'*'+ document.getElementById("txtrefID2").value +"*"+ document.getElementById("txtFname2").value);
	//alert(document.getElementById("txtReason_Type2[]").checked +document.getElementById("txtEmail12").value+document.getElementById("txtrefID2").value );
	if(document.getElementById("txtReason_Type21").checked == false && 			     document.getElementById("txtReason_Type22").checked == false && document.getElementById("txtReason_Type23").checked == false){
	   alert("Please Select Reason");
		return false;
	}else
	{
			if(confirm("Are you sure you want to Decline this record?\n")){
			return true;
			}else{
			return false;
			}
	}
	
	
	

        
}
</script>
	
	
</html>