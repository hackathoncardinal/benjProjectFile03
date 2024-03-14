<?php
include("config.php"); 
if(isset($_POST['btnSearch']))
{

$table = $_POST['table_Type'];
$status = $_POST['status_Type'];
$area_Type = $_POST['area_Type'];
	
$StartDate = $_POST['Start_date'];
$EndDate = $_POST['End_date'];


if($area_Type != ""){

	//echo "$area_Type <-- value";

	if($area_Type == "Hoteliers Village 2" ){

		if($StartDate != "" && $EndDate != ""){
		//
		//	echo "date has value";
		if($table != "" && $status != ""){
			// table and status has value
			
			if($table == "FinancialTable" || $table == "ReliefTable"){
				
				if($table == "FinancialTable"){
					$table = "aid_table";
					$FF = "Financial";
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE (status='$status' and typeOfAid='$FF' and Area='$area_Type' ) AND (Request_date BETWEEN '$StartDate' and '$EndDate' )");
						if(mysqli_num_rows($QuerySearch) > 0){

						}else{
							echo "data not found  ";
							$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
						}
				}else{
					// Relief
					
					$table = "aid_table";
					$FF = "Relief";
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE (status='$status' and typeOfAid='$FF' and Area='$area_Type') AND (Request_date BETWEEN '$StartDate' and '$EndDate' )");
						if(mysqli_num_rows($QuerySearch) > 0){

						}else{
							echo "data not found  ";
							$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
						}
					
				}
				}else{
						$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE (status='$status' and Area='$area_Type') AND (Request_date BETWEEN '$StartDate' and '$EndDate' )");
						if(mysqli_num_rows($QuerySearch) > 0){

						}else{
							echo "data not found  ";
							$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
						}
				}
			
			
			}else{
				// table and status is null!!
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
				}
		
		}else{
		// date has no value but status and table has
		if($table != "" && $status != ""){
				// table and status has value
		
			if($table == "FinancialTable" || $table == "ReliefTable"){
				//FinancialTable ReliefTable 
				if($table == "FinancialTable"){
					$table = "aid_table";
					$FF = "Financial";
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE (status='$status' And typeOfAid='$FF' and Area='$area_Type' )");
					if(mysqli_num_rows($QuerySearch) > 0){
					}else{
						echo "data not found  ";
						$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
					}
				}else{
					$table = "aid_table";
					$FF = "Relief";
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE (status='$status' And typeOfAid='$FF' and Area='$area_Type' )");
					if(mysqli_num_rows($QuerySearch) > 0){
					}else{
						echo "data not found  ";
						$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
					}	
				}
				
			}else{
					// aid_table
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE status='$status' and Area='$area_Type' ");
					if(mysqli_num_rows($QuerySearch) > 0){
					}else{
						echo "data not found  ";
						$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
					}
				}
			
			}else{
				// table and status no value
			$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
				
			}
		}
	 //end

	}else if($area_Type == "Sunnydale The Garden Village"){

		if($StartDate != "" && $EndDate != ""){
		//
		//	echo "date has value";
		if($table != "" && $status != ""){
			// table and status has value
			
			if($table == "FinancialTable" || $table == "ReliefTable"){
				
				if($table == "FinancialTable"){
					$table = "aid_table";
					$FF = "Financial";
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE (status='$status' and typeOfAid='$FF' and Area='$area_Type' ) AND (Request_date BETWEEN '$StartDate' and '$EndDate' )");
						if(mysqli_num_rows($QuerySearch) > 0){

						}else{
							echo "data not found  ";
							$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
						}
				}else{
					// Relief
					
					$table = "aid_table";
					$FF = "Relief";
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE (status='$status' and typeOfAid='$FF' and Area='$area_Type') AND (Request_date BETWEEN '$StartDate' and '$EndDate' )");
						if(mysqli_num_rows($QuerySearch) > 0){

						}else{
							echo "data not found  ";
							$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
						}
					
				}
				}else{
						$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE (status='$status' and Area='$area_Type') AND (Request_date BETWEEN '$StartDate' and '$EndDate' )");
						if(mysqli_num_rows($QuerySearch) > 0){

						}else{
							echo "data not found  ";
							$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
						}
				}
			
			
			}else{
				// table and status is null!!
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
				}
		
		}else{
		// date has no value but status and table has
		if($table != "" && $status != ""){
				// table and status has value
		
			if($table == "FinancialTable" || $table == "ReliefTable"){
				//FinancialTable ReliefTable 
				if($table == "FinancialTable"){
					$table = "aid_table";
					$FF = "Financial";
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE (status='$status' And typeOfAid='$FF' and Area='$area_Type' )");
					if(mysqli_num_rows($QuerySearch) > 0){
					}else{
						echo "data not found  ";
						$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
					}
				}else{
					$table = "aid_table";
					$FF = "Relief";
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE (status='$status' And typeOfAid='$FF' and Area='$area_Type' )");
					if(mysqli_num_rows($QuerySearch) > 0){
					}else{
						echo "data not found  ";
						$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
					}	
				}
				
			}else{
					// aid_table
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE status='$status' and Area='$area_Type' ");
					if(mysqli_num_rows($QuerySearch) > 0){
					}else{
						echo "data not found  ";
						$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
					}
				}
			
			}else{
				// table and status no value
			$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
				
			}
		}
	 //end

	}else if($area_Type == "Monterra Homes Subdivision"){

		if($StartDate != "" && $EndDate != ""){
		//
		//	echo "date has value";
		if($table != "" && $status != ""){
			// table and status has value
			
			if($table == "FinancialTable" || $table == "ReliefTable"){
				
				if($table == "FinancialTable"){
					$table = "aid_table";
					$FF = "Financial";
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE (status='$status' and typeOfAid='$FF' and Area='$area_Type' ) AND (Request_date BETWEEN '$StartDate' and '$EndDate' )");
						if(mysqli_num_rows($QuerySearch) > 0){

						}else{
							echo "data not found  ";
							$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
						}
				}else{
					// Relief
					
					$table = "aid_table";
					$FF = "Relief";
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE (status='$status' and typeOfAid='$FF' and Area='$area_Type') AND (Request_date BETWEEN '$StartDate' and '$EndDate' )");
						if(mysqli_num_rows($QuerySearch) > 0){

						}else{
							echo "data not found  ";
							$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
						}
					
				}
				}else{
						$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE (status='$status' and Area='$area_Type') AND (Request_date BETWEEN '$StartDate' and '$EndDate' )");
						if(mysqli_num_rows($QuerySearch) > 0){

						}else{
							echo "data not found  ";
							$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
						}
				}
			
			
			}else{
				// table and status is null!!
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
				}
		
		}else{
		// date has no value but status and table has
		if($table != "" && $status != ""){
				// table and status has value
		
			if($table == "FinancialTable" || $table == "ReliefTable"){
				//FinancialTable ReliefTable 
				if($table == "FinancialTable"){
					$table = "aid_table";
					$FF = "Financial";
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE (status='$status' And typeOfAid='$FF' and Area='$area_Type' )");
					if(mysqli_num_rows($QuerySearch) > 0){
					}else{
						echo "data not found  ";
						$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
					}
				}else{
					$table = "aid_table";
					$FF = "Relief";
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE (status='$status' And typeOfAid='$FF' and Area='$area_Type' )");
					if(mysqli_num_rows($QuerySearch) > 0){
					}else{
						echo "data not found  ";
						$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
					}	
				}
				
			}else{
					// aid_table
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE status='$status' and Area='$area_Type' ");
					if(mysqli_num_rows($QuerySearch) > 0){
					}else{
						echo "data not found  ";
						$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
					}
				}
			
			}else{
				// table and status no value
			$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
				
			}
		}
	 //end

	}else if($area_Type == "Gradiose South"){

		if($StartDate != "" && $EndDate != ""){
		//
		//	echo "date has value";
		if($table != "" && $status != ""){
			// table and status has value
			
			if($table == "FinancialTable" || $table == "ReliefTable"){
				
				if($table == "FinancialTable"){
					$table = "aid_table";
					$FF = "Financial";
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE (status='$status' and typeOfAid='$FF' and Area='$area_Type' ) AND (Request_date BETWEEN '$StartDate' and '$EndDate' )");
						if(mysqli_num_rows($QuerySearch) > 0){

						}else{
							echo "data not found  ";
							$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
						}
				}else{
					// Relief
					
					$table = "aid_table";
					$FF = "Relief";
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE (status='$status' and typeOfAid='$FF' and Area='$area_Type') AND (Request_date BETWEEN '$StartDate' and '$EndDate' )");
						if(mysqli_num_rows($QuerySearch) > 0){

						}else{
							echo "data not found  ";
							$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
						}
					
				}
				}else{
						$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE (status='$status' and Area='$area_Type') AND (Request_date BETWEEN '$StartDate' and '$EndDate' )");
						if(mysqli_num_rows($QuerySearch) > 0){

						}else{
							echo "data not found  ";
							$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
						}
				}
			
			
			}else{
				// table and status is null!!
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
				}
		
		}else{
		// date has no value but status and table has
		if($table != "" && $status != ""){
				// table and status has value
		
			if($table == "FinancialTable" || $table == "ReliefTable"){
				//FinancialTable ReliefTable 
				if($table == "FinancialTable"){
					$table = "aid_table";
					$FF = "Financial";
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE (status='$status' And typeOfAid='$FF' and Area='$area_Type' )");
					if(mysqli_num_rows($QuerySearch) > 0){
					}else{
						echo "data not found  ";
						$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
					}
				}else{
					$table = "aid_table";
					$FF = "Relief";
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE (status='$status' And typeOfAid='$FF' and Area='$area_Type' )");
					if(mysqli_num_rows($QuerySearch) > 0){
					}else{
						echo "data not found  ";
						$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
					}	
				}
				
			}else{
					// aid_table
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE status='$status' and Area='$area_Type' ");
					if(mysqli_num_rows($QuerySearch) > 0){
					}else{
						echo "data not found  ";
						$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
					}
				}
			
			}else{
				// table and status no value
			$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
				
			}
		}
	 //end

	}else if($area_Type == "Guevarra s Compound"){

		if($StartDate != "" && $EndDate != ""){
		//
		//	echo "date has value";
		if($table != "" && $status != ""){
			// table and status has value
			
			if($table == "FinancialTable" || $table == "ReliefTable"){
				
				if($table == "FinancialTable"){
					$table = "aid_table";
					$FF = "Financial";
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE (status='$status' and typeOfAid='$FF' and Area='$area_Type' ) AND (Request_date BETWEEN '$StartDate' and '$EndDate' )");
						if(mysqli_num_rows($QuerySearch) > 0){

						}else{
							echo "data not found  ";
							$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
						}
				}else{
					// Relief
					
					$table = "aid_table";
					$FF = "Relief";
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE (status='$status' and typeOfAid='$FF' and Area='$area_Type') AND (Request_date BETWEEN '$StartDate' and '$EndDate' )");
						if(mysqli_num_rows($QuerySearch) > 0){

						}else{
							echo "data not found  ";
							$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
						}
					
				}
				}else{
						$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE (status='$status' and Area='$area_Type') AND (Request_date BETWEEN '$StartDate' and '$EndDate' )");
						if(mysqli_num_rows($QuerySearch) > 0){

						}else{
							echo "data not found  ";
							$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
						}
				}
			
			
			}else{
				// table and status is null!!
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
				}
		
		}else{
		// date has no value but status and table has
		if($table != "" && $status != ""){
				// table and status has value
		
			if($table == "FinancialTable" || $table == "ReliefTable"){
				//FinancialTable ReliefTable 
				if($table == "FinancialTable"){
					$table = "aid_table";
					$FF = "Financial";
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE (status='$status' And typeOfAid='$FF' and Area='$area_Type' )");
					if(mysqli_num_rows($QuerySearch) > 0){
					}else{
						echo "data not found  ";
						$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
					}
				}else{
					$table = "aid_table";
					$FF = "Relief";
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE (status='$status' And typeOfAid='$FF' and Area='$area_Type' )");
					if(mysqli_num_rows($QuerySearch) > 0){
					}else{
						echo "data not found  ";
						$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
					}	
				}
				
			}else{
					// aid_table
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE status='$status' and Area='$area_Type' ");
					if(mysqli_num_rows($QuerySearch) > 0){
					}else{
						echo "data not found  ";
						$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
					}
				}
			
			}else{
				// table and status no value
			$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
				
			}
		}
	 //end

	}else{
		//no value
			$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");

	}


}else{ // area condition end
	//echo "$area_Type is null";

	if($StartDate != "" && $EndDate != ""){
		//
		//	echo "date has value";
		if($table != "" && $status != ""){
			// table and status has value
			
			if($table == "FinancialTable" || $table == "ReliefTable"){
				
				if($table == "FinancialTable"){
					$table = "aid_table";
					$FF = "Financial";
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE (status='$status' and typeOfAid='$FF') AND (Request_date BETWEEN '$StartDate' and '$EndDate' )");
						if(mysqli_num_rows($QuerySearch) > 0){

						}else{
							echo "data not found  ";
							$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
						}
				}else{
					// Relief
					
					$table = "aid_table";
					$FF = "Relief";
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE (status='$status' and typeOfAid='$FF') AND (Request_date BETWEEN '$StartDate' and '$EndDate' )");
						if(mysqli_num_rows($QuerySearch) > 0){

						}else{
							echo "data not found  ";
							$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
						}
					
				}
			}else{
						$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE status='$status' AND (Request_date BETWEEN '$StartDate' and '$EndDate' )");
						if(mysqli_num_rows($QuerySearch) > 0){

						}else{
							echo "data not found  ";
							$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
						}
				}
			
			
			}else{
			// table and status is null!!
			$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
		}
		
		}else{
		// date has no value but status and table has
		if($table != "" && $status != "")
		{
				// table and status has value
		
			if($table == "FinancialTable" || $table == "ReliefTable"){
				//FinancialTable ReliefTable 
				if($table == "FinancialTable"){
					$table = "aid_table";
					$FF = "Financial";
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE (status='$status' And typeOfAid='$FF')");
					if(mysqli_num_rows($QuerySearch) > 0){
					}else{
						echo "data not found  ";
						$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
					}
				}else{
					$table = "aid_table";
					$FF = "Relief";
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE (status='$status' And typeOfAid='$FF')");
					if(mysqli_num_rows($QuerySearch) > 0){
					}else{
						echo "data not found  ";
						$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
					}	
				}
				
			}else{
					// aid_table
					$QuerySearch = mysqli_query($dbc,"SELECT * FROM `$table` WHERE status='$status'");
					if(mysqli_num_rows($QuerySearch) > 0){
					}else{
						echo "data not found  ";
						$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
					}
				}
			
		}else{
				// table and status no value
			$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");
				
			}
			
		}

}

//exit();
	
	}else{	
		$QuerySearch = mysqli_query($dbc,"SELECT * FROM `qp_table` WHERE 0");	
	}

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
    <title>Admin Print</title>  
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
	

	<style>
           
            table.gridtable {
              
                border-width: 1px;
              
            } 
            table.gridtable th {
                border-width: 1px;
				border-style: solid;
                border-color: #666666;
                
            }
            table.gridtable td {
                border-width: 1px;
				border-style: solid;
                border-color: #666666;
            
            }
            
        </style>

<body>

	
<header  class="header header_style_01">
	<nav class="megamenu navbar navbar-default">
<form method="POST" action="Admin-Print_data.php">	
<div style="text-align: -webkit-center;">
	<label >Please Enter Range</label>
	Start Date : <input type="date" id="Start_date" name="Start_date" /> <br>
	End Date : <input type="date" id="End_date" name="End_date" /> 
			
	<label >Search:</label>
			
			
			<select name="table_Type" required>
				<option value="">Select Database</option>
				<option value="qp_table">QP DB</option>
				<option  value="vaccine_table">Vaccine DB</option>
<!--				<option value="aid_table">Aid DB</option> FinancialTable ReliefTable aid_table   --> 
				<optgroup label="Aid_table">
    				<option value="FinancialTable">Financial Table Only</option>
   					<option value="ReliefTable">Relief Table Only</option>
					<option value="aid_table">Relief &amp; Financial Table</option>
  				</optgroup>
			</select>
			<select name="status_Type" required>
				<option value="">Select Status</option>
				<option value="Request">Request</option>
				<option  value="Unclaimed">Unclaimed</option>
				<option value="Claimed">Claimed</option>
				<option value="Decline">Decline</option>
			</select>
			
			<select name="area_Type">
				<option value="">All Area's</option>
				<option value="Hoteliers Village 2">Hoteliers Village 2</option>
				<option value="Sunnydale The Garden Village">Sunnydale The Garden Village</option>
				<option value="Monterra Homes Subdivision">Monterra Homes Subdivision</option>
				<option value="Gradiose South">Gradiose South</option>
				<option value="Guevarra s Compound">Guevarra's Compound</option>
			</select>

			<button  type="submit" class= 
            "btn btn-default" name="btnSearch"> 
            Search
        	</button>
	
			<button  type="button" class= 
            "btn btn-default" name="ppp" onClick="window.print();"> 
            Print 
        	</button>
			<button  type="button" class= 
            "btn btn-default" name="ppp" onClick="btnExit()"> 
            Exit 
        	</button>
	</div>
</form>
	</nav>
</header>
   

	
	<table  class="gridtable" id="tableMain" ondblclick="" >

                <thead>
                    <tr>
						<th>Reference ID</th>
                        <th>Fname</th>
                        <th>Lname</th>
                        <th>Mname</th>
                        <th>Email</th>
                        <th>Address</th>
						<th>BOD</th>
                        <th>Contact#</th>
                        <th>Gender</th>
						<th>Age</th>
						<th>Status</th>
						<th>Request_date</th>
						<th>Area</th>
                    </tr>
                </thead>
          <tbody>
 <?php 
			  

		while($res = mysqli_fetch_array($QuerySearch)){
			echo '<tr>';
			echo '<td>'.$res['refID'].'</td>';
			echo '<td>'.$res['Fname'].'</td>';
			echo '<td>'.$res['Lname'].'</td>';
			echo '<td>'.$res['Mname'].'</td>';
			echo '<td>'.$res['Email'].'</td>';
			echo '<td>'.$res['Address'].'</td>';
			echo '<td>'.$res['BOD'].'</td>';
			echo '<td>'.$res['Contact'].'</td>';
			echo '<td>'.$res['Gender'].'</td>';
			echo '<td>'.$res['Age'].'</td>';
			echo '<td>'.$res['Status'].'</td>';
			echo '<td>'.$res['Request_date'].'</td>';
			echo '<td>'.$res['Area'].'</td>';
			echo '</tr>';
		}
			  
		
?>             
          </tbody>
     </table>
	
	
	
<script src="js/bootstrap-3.4.1.js"></script>
<script type="text/javascript">
  function btnExit()
  {
	    window.location = "Admin-Dashboard.php";
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

	

     <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">                   
                    <p class="footer-company-name"> All Rights Reserved. &copy; <a href="#">2021 QVA Issuance System</a> 
                    <a hidden href="Benj Design"></a></p>
                </div>

                
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->


	








    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>

</body>
</html>