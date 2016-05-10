<?php
session_start();
include("config.php");
$email = $_GET['email'];
$pass = $_GET['pass'];

$qry = "select * from user where email='$email' or ssn='$email' and pass='$pass'";
$q = mysqli_query($con,$qry);

$n = mysqli_num_rows($q);
if($n==0)
{
	echo "error";
}
else
{
	
	$r = mysqli_fetch_array($q);
	$id = $r['id'];
	$_SESSION['user']=$id;
	echo "success";
	
}
?>