<?php
session_start();
include("config.php");
if(isset($_SESSION['user']))
{
	$user = $_SESSION['user'];
	$qry = "select * from user where id='$user'";
	$q = mysqli_query($con,$qry);
	$n = mysqli_fetch_array($q);
	$name = $n['name'];
}
else
{
echo "<script>
	window.location.assign('signup.php');</script>";
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
	.mywell
	{
		background:black;
		min-height:100px;
		border:0px;
	}
	span
	{
		color:white
	}
	.jk
	{
		margin-top:-30px;
		z-index:99999876543;
		position:absolute;
		right:0;
		margin-right:20px;
		
	}
	</STYLE>
 </head>
<body>

<div class='well mywell'>
<h1 class='mont white'>CERTIFICATE GENERATOR</h1>
<?php
if($name)
{
	echo "<h3 class='mont white'>Welcome $name !</h3>";
}

?>
<a href='logout.php' class='pull-right jk' >
<span class='glyphicon glyphicon-lock'></span>
<span>Logout</span>
</a>
</div>
<div class="outer" style='margin-top:-100px;'>
<div class="middle">

<div class="inner">

<div class='container-fluid'>
	<div class='col-md-2'>
	</div>
	<?php
	if(isset($_GET['fb']))
	{
		if($_GET['fb']==1)
			{
		echo "
		<script>
		$(document).ready(function(){
			$('#fbM').modal('show');
		});
		
		</script>
		";
			}
	}
	
	
	?>
	<div class='col-md-8 well cewell '>
		<div class='mont cewell'>
		<h2><b>SELECT YOUR CERTIFICATE FORM HERE</b></h2>
		<hr>
		<button class='btn btn-primary btn-block' onclick='window.location.href="birth.php";'>BIRTH CERTIFICATE</button>
		<button class='btn btn-primary btn-block' onclick='window.location.href="marriage.php";'>MARRIAGE CERTIFICATE</button>
		<button class='btn btn-primary btn-block' onclick='window.location.href="de.php";'>DEATH CERTIFICATE</button>
		</div>
		
	</div>
	
</div>
</div>
</div>
</div>

<div id="fbM" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Feedback</h4>
      </div>
      <div class="modal-body">
        <h6>Thank you for using our site..Kindly enter your feedback here</h6>
		<textarea rows=4 class='form-control' id='feedback' ></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger"  data-dismiss="modal">Close</button>
		<button type="button" class="btn btn-primary" onclick='savefeed();' >Save</button>
      </div>
    </div>

  </div>
</div>

</body>
</html>
 <script>
 function savefeed()
 {
	 var feed = $("#feedback").val();
	 if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  } else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		  document.getElementById("rows").value=xmlhttp.responseText;
		  
		}
		   else document.getElementById("rows").innerHTML="";
	  }
	  xmlhttp.open("GET","savefeed.php?feed="+feed,true);
	  xmlhttp.send();
 }
 </script>