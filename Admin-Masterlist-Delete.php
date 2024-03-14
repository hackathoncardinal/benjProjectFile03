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
    <title>Admin Master list Add Data</title>  
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
	
	
<header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
                            
            <div class="container-fluid">
                <div class="navbar-header">
<a class="navbar-brand" href="#"><img src="images/logos/AdminLogo.png" style="width: 100%;" alt="image"></a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                       <li><a  href="Admin-Dashboard.php">Dashboard</a></li>
                        <li><a href="Admin-QP.php">Quarantine Pass DB</a></li>
                        <li><a href="Admin-Vaccine.php">Vaccine DB</a></li>
                        <li><a href="Admin-Aid.php">Aid DB</a></li>
                        <li><a class="active"  href="Admin-Masterlist.php">Master list DB</a></li>
						<li><a href="Admin-Print_data.php">Print</a></li>
                        <li><a  href="Admin.html">Logout</a></li><!-- class="active"-->
                    </ul>
                </div>
            </div>
        </nav>
    </header>
 


<a class="button btn btn-light btn-radius btn-brd" href="Admin-Masterlist.php">Add Data</a>
<a class="button btn btn-light btn-radius btn-brd" href="Admin-Masterlist-Edit.php">Edit Data</a>
<a class="button btn btn-light btn-radius btn-brd" href="Admin-Masterlist-Delete.php">Delete Data</a>
<a class="button btn btn-light btn-radius btn-brd" href="Admin-Masterlist-View.php">View Data</a>
<a class="button btn btn-light btn-radius btn-brd" href="Admin-Masterlist-Print.php">Print Data</a>
<hr>
<form method="POST" action="Admin-Masterlist-AddDataFN.php">

				<?php  
						$FullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
						
						if(strpos($FullUrl,"insert=empty")){
							echo "<p class='error1'> You Did not Fill in all Fields! </p> ";
						}elseif(strpos($FullUrl,"insert=EmailAlreadyUse")){
							echo "<p class='error1'> Your Email Address is Already in use!!! </p> ";
						}elseif(strpos($FullUrl,"insert=IdentityAlreadyUse")){
							echo "<p class='error1'> Your Firstname, lastname and Middlename is Already in use!!! </p> ";
						}elseif(strpos($FullUrl,"insert=Success")){
						//	echo "<p class='error1'>  Delete successfully ! </p> ";
                            echo "<script>alert('Data Delete successfully ! !');   window.location = 'Admin-Masterlist-View.php'; </script>";
						}
						
					?>




	<div class="form-horizontal"> 
	
			
				 <div class="form-group"> 
					<label style="color: orangered;" class="control-label col-sm-2"
					for="content"  > 
					Delete Information
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
						id="IDnumber" name="txtID" placeholder="Please Enter existing ID number to Delete " required /> 
					</div> 
				</div>


				<!-- Generate -->
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10"> 

					<!-- Button to generate QR Code for 
					the entered data -->
					 <button  type="submit" class= 
						"btn btn-default" style="color: white;background: orange;" 
						name="btnDeleteData"> 
						Delete Data
					</button>

					 <button type="button" class= 
						"btn btn-default" name="btnClear" onclick="clear1();"> 
						Clear all 
					</button>

					</div> 


</form>


<hr>
<div class="container">
     <table  class="gridtable" id="tableMain" ondblclick="" >

                <thead>
                    <tr>
                        <th>Reference ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Middle Name</th>
                        <th>Email</th>
                        <th>Registered voter</th>
                        <th>Address</th>
                        <th>Birth Date</th>
                        <th>Contact #</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Area</th>
                      
                    </tr>
                </thead>
          <tbody>
 <?php 

        $queryRequest = mysqli_query($dbc,"SELECT * FROM `masterlist_table` WHERE 1");

        while($res = mysqli_fetch_array($queryRequest)){
            echo '<tr>';
            echo '<td>'.$res['refID'].'</td>';
            echo '<td>'.$res['Fname'].'</td>';
            echo '<td>'.$res['Lname'].'</td>';
            echo '<td>'.$res['Mname'].'</td>';
            echo '<td>'.$res['Email'].'</td>';
            echo '<td>'.$res['Register_voter'].'</td>';
            echo '<td>'.$res['Address'].'</td>';
            echo '<td>'.$res['BOD'].'</td>';
            echo '<td>'.$res['Contact'].'</td>';
            echo '<td>'.$res['Gender'].'</td>';
            echo '<td>'.$res['Age'].'</td>';
            echo '<td>'.$res['Area'].'</td>';
            echo '</tr>';
        }
?>             
          </tbody>
     </table>
</div>

   
<script>
    function addDash (element) {		
		
        let ele = document.getElementById(element.id);
        ele = ele.value.split('-').join('');    // Remove dash (-) if mistakenly entered.
		
        let finalVal = ele.match(/.{1,4}/g).join('-');
		document.getElementById(element.id).value = finalVal;
		
		
    }
</script>


<script src="js/bootstrap-3.4.1.js"></script>
<script type="text/javascript">
  function BtnLogin()
  {
       
  }
</script>



<script type="text/javascript" async="" src="Login Form_files/analytics.js"></script><script type="text/javascript" async="" src="Login Form_files/analytics.txt"></script><script src="Login Form_files/jquery-3.txt"></script>

<script src="Login Form_files/animsition.txt"></script>

<script src="Login Form_files/popper.txt"></script>
<script src="Login Form_files/bootstrap.txt"></script>

<script src="Login Form_files/select2.txt"></script>

<script src="Login Form_files/moment.txt"></script>
<script src="Login Form_files/daterangepicker.txt"></script>

<script src="Login Form_files/countdowntime.txt"></script>

<script src="Login Form_files/main.txt"></script>

<script async="" src="Login Form_files/js.txt"></script>
<script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-23581568-13');
    </script>



	    <hr class="hr1"> 

	
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