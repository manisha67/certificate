<?php
include('config.php');
$feed = $_GET['feed'];
$qry = "insert into feedback(feedback) values($feed)";
$q = mysqli_query($con,$qry);
?>