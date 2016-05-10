<?php
session_start();
include('config.php');
$id = $_GET['id'];

if(!isset($_SESSION['admin']))
{
	echo "
	<script>
		window.location.assign('\login.php');
	</script>
	";
	die();
}

?>

<!DOCTYPE html>
<html lang="en">
<style>

</style>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Difgra Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

     <script src="html2canvas.js" type="text/javascript"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  

</head>

<body onunload="">

    <div id="wrappe">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style='background:black;'>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">CERTIFICATE GENERATOR</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
			
			
               <li><a href='logout.php'><i class='fa fa-lock'></i>Logout</a></li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-6">
                       
                        
                    </div>
					<div class='col-lg-12'>
						<div class='col-sm-7'>
							 <h1 class="page-header">
                            DEATH CERTIFICATE REQUEST
                        </h1>
						</div>
						<div class='col-sm-5'>
						
						</div>
						
					</div>
                </div>
                <!-- /.row -->
		
              
                <!-- /.row -->

           	
				<div id='jobs '>
					<table class='table table-bordered table-hover table-striped'>
			<?php
			$qry = "select * from death where id='$id'";
			$q = mysqli_query($con,$qry);
			$row = mysqli_fetch_array($q);
			
			?>
						</thead>
						<tbody>
						<tr>
							<th>SUBMITTED DATE</th>
							<td><?php echo $row['cur_date'] ; ?></td>
						</tr>
						
						<tr>
							<th>NAME OF DECEASED</th>
							<td><?php echo $row['name'] ; ?></td>
						</tr>
						<tr>
							<th>SEX</th>
							<td><?php echo $row['sex'] ; ?></td>
						</tr>
						<tr>
							<th>DATE OF DEATH</th>
							<td><?php echo $row['adress'] ; ?></td>
						</tr>
						<tr>
						<tr>
							<th>NAME OF FATHER</th>
							<td><?php echo $row['father'] ; ?></td>
						</tr>
						<tr>
							<th>DATE OF DEATH</th>
							<td><?php echo $row['Ddate'] ; ?></td>
						</tr>
						<tr>
							<th>PLACE OF DEATH</th>
							<td><?php echo $row['Dplace'] ; ?></td>
						</tr>
						
						
						
						<tr>
							<th>NAME OF HOSPITAL</th>
							<td><?php echo $row['hosp'] ; ?></td>
						</tr>
						<tr>
							<th>CAUSE OF DEATH</th>
							<td><?php echo $row['cause'] ; ?></td>
						</tr>
						
						
						</tbody>
						</table>
						
			<?php
				if($row['status']=="")
				{
					echo "
					<button id='btn-Preview-Image' class='btn btn-primary btn-block'>CONFIRM</button>
					";
				}
				?>
    <a id="btn-Convert-Html2Image" href="#"><button class='btn btn-primary btn-block'>SEND MAIL</button></a>
	         		
            </div>
			
			
                <!-- /.row -->

            
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper --><center>
<div id="html-content-holder"  style="background-color: white; color: black; width: 600px;
        padding-left: 25px; padding-top: -10px;margin-bottom:10px;">
<h1 style='color:black'><br><br><center>CERTIFICATE OF MARRIAGE</h1>
<h3><center><I>This certifies that</I><BR><h2> <?php echo $row['name'] ; ?> </h2>
was passed away on <?php echo $row['Ddate'] ; ?> at <?php echo $row['Dplace'] ; ?> due to <?php echo $row['cause'] ; ?></center>
<br>
In Witness Whereof the said Hospital has caused this certificate to be signed by its duly authorized officer and its Corporate seal to be hereunto affixed
</h3>
<img src='images/sign.png' style='width:50%'>
<br><br>

</h3><br><br>
</div>
<div id="editor"></div>

    <!-- jQuery -->
    
   
    		
    <br />
  
    <div id="previewImage">
    </div>
    <!-- Bootstrap Core JavaScript -->
   
 
</body>
<?php 
$user=$row['user_id'];
$idd = $row['id'];
$file = rand();
echo"
<script>

$('#btn-Convert-Html2Image').hide();

var element = $('#html-content-holder'); // global variable
var getCanvas; // global variable
 
    $('#btn-Preview-Image').on('click', function () {
         html2canvas(element, {
         onrendered: function (canvas) {
                $('#previewImage').append(canvas);
                getCanvas = canvas;
				$('#btn-Preview-Image').hide();
				$('#btn-Convert-Html2Image').show();
				$('#previewImage').hide();
             }
         });
    });
	
	$('#btn-Convert-Html2Image').on('click', function () {
    var imgageData = getCanvas.toDataURL('image/png');
    // Now browser starts downloading it instead of just showing it
    var newData = imgageData.replace(/^data:image\/png/, 'data:application/octet-stream');
    $('#btn-Convert-Html2Image').attr('download', '$file.png').attr('href', newData);
	
	setTimeout(function (){

  window.location.assign('mail/index.php?id=C:/Users/ARAVIND/Downloads/$file.png&user=$user&idd=$idd&type=death');

}, 3000);
	
});
	
</script>
";
?>