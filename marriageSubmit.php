<?php
session_start();
include("config.php");
$user = $_SESSION['user'];
if((isset($_GET['date']))&&(isset($_GET['nameGroom']))&&(isset($_GET['nameBride']))){
$Mdate = $_GET['date'];
$place = $_GET['place'];
$nameGroom = $_GET['nameGroom'];
$relGroom = $_GET['relGroom'];
$ageGroom = $_GET['ageGroom'];
$occupGroom = $_GET['occupGroom'];
$statusGroom = $_GET['statusGroom'];
$adrGroom = $_GET['adrGroom'];
$nameBride = $_GET['nameBride'];
$relBride = $_GET['relBride'];
$ageBride = $_GET['ageBride'];
$occupBride = $_GET['occupBride'];
$statusBride = $_GET['statusBride'];
$adrBride = $_GET['adrBride'];
$nameWitness = $_GET['nameWitness'];
$adrWitness = $_GET['adrWitness'];
$relation = $_GET['relation'];

date_default_timezone_set('Asia/Kolkata');
$date = date("Y-m-d-l");
$time = date("H:i:s");

$qry = "INSERT INTO `marriage`(`cur_date`, `place`, `mdate`, `Gname`, `Grel`, `Gage`, `Goccup`, `Gstatus`, `Gadress`, `Bname`, `Brel`, `Bage`, `Boccup`, `Bstatus`, `Badress`, `Wname`, `Wadress`, `Wrel`,`user_id`) VALUES ('$date $time','$place','$Mdate','$nameGroom','$relGroom','$ageGroom','$occupGroom','$statusGroom','$adrGroom','$nameBride','$relBride','$ageBride','$occupBride','$statusBride','$adrBride','$nameWitness','$adrWitness','$relation','$user')";
$q = mysqli_query($con,$qry) or die('ERROR');
}
else
{
	echo "<script>
			window.location.assign('\marriage.php');
		</script>
	";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Certificate generator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="fonts/mont/mont.css" type="text/css" charset="utf-8" />

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="style.css">
 
  
  
   <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
  <style>
	body
	{
		background:#64b5f6;
	}
	.bigwell
	{
		background:rgba(0,0,0,.6);
		border:0px;
	}
	.labe
	{
		color:white;
	}
	.black
	{
		color:black;
	}
  </style>
  
 </head>
<body>

	<?php
	if(isset($q))
	{
		if($q)
		{
			echo "
			<script>
			$(document).ready(function(){
				$('#sM').modal('show');
			});
			
			</script>
			";
		}
	}
	?>

	
<div id="sM" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Successfull</h4>
      </div>
      <div class="modal-body">
        <h4>Your form has been submitted successfully...You will get a response on your mail...Thank you!!</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" onclick='window.location.assign("\index.php?fb=1");' data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
	
	
	
</body>
<script>


</script>
</html>
 