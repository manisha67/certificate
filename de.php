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
 
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
   <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  
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
	.col-md-4
	{
		margin-left:-30px;
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
	<div class='container-fluid'>
		<div class='mont white'>
		<center><h2 class='black'><b>DEATH CERTIFICATE FORM</b></h2></center>
		</div>	
		<div class='well bigwell container'>
		<div class='col-md-12 mar'>
	<form id='deForm' method='get' 	action='deSubmit.php' onsubmit='deForm();return false;'>	
			<div class='col-md-4 mont '>
			<div class='pull-right labe'>DATE OF DEATH</div>
			</div>
			<div class='col-sm-8'>
			<input type='text' placeholder='Enter the date here' class='form-control' name='date' id='date'/>
			</div>
			
		</div>
		
		<div class='col-md-12 mar'>
			
			<div class='col-md-4 mont '>
			<div class='pull-right labe'>NAME OF DECEASED</div>
			</div>
			<div class='col-sm-8'>
			<input type='text' class='form-control' placeholder='Enter the name of Deceased person' name='name' id='name'/>
			</div>
		</div>
		
		<div class='col-md-12 mar'>
			<div class='col-md-4 mont '>
			<div class='pull-right labe'>SEX OF THE DECEASED</div>
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
			<div class='col-md-4 mont '>
			<div class='pull-right labe'>NAME OF THE FATHER OF THE DECEASED</div>
			</div>
			<div class='col-sm-8'>
			<input type='text' class='form-control' placeholder='Enter the name of father of the Deceased' name='father' id='father'/>
			</div>
		</div>
		
		<div class='col-md-12 mar'>
			<div class='col-md-4 mont '>
			<div class='pull-right labe'>PLACE OF DEATH</div>
			</div>
			<div class='col-sm-8'>
			<input type='text' class='form-control' placeholder='Enter the place of death' name='Dplace' id='Dplace'/>
			</div>
		</div>
		
		<div class='col-md-12 mar'>
			<div class='col-md-4 mont '>
			<div class='pull-right labe'>HOSPITAL NAME</div>
			</div>
			<div class='col-sm-8'>
			<input type='text' class='form-control' placeholder='Enter the name of hospital' name='hospital' id='hospital'/>
			</div>
		</div>
		
		<div class='col-md-12 mar'>
			<div class='col-md-4 mont '>
			<div class='pull-right labe'>CAUSE OF DEATH</div>
			</div>
			<div class='col-sm-8'>
			<input type='text' placeholder='Enter the cause of death' class='form-control' name='cause' id='cause'/>
			</div>
		</div>	
		
		<div class='col-md-12 mar'>
			<div class='col-md-4 mont '>
			<div class='pull-right labe'>RESIDENTIAL ADDRESS</div>
			</div>
			<div class='col-sm-8'>
			<input type='text' class='form-control' placeholder='Enter the residential address' name='address' id='address'/>
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
</html>
 
 
 <script>
 function deForm()
 {
	 var name = $("#name").val()
	 var father = $("#father").val();
	 var Dplace = $("#Dplace").val();
	 var hospital = $("#hospital").val();
	 var cause = $("#cause").val();
	 var address = $("#address").val();
	 
	 if(name.length==0)
		{
			$("#alText").text("Enter the Name of the Deceased person");
			$("#alM").modal('show');
			return false;
		}
	else if(father.length==0)
		{
			$("#alText").text("Enter the Name of the Fater of Deceased person");
			$("#alM").modal('show');
			return false;
		}
	 else if(Dplace.length==0)
		{
			$("#alText").text("Enter the Place of Death");
			$("#alM").modal('show');
			return false;
		}
	else if(hospital.length==0)
		{
			$("#alText").text("Enter the Name of the Hospital");
			$("#alM").modal('show');
			return false;
		}
	else if(cause.length==0)
		{
			$("#alText").text("Enter the cause of Death");
			$("#alM").modal('show');
			return false;
		}
	else if(address.length==0)
		{
			$("#alText").text("Enter the residential address");
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
		document.getElementById("deForm").submit()
	}
}

 </script>