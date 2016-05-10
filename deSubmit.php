<?php
session_start();
include("config.php");
$user = $_SESSION['user'];
if(isset($_GET['name'])&&(isset($_GET['father']))&&(isset($_GET['cause']))){
$date = $_GET['date'];
$name = $_GET['name'];
$sex = $_GET['sex'];
$father = $_GET['father'];
$Dplace = $_GET['Dplace'];
$hospital = $_GET['hospital'];

$cause = $_GET['cause'];
$address = $_GET['address'];

date_default_timezone_set('Asia/Kolkata');
$date = date("Y-m-d-l");
$time = date("H:i:s");

$qry = "INSERT INTO `death`(`cur_date`, `Ddate`, `name`, `Dplace`, `hosp`, `cause`, `adress`,`sex`,`father`,`user_id`) VALUES ('$date $time','$date','$name','$Dplace','$hospital','$cause','$address','$sex','$father','$user')";
$q = mysqli_query($con,$qry) or die("ERROR");
}
else
{
	echo "<script>
			window.location.assign('\de.php');
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
 