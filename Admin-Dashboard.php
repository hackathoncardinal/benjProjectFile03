<?php
include("config.php"); 
$qp_table = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 1");
$vaccine_table = mysqli_query($dbc,"SELECT * FROM `vaccine_table` WHERE 1");
$aid_table = mysqli_query($dbc,"SELECT * FROM `aid_table` WHERE 1");
$tableRequest = "Request";
$qp_tableRequest = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE status='$tableRequest'");
$vaccine_tableRequest = mysqli_query($dbc,"SELECT * FROM `vaccine_table` WHERE status='$tableRequest'");
$aid_tableRequest = mysqli_query($dbc,"SELECT * FROM `aid_table` WHERE status='$tableRequest'");
$tableUnclaimed = "Unclaimed";
$qp_tableUnclaimed = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE status='$tableUnclaimed'");
$vaccine_tableUnclaimed = mysqli_query($dbc,"SELECT * FROM `vaccine_table` WHERE status='$tableUnclaimed'");
$aid_tableUnclaimed = mysqli_query($dbc,"SELECT * FROM `aid_table` WHERE status='$tableUnclaimed'");
$tableClaimed = "Claimed";
$qp_tableClaimed = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE status='$tableClaimed'");
$vaccine_tableClaimed = mysqli_query($dbc,"SELECT * FROM `vaccine_table` WHERE status='$tableClaimed'");
$aid_tableClaimed = mysqli_query($dbc,"SELECT * FROM `aid_table` WHERE status='$tableClaimed'");
$tableDecline = "Decline";
$qp_tableDecline = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE status='$tableDecline'");
$vaccine_tableDecline = mysqli_query($dbc,"SELECT * FROM `vaccine_table` WHERE status='$tableDecline'");
$aid_tableDecline = mysqli_query($dbc,"SELECT * FROM `aid_table` WHERE status='$tableDecline'");
$TotalRequest = mysqli_num_rows($qp_tableRequest) + mysqli_num_rows($vaccine_tableRequest) +mysqli_num_rows($aid_tableRequest);
$TotalUnclaimed = mysqli_num_rows($qp_tableUnclaimed) + mysqli_num_rows($vaccine_tableUnclaimed) +mysqli_num_rows($aid_tableUnclaimed);
$TotalClaimed = mysqli_num_rows($qp_tableClaimed) + mysqli_num_rows($vaccine_tableClaimed) +mysqli_num_rows($aid_tableClaimed);
$TotalDecline = mysqli_num_rows($qp_tableDecline) + mysqli_num_rows($vaccine_tableDecline) +mysqli_num_rows($aid_tableDecline);
$overallTotal = mysqli_num_rows($qp_table) + mysqli_num_rows($vaccine_table) +mysqli_num_rows($aid_table);
//echo "overall = $overallTotal TotalReq = $TotalRequest TotalEnclaimed = $TotalUnclaimed TotalClaimed = $TotalClaimed  TotalDecline = $TotalDecline";
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
    <title>Admin Dashboard</title>  
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

	
	<link href="Lumino/css/bootstrap.min.css" rel="stylesheet">
	<link href="Lumino/css/font-awesome.min.css" rel="stylesheet">
	<link href="Lumino/css/datepicker3.css" rel="stylesheet">
	<link href="Lumino/css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<script>
	
	$(document).ready(function()
	{
		setInterval(function(){
			$("#autodata").load("Admin-Dashboard-AutoRefresh.php");
			//refresh();
		},8000);
	});

</script>
<script src="js1/canvasjs.min.js"> </script>
</head>
<body style="padding-top: 0px;">

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
                      <li><a  class="active" href="Admin-Dashboard.php">Dashboard</a></li>
                        <li><a  href="Admin-QP.php">Quarantine Pass DB</a></li>
                        <li><a href="Admin-vaccine.php">Vaccine DB</a></li>
                        <li><a href="Admin-Aid.php">Aid DB</a></li>
                         <li><a href="Admin-Masterlist.php">Master list DB</a></li>
                        <li><a href="Admin-Print_data.php">Print</a></li>
                        <li><a  href="Admin.html">Logout</a></li><!-- class="active"-->
                    </ul>
                </div>
            </div>
        </nav>
    </header>
   
    

	<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
<div id="autodata">
	<div class="container-fluid">
<div class="panel panel-container">
    <div class="row justify-content-center">
        <div class="col-sm-2">
            <div class="card card-dark bg-dark">
                <div class="card-body">
                    <div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding">
							<em class="fa fa-xl fa-users color-orange"></em>
							<?php echo '<div class="large">'.$TotalRequest.'</div>'; ?>
							<div class="text-muted">New Request</div>
						</div>
					</div>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card card-dark bg-dark">
                <div class="card-body">
                  <div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-gray"></em>
							<?php echo '<div class="large">'.$TotalUnclaimed.'</div>'; ?>
							<div class="text-muted">Unclaimed</div>
						</div>
					</div>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card card-dark bg-dark">
                <div class="card-body">
                    <div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>	
							<?php echo '<div class="large">'.$TotalClaimed.'</div>'; ?>
							<div class="text-muted">Claimed</div>
						</div>
					</div>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card card-dark bg-dark">
                <div class="card-body">
                    <div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-database color-red"></em>
							<?php echo  '<div class="large">'.$overallTotal.'</div>'; ?>
							<div class="text-muted">Total </div>
						</div>
					</div>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card card-dark bg-dark">
                <div class="card-body">
                   <div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-trash color-red"></em>
							<?php echo '<div class="large">'.$TotalDecline.'</div>'; ?>
							<div class="text-muted">Declined</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<hr>
<script type="text/javascript">
//window.onload = 
window.onload = function(){
var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light1", // "light2", "dark1", "dark2"
	animationEnabled: true, // change to true		
	title:{
		text: "QVA Chart"
	},
	data: [
	{
		// Change type to "bar", "area", "spline", "pie",etc.
		type: "bar",
		dataPoints: [//echo '<script>{ label: "QP Request",  y: 1  },<script>';
			<?php echo '{ label: "QP Request",  y: '.mysqli_num_rows($qp_tableRequest).'  },'; ?>
			<?php echo '{ label: "QP Unclaimed",  y: '.mysqli_num_rows($qp_tableUnclaimed).'  },'; ?>  
			<?php echo '{ label: "QP Claimed",  y: '.mysqli_num_rows($qp_tableClaimed).'  },'; ?> 
			<?php echo '{ label: "QP Decline",  y: '.mysqli_num_rows($qp_tableDecline).'  },'; ?> 
			
			
			<?php echo '{ label: "Vaccine Request",  y: '.mysqli_num_rows($vaccine_tableRequest).'  },'; ?>
			<?php echo '{ label: "Vaccine Unclaimed",  y: '.mysqli_num_rows($vaccine_tableUnclaimed).'  },'; ?>  
			<?php echo '{ label: "Vaccine Claimed",  y: '.mysqli_num_rows($vaccine_tableClaimed).'  },'; ?> 
			<?php echo '{ label: "Vaccine Decline",  y: '.mysqli_num_rows($vaccine_tableDecline).'  },'; ?> 
			
			<?php echo '{ label: "Aid Request",  y: '.mysqli_num_rows($aid_tableRequest).'  },'; ?>
			<?php echo '{ label: "Aid Unclaimed",  y: '.mysqli_num_rows($aid_tableUnclaimed).'  },'; ?>  
			<?php echo '{ label: "Aid Claimed",  y: '.mysqli_num_rows($aid_tableClaimed).'  },'; ?> 
			<?php echo '{ label: "Aid Decline",  y: '.mysqli_num_rows($aid_tableDecline).'  },'; ?> 
			
			<?php echo '{ label: "Total Request",  y: '.$TotalRequest.'  },'; ?>
			<?php echo '{ label: "Total Unclaimed",  y: '.$TotalClaimed.'  },'; ?>  
			<?php echo '{ label: "Overall Total",  y: '.$overallTotal.'  },'; ?> 
			<?php echo '{ label: "Total Declined",  y: '.$TotalDecline.'  }'; ?> 
		
			
		]
	}
	]
});
chart.render();
}
</script>

<script src="js1/canvasjs.min.js"> </script>	
<div id="chartContainer" style="height: 370px; max-width: 100%; margin: 0px auto;"></div>


</div>



	
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