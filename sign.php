<?php
include("config.php");
$name = $_POST['name'];
$email = $_POST['email'];
$ssn = $_POST['ssn'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];

if($pass==$cpass)
{
	$qry = "insert into user(name,ssn,email,pass) values('$name','$ssn','$email','$pass')";
	$q = mysqli_query($con,$qry);
}

if($q)
{
	echo "<script>
			window.location.assign('\signup.php?success=1');
		  </script>
		";
}
else
{
	echo "<script>
			window.location.assign('\signup.php?success=2');
		  </script>
		";
}
?>