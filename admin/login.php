<?php
session_start();
include('config.php');
if((isset($_POST['uname']))&&(isset($_POST['upass'])))
{
	$uname = $_POST['uname'] ; 
	$upass = $_POST['upass'] ;
	
	$qry = "select * from admin where id='$uname' and pass='$upass'";
	$q = mysqli_query($con,$qry);
	$n = mysqli_num_rows($q);
	
	$qq = mysqli_fetch_array($q);
	if($n==0)
	{
		echo "
		<script>window.location.assign('login.php?error=3');</script>
		";
	}
	if($n==1)
	{
		$_SESSION['admin']=$qq['id'];
	echo "	<script>window.location.assign('index.php');</script>";
		
	}
}
?>
<html>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Certgen Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  

</head>
<style>
body
{
	background:black;
}
.pa
{
	margin-top:10px;
}
.paa
{
	margin-top:200px;
	margin-left:490px;
}
.white
{
	color:white;
}
</style>
<body style='background:;'>
<?php
if(isset($_GET['error'])){
if($_GET['error']==3)
{
echo "<div class='alert alert-danger'><center><strong>SORRY !</strong>Username or Password Incorrect</center></div>";
}}
?>
<h1 class='white'>ADMIN DASHBOARD</h1>
<div class='col-sm-12'>

<div class='col-xs-3 paa'>

<form action='login.php' method='post' autocomplete='false'>
<input type="password" style="width: 0;height: 0; visibility: hidden;position:absolute;left:0;top:0;"/>
	<input type='text' id='uname' name='uname' class='form-control' placeholder='Username' autocomplete="off">
	<input type='password' name='upass' class='form-control pa' placeholder='Password' autocomplete='off' >
	<button type='submit' class='btn btn-block btn-primary pa'>LOGIN</button>
</form>
</div>
</div>
<script src="js/jquery.js"></script>
<script>
$("#uname").focus();
</script>
</body>
</html>
  