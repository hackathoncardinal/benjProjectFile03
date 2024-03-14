<?php
include("config.php"); 



$r1 = 'Request';
$r2 = 'Unclaimed';
$r3 = 'Claimed';
$activeTab = "1";
if(isset($_POST['btnRequest_search'])){

$activeTab = "1";
/*
if($activeTab == "1"){
	//aria-expanded="true"
echo 'class="active"';
}else if($activeTab == "2"){
//aria-expanded="true"
echo 'class="active"';
}else{
echo 'class="active"';
} 
*/
	
$col1 = $_POST['column1'];
$txtSearch = $_POST['txtRequest_search'];
	
	if(empty($txtSearch) || empty($col1)){
	$queryRequest = mysqli_query($dbc,"SELECT * From aid_table where(status='$r1')");
	$queryUnclaimed = mysqli_query($dbc,"SELECT * From aid_table where(status='$r2')");
	$queryClaimed = mysqli_query($dbc,"SELECT * From aid_table where(status='$r3')");
		echo "<script>alert('Textbox Or Filter Column was Empty');</script>";
	}else{
	$queryRequest = mysqli_query($dbc,"SELECT * FROM `aid_table` WHERE Status='$r1' AND $col1 LIKE '%$txtSearch%'");
	//mysqli_num_rows($queryRequest)
	if(mysqli_num_rows($queryRequest) > 0){
		//echo "<script>alert('data Found');</script>";
	}else{ $queryRequest = mysqli_query($dbc,"SELECT * From aid_table where(status='$r1')"); 
		 	echo "<script>alert('data not Found');</script>";
		 }
	
	//echo "<script>alert('$col1''$txtSearch');</script>";
	$queryUnclaimed = mysqli_query($dbc,"SELECT * From aid_table where(status='$r2')");
	$queryClaimed = mysqli_query($dbc,"SELECT * From aid_table where(status='$r3')");
		
	}
		
}else if(isset($_POST['btnRequest_search2'])){
$activeTab = "2";	
$col1 = $_POST['column2'];
$txtSearch = $_POST['txtRequest_search2'];
	
	if(empty($txtSearch) || empty($col1)){
	$queryRequest = mysqli_query($dbc,"SELECT * From aid_table where(status='$r1')");
	$queryUnclaimed = mysqli_query($dbc,"SELECT * From aid_table where(status='$r2')");
	$queryClaimed = mysqli_query($dbc,"SELECT * From aid_table where(status='$r3')");
		echo "<script>alert('Textbox Or Filter Column was Empty');</script>";
	}else{
	$queryUnclaimed = mysqli_query($dbc,"SELECT * FROM `aid_table` WHERE Status='$r2' AND $col1 LIKE '%$txtSearch%'");
	//mysqli_num_rows($queryRequest)
	if(mysqli_num_rows($queryUnclaimed) > 0){
		//echo "<script>alert('data Found');</script>";
	}else{ $queryUnclaimed = mysqli_query($dbc,"SELECT * From aid_table where(status='$r2')");
		 	echo "<script>alert('data not Found');</script>";
		 }
	
	//echo "<script>alert('$col1''$txtSearch');</script>";
	$queryRequest = mysqli_query($dbc,"SELECT * From aid_table where(status='$r1')");
	$queryClaimed = mysqli_query($dbc,"SELECT * From aid_table where(status='$r3')");
		
	}
		
}else if(!isset($_POST['btnRequest_search'])){
$queryRequest = mysqli_query($dbc,"SELECT * From aid_table where(status='$r1')");
$queryUnclaimed = mysqli_query($dbc,"SELECT * From aid_table where(status='$r2')");
$queryClaimed = mysqli_query($dbc,"SELECT * From aid_table where(status='$r3')");
		//echo "<script>alert('load');</script>";
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
    <title>Admin-Aid DB</title>  
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
                        <li><a  href="Admin-QP.php">Quarantine Pass DB</a></li>
                        <li><a href="Admin-Vaccine.php">Vaccine DB</a></li>
                        <li><a class="active" href="Admin-Aid.php">Aid DB</a></li>
                         <li><a  href="Admin-Masterlist.php">Master list DB</a></li>
						<li><a href="Admin-Print_data.php">Print</a></li>
                        <li><a  href="Admin.html">Logout</a></li><!-- class="active"-->
                    </ul>
                </div>
            </div>
        </nav>
    </header>
   
     
<div role="tabpanel">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" <?php if($activeTab == "1"){
//aria-expanded="true"
echo 'class="active"';
}else{
echo 'class';
}  ?> ><a <?php if($activeTab == "1"){
echo 'aria-expanded="true"';
//echo 'class="active"';
}else{
echo 'aria-expanded="false"';
}  ?> href="#home1" data-toggle="tab" role="tab" aria-controls="tab1"  >Request</a></li>
    <li role="presentation2" <?php if($activeTab == "2"){
//aria-expanded="true"
echo 'class="active"';
}else{
echo 'class';
}  ?> ><a <?php if($activeTab == "2"){
echo 'aria-expanded="true"';
//echo 'class="active"';
}else{
echo 'aria-expanded="false"';
}  ?> href="#paneTwo1" data-toggle="tab" role="tab" aria-controls="tab2">Unclaimed</a></li>
	  <li role="presentation3"><a 			href="#paneThree1" data-toggle="tab" role="tab" aria-controls="tab3">Claimed</a></li>
  </ul>
	
  <div id="tabContent1"  class="tab-content">
<!--	<div role="tabpanel" class="tab-pane in active" aria-expanded="true" id="home1">  -->
    <div role="tabpanel"  <?php if($activeTab == "1"){
//aria-expanded="true"
echo 'class="tab-pane in active"';
echo 'aria-expanded="true"';
}else{
echo 'class="tab-pane"';
}  ?>  id="home1">
      <p>
		  
		  <!--Code Request Start-->	


<div class="container">
	<div style="text-align: -webkit-center;">
		<form method="POST" action="Admin-Aid.php">
	
			<label >Search:</label>
			<input type="text" size="50"
			maxlength="50" class="form-control"
			id="Request_searchID" name="txtRequest_search"  placeholder="Enter content" style="width: 50%; text-align: center;" /> 
			
			<select name="column1">
				<option value="">Select Filter</option>
				<option value="refID">Reference ID</option>
				<option  value="Fname">First Name</option>
				<option value="Lname">Last Name</option>
			</select>
			
			<button  type="submit" class= 
            "btn btn-default" name="btnRequest_search"> 
            Search
        	</button>
			
		</form>
		<hr>
	</div>
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
						<th>Status</th>
						<th>Request date</th>
						<th>image type</th>
						<th>Type of Request</th>
                    </tr>
                </thead>
          <tbody>
 <?php 


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
			echo '<td>'.$res['Status'].'</td>';
			echo '<td>'.$res['Request_date'].'</td>';
			echo '<td>'.$res['img_type'].'</td>';
			echo '<td>'.$res['typeOfAid'].'</td>';
			echo '</tr>';
		}
?>             
          </tbody>
     </table>
</div>
			 
			 
		  
		  
		  
		  <!--Code End-->
		</p>
    </div>
	  
 <div role="tabpanel" <?php if($activeTab == "2"){
//aria-expanded="true"
echo 'class="tab-pane in active"';
echo 'aria-expanded="true"';
}else{
echo 'class="tab-pane"';
}  ?> id="paneTwo1">
      <p>
		  <!--Code Unclaimed Start-->
		 
<div class="container"  >
 
	<div style="text-align: -webkit-center;">
		<form method="POST" action="Admin-Aid.php">
	
			<label >Search:</label>
			<input type="text" size="50"
			maxlength="50" class="form-control"
			id="Request_searchID2" name="txtRequest_search2"  placeholder="Enter content" style="width: 50%; text-align: center;" /> 
			
			<select name="column2">
				<option value="">Select Filter</option>
				<option value="refID">Reference ID</option>
				<option  value="Fname">First Name</option>
				<option value="Lname">Last Name</option>
			</select>
			
			<button  type="submit" class= 
            "btn btn-default" name="btnRequest_search2"> 
            Search
        	</button>
			
		</form>
		<hr>
	</div>
	
     <table  class="gridtable" id="tableMain_Unclaimed" ondblclick="" >

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
						<th>Status</th>
						<th>Request date</th>
						<th>image type</th>
						<th>Type of Request</th>
                    </tr>
                </thead>
          <tbody>
 <?php 
		while($res = mysqli_fetch_array($queryUnclaimed)){
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
			echo '<td>'.$res['Status'].'</td>';
			echo '<td>'.$res['Request_date'].'</td>';
			echo '<td>'.$res['img_type'].'</td>';
			echo '<td>'.$res['typeOfAid'].'</td>';
			echo '</tr>';
		}
?>             
           </tbody>
     </table>
</div>
		  
		  
		  
		  
		  
		  <!--Code End-->
	</p>
    </div>
	   <div role="tabpanel" class="tab-pane fade" id="paneThree1">
      <p>
	
		  <!--Code Claimed Start-->

		  
<div class="container"  >
   
     <table  class="gridtable" id="tableMain_Unclaimed" ondblclick="" >

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
						<th>Status</th>
						<th>Request date</th>
						<th>image type</th>
						<th>Type of Request</th>
                    </tr>
                </thead>
          <tbody>
 <?php 
		while($res = mysqli_fetch_array($queryClaimed)){
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
			echo '<td>'.$res['Status'].'</td>';
			echo '<td>'.$res['Request_date'].'</td>';
			echo '<td>'.$res['img_type'].'</td>';
			echo '<td>'.$res['typeOfAid'].'</td>';
			echo '</tr>';
		}
?>             
          </tbody>
     </table>
</div>
		  
		  
		  <!--Code End-->
		   
	</p>
    </div>
    
  </div>
</div> <!-- End of tab-->
<script src="js/bootstrap-3.4.1.js"></script>
<script type="text/javascript">
  function BtnLogin()
  {
       
  }
</script>

	<script>

            //add event listener to table rows
            let thetable = document.getElementById('tableMain').getElementsByTagName('tbody')[0]; 
            for (let i = 0; i < thetable.rows.length; i++)
                {
                    thetable.rows[i].ondblclick = function()
                    {
                        TableRowClick(this);

                    };
                }                       
    
         function TableRowClick(therow) {
//                let msg = therow.cells[0].innerHTML+'*'row.cells[1].innerHTML+'*'+therow.cells[2].innerHTML+'*'+therow.cells[3].innerHTML+'*'+therow.cells[4].innerHTML+'*'+therow.cells[5].innerHTML+'*'+therow.cells[6].innerHTML+'*'+therow.cells[7].innerHTML+'*'+therow.cells[8].innerHTML+'*'+therow.cells[9].innerHTML+'*'+therow.cells[10].innerHTML+'*'+therow.cells[11].innerHTML+'*'+therow.cells[12].innerHTML;
//                alert(msg);
            //Passvalue(msg);


           Passvalue1(therow.cells[0].innerHTML,therow.cells[1].innerHTML,therow.cells[2].innerHTML,therow.cells[3].innerHTML,therow.cells[4].innerHTML,therow.cells[5].innerHTML,therow.cells[6].innerHTML,therow.cells[7].innerHTML,therow.cells[8].innerHTML,therow.cells[9].innerHTML,therow.cells[10].innerHTML,therow.cells[11].innerHTML,therow.cells[12].innerHTML,therow.cells[13].innerHTML,therow.cells[14].innerHTML);
            window.location = "Admin-aid-Dataseleted.php";

            };
    
                     
  </script>

<script>

            //add event listener to table rows
            let thetable2 = document.getElementById('tableMain_Unclaimed').getElementsByTagName('tbody')[0]; 
            for (let i = 0; i < thetable2.rows.length; i++)
                {
                    thetable2.rows[i].ondblclick = function()
                    {
                        TableRowClick2(this);

                    };
                }                       
    
         function TableRowClick2(therow) {
//                let msg = therow.cells[0].innerHTML+'*'row.cells[1].innerHTML+'*'+therow.cells[2].innerHTML+'*'+therow.cells[3].innerHTML+'*'+therow.cells[4].innerHTML+'*'+therow.cells[5].innerHTML+'*'+therow.cells[6].innerHTML+'*'+therow.cells[7].innerHTML+'*'+therow.cells[8].innerHTML+'*'+therow.cells[9].innerHTML+'*'+therow.cells[10].innerHTML+'*'+therow.cells[11].innerHTML+'*'+therow.cells[12].innerHTML;
//                alert(msg);
            //Passvalue(msg);


           Passvalue1(therow.cells[0].innerHTML,therow.cells[1].innerHTML,therow.cells[2].innerHTML,therow.cells[3].innerHTML,therow.cells[4].innerHTML,therow.cells[5].innerHTML,therow.cells[6].innerHTML,therow.cells[7].innerHTML,therow.cells[8].innerHTML,therow.cells[9].innerHTML,therow.cells[10].innerHTML,therow.cells[11].innerHTML,therow.cells[12].innerHTML,therow.cells[13].innerHTML,therow.cells[14].innerHTML);
            window.location = "Admin-aid-Dataseleted-Unclaimed.php";

            };
    
           
            
        </script>




	<script>


		
function Passvalue1(refID,Fname,Lname,Mname,Email1,Register_voter,Address,BOD,Contact,Gender,Age,Status1,Request_date,img_type,typeofReq){
      // var Firstname = data1 ;
        //var Firstname = document.getElementById("txt").value;
		localStorage.setItem("LS_refID", refID);					//0
		localStorage.setItem("LS_Fname", Fname);					//1
		localStorage.setItem("LS_Lname", Lname);					//2
		localStorage.setItem("LS_Mname", Mname);					//3
		localStorage.setItem("LS_Email", Email1);					//4
		localStorage.setItem("LS_Register_voter", Register_voter);	//5
		localStorage.setItem("LS_Address", Address);				//6
		localStorage.setItem("LS_BOD", BOD);						//7
		localStorage.setItem("LS_Contact", Contact);				//8
		localStorage.setItem("LS_Gender", Gender);					//9
		localStorage.setItem("LS_Age", Age);						//10
		localStorage.setItem("LS_Status", Status1);					//11
		localStorage.setItem("LS_Request_date", Request_date);		//12
		localStorage.setItem("LS_img_type", img_type);				//13
		localStorage.setItem("LS_typeofReq", typeofReq);				//14
        return 0;
        }

//tableMain_Unclaimed
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