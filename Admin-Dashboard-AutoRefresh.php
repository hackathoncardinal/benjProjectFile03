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
</head>
		
<hr>

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




<script type="text/javascript">
//window.onload = 

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



/*single

window.onload =  function () {
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
			<?php// echo '{ label: "QP Request",  y: '.mysqli_num_rows($qp_tableRequest).'  },'; ?>
			<?php// echo '{ label: "QP Unclaimed",  y: '.mysqli_num_rows($qp_tableUnclaimed).'  },'; ?>  
			<?php// echo '{ label: "QP Claimed",  y: '.mysqli_num_rows($qp_tableClaimed).'  },'; ?> 
			<?php// echo '{ label: "QP Decline",  y: '.mysqli_num_rows($qp_tableDecline).'  },'; ?> 
			
			
			<?php// echo '{ label: "vaccine Request",  y: '.mysqli_num_rows($vaccine_tableRequest).'  },'; ?>
			<?php //echo '{ label: "vaccine Unclaimed",  y: '.mysqli_num_rows($vaccine_tableUnclaimed).'  },'; ?>  
			<?php// echo '{ label: "vaccine Claimed",  y: '.mysqli_num_rows($vaccine_tableClaimed).'  },'; ?> 
			<?php// echo '{ label: "vaccine Decline",  y: '.mysqli_num_rows($vaccine_tableDecline).'  },'; ?> 
			
			<?php// echo '{ label: "aid Request",  y: '.mysqli_num_rows($aid_tableRequest).'  },'; ?>
			<?php// echo '{ label: "aid Unclaimed",  y: '.mysqli_num_rows($aid_tableUnclaimed).'  },'; ?>  
			<?php// echo '{ label: "aid Claimed",  y: '.mysqli_num_rows($aid_tableClaimed).'  },'; ?> 
			<?php// echo '{ label: "aid Decline",  y: '.mysqli_num_rows($aid_tableDecline).'  },'; ?> 
			
			<?php// echo '{ label: "Total Request",  y: '.$TotalRequest.'  },'; ?>
			<?php// echo '{ label: "Total Unclaimed",  y: '.$TotalClaimed.'  },'; ?>  
			<?php// echo '{ label: "Overall Total",  y: '.$overallTotal.'  },'; ?> 
			<?php// echo '{ label: "Total Declined",  y: '.$TotalDecline.'  }'; ?> 
		
			
		]
	}
	]
});
chart.render();
}

*/



</script>

	
<div id="chartContainer" style="height: 370px; max-width: 100%; margin: 0px auto;"></div>
			


</body>
</html>