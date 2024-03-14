<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Master list Data</title>  
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
<body onload="initClock(),loading();">

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
    

 <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
                            
            <div class="container-fluid">
                <div class="navbar-header">
					<a class="navbar-brand" href="#"><img src="images/logos/masterlist.png" style="width: 100%;" alt="image"></a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                  		<li><a  href="index.html">Home</a></li>
                        <li><a class="active" href="masterlist.php">Master list Data</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>




               
  <form method="POST" action="identitycheck.php" enctype="multipart/form-data" onsubmit="return BlankData()">          
<div class="container-fluid"> 
   <div  style="margin: auto;">
    <!--digital clock start-->
    <div class="datetime">
      <div class="date">
        <span id="dayname"   name="t_dayname">Day</span>,
        <span id="month"  name="t_month">Month</span>
        <span id="daynum"  name="t_daynum">00</span>,
        <span id="year"  name="t_year">Year</span>
      </div>
      <div class="time">
        <span id="hour"  name="t_hour">00</span>:
        <span id="minutes"  name="t_minutes">00</span>:
        <span id="seconds"  name="t_seconds">00</span>
        <span id="period"  name="t_period">AM</span>
      </div>
    </div>
    <!--digital clock end-->
 <script type="text/javascript">
    function updateClock(){
      var now = new Date();
      var dname = now.getDay(),
          mo = now.getMonth(),
          dnum = now.getDate(),
          yr = now.getFullYear(),
          hou = now.getHours(),
          min = now.getMinutes(),
          sec = now.getSeconds(),
          pe = "AM";
          
          if(hou >= 12){
            pe = "PM";
          }
          if(hou == 0){
            hou = 12;
          }
          if(hou > 12){
            hou = hou - 12;
          }

          Number.prototype.pad = function(digits){
            for(var n = this.toString(); n.length < digits; n = 0 + n);
            return n;
          }

          var months = ["January", "February", "March", "April", "May", "June", "July", "Augest", "September", "October", "November", "December"];
          var week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
          var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
          var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
          for(var i = 0; i < ids.length; i++)
          document.getElementById(ids[i]).firstChild.nodeValue = values[i];
    }

    function initClock(){
      updateClock();
      window.setInterval("updateClock()", 1);
    }


    </script>
 
</div>

	<div class="form-horizontal"> 
	
			
				 <div class="form-group"> 
					<label style="color: orangered;" class="control-label col-sm-2"
					for="content"  > 
					Enter Valid Information
					</label> 
					<div class="col-sm-10"> 

					<!-- Input box to enter the 
						required data -->

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
						id="Firstname" name="txtFname" placeholder="Enter content" /> 
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
						id="Lastname" name="txtLname" placeholder="Enter content" /> 
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
						id="Middle" name="txtMname" placeholder="Enter content" /> 
					</div> 
				</div> 



				<!-- Generate -->
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10"> 

					<!-- Button to generate QR Code for 
					the entered data -->
					 <button  type="submit" class= 
						"btn btn-default" style="color: white;background: orange;" 
						name="btnidentity"> 
						Identity Check
					</button>

					 <button hidden type="button" class= 
						"btn btn-default" name="btnClear" onclick="clear1();"> 
						Clear all 
					</button>

					</div> 
					
					<div>
					<?php  
						$FullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
						
						if(strpos($FullUrl,"insert=empty")){
							echo "<p class='error1'> You Did not Fill in all Fields! </p> ";
						}elseif(strpos($FullUrl,"insert=EmailAlreadyUse")){
							echo "<p class='error1'> Your Email Address is Already in use!!! </p> ";
						}elseif(strpos($FullUrl,"insert=IdentityAlreadyUse")){
							echo "<p class='error1'> Your Firstname and lastname is Already in use!!! </p> ";
						}
						
					?>
					</div>
					
				</div> 
	
	</div> <!--F hori-->
</div>	<!--C fluid-->
</form><!--F End-->

			
			 <hr class="hr1"> 
    


<script type="text/javascript">
  function BlankData()
  {	
	  document.getElementById("Firstname").style.borderColor = "#555";
	  document.getElementById("Lastname").style.borderColor = "#555";
	  document.getElementById("Middle").style.borderColor = "#555";
	
	  
	if(document.getElementById("Firstname").value == "" ){
			document.getElementById("Firstname").style.borderColor = "red";
			document.getElementById("Firstname").focus();
			alert("Please enter your First name!");
			return false;
	}else if(document.getElementById("Lastname").value == "" ){
			document.getElementById("Lastname").style.borderColor = "red";
			document.getElementById("Lastname").focus();
			alert("Please enter your Lastname !");
			return false;
	}else if(document.getElementById("Middle").value == "" ){
			document.getElementById("Middle").style.borderColor = "red";
			document.getElementById("Middle").focus();
			alert("Please enter your Middle Name !");
			return false;
	}else if(document.getElementById("RadioGender1").value == "" ){
			document.getElementById("RadioGender1").style.borderColor = "red";
			document.getElementById("RadioGender1").focus();
			alert("Please Select Gender!");
			return false;
	}else{

	}
  }
</script>

<script type="text/javascript">
  function clear1()
  {
        document.getElementById("Firstname").value = ''
        document.getElementById("Lastname").value = ''
        document.getElementById("Middle").value = ''
      
  }
</script>


<script src= 
    "https://code.jquery.com/jquery-3.5.1.js"> 
</script> 

<script> 
    // Function to HTML encode the text 
    // This creates a new hidden element, 
    // inserts the given text into it 
    // and outputs it out as HTML 
    function htmlEncode(value) { 
    return $('<div/>').text(value) 
        .html(); 
    } 

    $(function () { 

    // Specify an onclick function 
    // for the generate button 
    $('#generate').click(function () { 

        // Generate the link that would be 
        // used to generate the QR Code 
        // with the given data 
        let finalURL = 
'https://chart.googleapis.com/chart?cht=qr&chl=' +
    htmlEncode(' Lastname: ')   + htmlEncode($('#Lastname').val())   + 
    htmlEncode(' Middle: ')   + htmlEncode($('#Middle').val())   + htmlEncode(';') +
    htmlEncode('Firstname: ')   + htmlEncode($('#Firstname').val()) + 
    htmlEncode(' Address: ')    + htmlEncode($('#Address').val()) +
    htmlEncode(' Age: ')        + htmlEncode($('#Age').val()) +
    htmlEncode(' Contact: ')    + htmlEncode($('#Contact').val()) +
    htmlEncode(' EmailAddress: ')   + htmlEncode($('#EmailAddress1').val()) 
    + '&chs=160x160&chld=L|0' 

        // Replace the src of the image with 
        // the QR code image 
        $('.qr-code').attr('src', finalURL); 
    }); 
    }); 
</script>




	
	
     
	<?php include("Footer.php"); ?>
    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>    

</body>
</html>