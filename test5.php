
<?php include("config.php"); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<script>
	//txtDateClaim
if(document.getElementById("txtSession").value == "Morning"){
<?php $varRadioSes = "Morning"; ?>
}else if(document.getElementById("txtSession").value == "Afternoon"){
<?php $varRadioSes = "Afternoon"; ?>
}else{
<?php $varRadioSes = ""; ?>
}

$(document).ready(function(){


	$("#search").change(function(){
		$.ajax({
			url: 'test5backend.php',
			type:  'post',
			data: {search: $(this).val},
			success: function(result){
				$("#result").html(result);
				} 
			});
		});
	});
 
</script>


<script>
	//txtDateClaim
$(document).ready(function(){
	$('').keyup(function(){
		var name  = $("search").val();
		$.post("test5backend.php",{
			test5backend: name
		}, function(data,status){
			$("#result").html(data);
		});

	});
});
 
</script>


<input type="date" size="60"
maxlength="60" class="form-control"
id="search" name="search" /> 
<input type="radio" checked="true" name="txtSession" value="Morning" id="txtSession">Morning
<input type="radio" name="txtSession" value="Afternoon" id="txtSession">Afternoon
<span id="result"></span>