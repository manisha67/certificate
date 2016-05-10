<?php
include("config.php");
$email = $_GET['email'];
$qry = "select * from user where email='$email'";
$q = mysqli_query($con,$qry);
$n = mysqli_num_rows($q);
if($n>0)
{
	echo "error";
}
?>