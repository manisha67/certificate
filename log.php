<?php
include("config.php");
$id = $_GET['id'];
$pass = $_GET['pass'];

$qry = "select * from user where id='$id' and pass='$pass' ";
$q = mysqli_query($con,$qry);

$n = mysqli_num_rows($q);
if($n==0)
{
	echo "error";
}
else
{
	echo "success";
}
?>