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
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> <script src="js/jquery.js"></script>
 
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
	.hed
	{
		font-weight:bold;
		color:black	
	}
	#alM
	{
		text-align:center;
	}
	.col-md-4{
		margin-left:-40px;
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
<form id='marriageForm' method='get' action='marriageSubmit.php' onsubmit=' marriageForm();return false; '>
	<div class='container-fluid'>
		<div class='mont white'>
		<center><h2 class='hed'><b>MARRIAGE CERTIFICATE FORM</b></h2></center>
		</div>	
		<div class='well bigwell container'>
		<div class='col-md-12 mar'>
			
			<div class='col-md-4 mont '>
			<div class='pull-right labe'>DATE OF MARRIAGE</div>
			</div>
			<div class='col-sm-8'>
			<input type='text' placeholder='Select the marriage date from here' class='form-control' name='date' id='date'/>
			</div>
		</div>
		
		<div class='col-md-12 mar'>
			
			<div class='col-md-4 mont '>
			<div class='pull-right labe'>PLACE OF MARRIAGE</div>
			</div>
			<div class='col-sm-8'>
			<input type='text' class='form-control' placeholder='Enter a valid place' name='place' id='place'/>
			</div>
		</div>
		
		<div class='col-md-12 mar'><hr class='hrr'>
			<div class='col-md-4 mont '>
			<div class='pull-right labe'>NAME OF BRIDE GROOM</div>
			</div>
			<div class='col-sm-8'>
			<input type='text' class='form-control' placeholder='Enter the name of Bridegroom' name='nameGroom' id='nameGroom'/>
			</div>
		</div>
		
		<div class='col-md-12 mar'>
			<div class='col-md-4 mont '>
			<div class='pull-right labe'>RELIGION</div>
			</div>
			<div class='col-sm-8'>
			<input type='text' class='form-control' placeholder='Enter the religion of Bridegroom' name='relGroom' id='relGroom'/>
			</div>
		</div>
		
		<div class='col-md-12 mar'>
			<div class='col-md-4 mont '>
			<div class='pull-right labe'>AGE AT THE TIME OF MARRIAGE</div>
			</div>
			<div class='col-sm-8'>
			<input type='text' class='form-control' placeholder='Enter the age of Bridegroom' name='ageGroom' id='ageGroom'/>
			</div>
		</div>
		
		<div class='col-md-12 mar'>
			<div class='col-md-4 mont '>
			<div class='pull-right labe'>OCCUPATION AT THE TIME OF MARRIAGE</div>
			</div>
			<div class='col-sm-8'>
			<input type='text' placeholder='Enter the occupation of Bridegroom' class='form-control' placeholder='' name='occupGroom' id='occupGroom'/>
			</div>
		</div>
		
		<div class='col-md-12 mar'>
			<div class='col-md-4 mont '>
			<div class='pull-right labe'>STATUS AT THE TIME OF MARRIAGE</div>
			</div>
			<div class='col-sm-8'>
			<select  class='form-control' name='statusGroom' id='statusGroom'>
				
				<option value='unmarried'>UNMARRIED</option>
				<option value='married'>MARRIED</option>
			</select>
			</div>
		</div>
		
		<div class='col-md-12 mar'>
			<div class='col-md-4 mont '>
			<div class='pull-right labe'>ADDRESS OF BRIDE GROOM</div>
			</div>
			<div class='col-sm-8'>
			<textarea class='form-control' placeholder='Enter valid address of Bridegroom' name='adrGroom' id='adrGroom' rows=4></textarea>
			</div>
		</div>
		
		<div class='col-md-12 mar'><hr class='hrr'>
			<div class='col-md-4 mont '>
			<div class='pull-right labe'>NAME OF BRIDE</div>
			</div>
			<div class='col-sm-8'>
			<input type='text' class='form-control' placeholder='Enter the name of Bride' name='nameBride' id='nameBride'/>
			</div>
		</div>
		
		<div class='col-md-12 mar'>
			<div class='col-md-4 mont '>
			<div class='pull-right labe'>RELIGION</div>
			</div>
			<div class='col-sm-8'>
			<input type='text' class='form-control' placeholder='Enter the religion of Bride'  name='relBride' id='relBride'/>
			</div>
		</div>
		
		<div class='col-md-12 mar'>
			<div class='col-md-4 mont '>
			<div class='pull-right labe'>AGE AT THE TIME OF MARRIAGE</div>
			</div>
			<div class='col-sm-8'>
			<input type='text' class='form-control' placeholder='Enter the age of Bride' name='ageBride' id='ageBride'/>
			</div>
		</div>
		
		
		
		<div class='col-md-12 mar'>
			<div class='col-md-4 mont '>
			<div class='pull-right labe'>OCCUPATION AT THE TIME OF MARRIAGE</div>
			</div>
			<div class='col-sm-8'>
			<input type='text' class='form-control' placeholder='Enter the occupation of Bride' name='occupBride' id='occupBride'/>
			</div>
		</div>
		
		<div class='col-md-12 mar'>
			<div class='col-md-4 mont '>
			<div class='pull-right labe'>STATUS AT THE TIME OF MARRIAGE</div>
			</div>
			<div class='col-sm-8'>
			<select  class='form-control' name='statusBride' id='statusBride'>
				<option value='unmarried'>UNMARRIED</option>
				<option value='married'>MARRIED</option>
			</select>
			</div>
		</div>
		
		<div class='col-md-12 mar'>
			<div class='col-md-4 mont '>
			<div class='pull-right labe'>ADDRESS OF BRIDE</div>
			</div>
			<div class='col-sm-8'>
			<textarea class='form-control' placeholder='Enter valid address of Bride'  name='adrBride' id='adrBride' rows=4></textarea>
			</div>
		</div>
		
		<div class='col-md-12 mar'><hr class='hrr'>
			<div class='col-md-4 mont '>
			<div class='pull-right labe'>NAME OF WITNESS</div>
			</div>
			<div class='col-sm-8'>
			<input type='text' class='form-control' placeholder='Enter the name of Witness' name='nameWitness' id='nameWitness'/>
			</div>
		</div>
		
		<div class='col-md-12 mar'>
			<div class='col-md-4 mont '>
			<div class='pull-right labe'>ADDRESS OF WITNESS</div>
			</div>
			<div class='col-sm-8'>
			<textarea  class='form-control' placeholder='Enter Witness name' name='adrWitness' id='adrWitness' rows=4></textarea>
			</div>
			 
		</div>
		
		
		<div class='col-md-12 mar'>
			<div class='col-md-4 mont '>
			<div class='pull-right labe'>RELATION WITH MARRIED COUPLE</div>
			</div>
			<div class='col-sm-8'>
			<input type='text' class='form-control' placeholder='Enter the relation with the Couples' name='relation' id='relation'/>
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
 function marriageForm()
{
	var date = $("#date").val();
	var place = $("#place").val();
	var nameGroom = $("#nameGroom").val();
	var relGroom = $("#relGroom").val();
	var ageGroom = $("#ageGroom").val();
	var occupGroom = $("#occupGroom").val();
	var statusGroom = $("#statusGroom").val();
	var adrGroom = $("#adrGroom").val();
	
	var nameBride = $("#nameBride").val();
	var relBride = $("#relBride").val();
	var ageBride = $("#ageBride").val();
	var occupBride = $("#occupBride").val();
	var statusBride = $("#statusBride").val();
	var adrBride = $("#adrBride").val();
	
	var nameWitness = $("#nameWitness").val();
	var adrWitness = $("#adrWitness").val();
	var relation = $("#relation").val();
	
		if(date.length==0)
		{
			$("#alText").text("Enter the date of marriage");
			$("#alM").modal('show');
			
		}
		else if(place.length==0)
		{
			$("#alText").text("Enter the place of marriage");
			$("#alM").modal('show');
			
		}
		else if(place.length==0)
		{
			$("#alText").text("Enter the place of marriage");
			$("#alM").modal('show');
			
		}
		
		
		
		
		else if(nameGroom.length==0)
		{
			$("#alText").text("Enter the name of Groom");
			$("#alM").modal('show');
			
		}
		else if(relGroom.length==0)
		{
			$("#alText").text("Enter the Religion of Groom");
			$("#alM").modal('show');
			
		}
		else if(ageGroom.length==0)
		{
			$("#alText").text("Enter the Age of Groom");
			$("#alM").modal('show');	
		}
		else if(occupGroom.length==0)
		{
			$("#alText").text("Enter the Occupation of Groom");
			$("#alM").modal('show');	
		}
		else if(statusGroom.length==0)
		{
			$("#alText").text("Select the status of Groom");
			$("#alM").modal('show');	
		}
		else if(adrGroom.length==0)
		{
			$("#alText").text("Enter the Address of Groom");
			$("#alM").modal('show');	
		}
		
		
			else if(nameBride.length==0)
		{
			$("#alText").text("Enter the name of Bride");
			$("#alM").modal('show');
			
		}
		else if(relBride.length==0)
		{
			$("#alText").text("Enter the Religion of Bride");
			$("#alM").modal('show');
			
		}
		else if(ageBride.length==0)
		{
			$("#alText").text("Enter the Age of Bride");
			$("#alM").modal('show');	
		}
		else if(occupBride.length==0)
		{
			$("#alText").text("Enter the Occupation of Bride");
			$("#alM").modal('show');	
		}
		else if(statusBride.length==0)
		{
			$("#alText").text("Select the status of Bride");
			$("#alM").modal('show');	
		}
		else if(adrBride.length==0)
		{
			$("#alText").text("Enter the Address of Bride");
			$("#alM").modal('show');	
		}
		else if(nameWitness.length==0)
		{
			$("#alText").text("Enter the Name of Witness");
			$("#alM").modal('show');	
		}
		else if(adrWitness.length==0)
		{
			$("#alText").text("Enter the Address of Witness");
			$("#alM").modal('show');	
		}
		else if(relation.length==0)
		{
			$("#alText").text("Enter the Relation of Witness with Couples");
			$("#alM").modal('show');	
		}
		
		
		
		else
		{
			$("#payModal").modal('show');
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
		document.getElementById("marriageForm").submit()
	}
}

 </script>