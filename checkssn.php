<?php
include("config.php");
$ssn = $_GET['ssn'];
$qry = "select * from user where ssn='$ssn'";
$q = mysqli_query($con,$qry);
$n = mysqli_num_rows($q);
if($n>0)
{
	echo "error";
}
?>