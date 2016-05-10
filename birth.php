<?php
session_start();
if(isset($_SESSION['user']))
{
	

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
	.pbody
	{
		min-height:200px;
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
		z-index:9876543;
	}
  </style>
  
 </head>
<body>
<div class='well mywell'>
<h1 class='mont white'>CERTIFICATE GENERATOR</h1>
<a href='logout.php' class='pull-right jk'>
<span class='glyphicon glyphicon-lock'></span>
<span>Logout</span>
</a>
</div>
<form id='birthForm' action='birthSubmit.php' method='get' onsubmit='birthForm();return false;'>
	<div class='container-fluid'>
		<div class='mont white'>
		<center><h2 class='black'><b>BIRTH CERTIFICATE FORM</b></h2></center>
		</div>	
		<div class='well bigwell container'>
		<div class='col-md-12 mar'>
			
			<div class='col-md-3 mont '>
			<div class='pull-right labe'>PLACE OF BIRTH</div>
			</div>
			<div class='col-sm-4'>
			<input type='text' placeholder='Enter the country here' class='form-control' name='country' id='country'/>
			</div>
			<div class='col-sm-4'>
			<input type='text' placeholder='Enter the city,town or district here' class='form-control' name='city' id='city'/>
			</div>
		</div>
		
		<div class='col-md-12 mar'>
			
			<div class='col-md-3 mont '>
			<div class='pull-right labe'>NAME OF CHILD</div>
			</div>
			<div class='col-sm-8'>
			<input type='text' class='form-control' placeholder='Enter the name of child' name='name' id='name'/>
			</div>
		</div>
		
		<div class='col-md-12 mar'>
			<div class='col-md-3 mont '>
			<div class='pull-right labe'>SEX</div>
			</div>
			<div class='col-sm-8'>
			<select class='form-control' name='sex'>
				<option value='male'>MALE</option>
				<option value='female'>FEMALE</option>
				<option value='other'>OTHER</option>
			</select>
			</div>
		</div>
		
		<div class='col-md-12 mar'>
			<div class='col-md-3 mont '>
			<div class='pull-right labe'>DATE OF BIRTH</div>
			</div>
			<div class='col-sm-8'>
			<input type='text' class='form-control' placeholder='Enter the date of birth' name='dob' id='dob'/>
			</div>
		</div>
		
		<div class='col-md-12 mar'><hr class='hrr'>
			<div class='col-md-3 mont '>
			<div class='pull-right labe'>FATHER OF CHILD</div>
			</div>
			<div class='col-sm-8'>
			<input type='text' class='form-control' placeholder='Enter the name of father' name='father' id='father'/>
			</div>
		</div>
		
		<div class='col-md-12 mar'>
			<div class='col-md-3 mont '>
			<div class='pull-right labe'>NATIONALITY</div>
			</div>
			<div class='col-sm-8'>
			<input type='text' class='form-control' placeholder='Enter the nationality of father' name='nf' id='nf'/>
			</div>
		</div>
		
		<div class='col-md-12 mar'>
			<div class='col-md-3 mont '>
			<div class='pull-right labe'>MAIDEN NAME OF MOTHER</div>
			</div>
			<div class='col-sm-8'>
			<input type='text' placeholder='Enter the maiden name of mother' class='form-control' name='mother' id='mother'/>
			</div>
		</div>	
		<div class='col-md-12 mar'>
			<div class='col-md-3 mont '>
			<div class='pull-right labe'>NATIONALITY</div>
			</div>
			<div class='col-sm-8'>
			<input type='text' class='form-control' placeholder='Enter the nationality of mother' name='nm' id='nm'/>
			</div>
		</div>
		
		<div class='col-md-12 mar'>
			<div class='col-md-3 mont '>
			<div class='pull-right labe'>PERMENANT ADDRESS</div>
			</div>
			<div class='col-sm-8'>
			<input type='text' class='form-control' placeholder='Enter the permenant address of father or mother' name='address' id='address'/>
			</div>
		</div>
	
		
		<div class='col-md-12 mar'>
			<button type='submit' class='btn btn-warning btn-block'>SUBMIT</button>
		</div>
		
		</div>
		</div>
		
	</form>	
	
<div id="alM" class="modal fade" role="dialog" style='z-index:987654321'>
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Alert!!</h4>
      </div>
      <div class="modal-body">
        <p id='alText'></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<div id="payModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Online Payment</h4>
      </div>
      <div class="modal-body pbody">
        <label >Name on card</label>
      <input name='cname' id='cname' type='text' class='form-control'>
      <label >Card Number</label>
      <input name='cno' id='cno' type='number' class='form-control'>
	  
		 <div class='col-sm-4'>
		   <label >CVC</label>
		  <input name='cvc' id='cvc' type='number' class='form-control'>
		 </div>

		 <div class='col-sm-4'>
		   <label >EXPIRATION</label>
		  <input name='cmo' id='cmo' placeholder='MM' type='number'  class='form-control'>
		 </div>

		 <div class='col-sm-4'>
		   <label style='color:white'>year</label>
		  <input name='cye' id='cye' type='number' class='form-control' placeholder='YYYY'>
		 </div>
		  </div>
		 
      <div class="modal-footer">
        <button type="button" onclick='pay();' class="btn btn-primary" >Proceed</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
	

	
	
	
</body>
<script>
function birthForm()
{
	var name = $("#name").val();
	var country = $("#country").val();
	var city = $("#city").val();

	var dob = $("#dob").val();
	var father = $("#father").val();
	var nationFather = $("#nf").val();
	var mother = $("#mother").val();
	var nationMother = $("#nm").val();
	var address = $("#address").val();
	
	if(country.length==0)
		{
			$("#alText").text("Enter the Country of child");
			$("#alM").modal('show');
			return false;
		}
	else if(city.length==0)
		{
			$("#alText").text("Enter the city of child");
			$("#alM").modal('show');
			return false;
		}
	else if(name.length==0)
		{
			$("#alText").text("Enter the name of child");
			$("#alM").modal('show');
			return false;
		}
	else if(dob.length==0)
		{
			$("#alText").text("Enter the date of birth of child");
			$("#alM").modal('show');
			return false;
		}
	else if(father.length==0)
		{
			$("#alText").text("Enter the name of Father");
			$("#alM").modal('show');
			return false;
		}
	if(nationFather.length==0)
		{
			$("#alText").text("Enter the nation of Father");
			$("#alM").modal('show');
			return false;
		}
	else if(mother.length==0)
		{
			$("#alText").text("Enter the name of Mother");
			$("#alM").modal('show');
			return false;
		}
	if(nationMother.length==0)
		{
			$("#alText").text("Enter the nation of Mother");
			$("#alM").modal('show');
			return false;
		}
	if(address.length==0)
		{
			$("#alText").text("Enter the permenant address of Father or Mother");
			$("#alM").modal('show');
			return false;
		}
	else
	{
		$("#payModal").modal('show');
		return false;
		
	}
}

function pay()
{
	var cname = $("#cname").val();
	var cno = $("#cno").val();
	var cvc = $("#cvc").val();
	var cmo = $("#cmo").val();
	var cye = $("#cye").val();
	
	if(cname.length==0)
	{
			$("#alText").text("Enter the Name on Card");
			$("#alM").modal('show');	
	}
	else if(cno.length==0)
	{
			$("#alText").text("Enter the Card Number");
			$("#alM").modal('show');	
	}
	else if(cvc.length==0)
	{
			$("#alText").text("Enter the CVC Number");
			$("#alM").modal('show');	
	}
	else if(cmo.length==0)
	{
			$("#alText").text("Enter the Month of Expiration");
			$("#alM").modal('show');	
	}
	else if(cye.length==0)
	{
			$("#alText").text("Enter the Year of Expiration");
			$("#alM").modal('show');	
	}
	else
	{
		document.getElementById("birthForm").submit()
	}
}


</script>
</html>
 