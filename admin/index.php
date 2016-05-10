<?php
session_start();
include('config.php');
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
th
{
	text-align:center;
}
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
                            Dashboard 
                        </h1>
						</div>
						<div class='col-sm-5'>
						
						</div>
						
					</div>
                </div>
                <!-- /.row -->
		
              
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading" style='height:100px;'>
                                <div class="row">	
                                    <div class="col-xs-3">
                                        <i class="glyphicon glyphicon-briefcase fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
									<?php
									$qry = "select * from birth where status=''";
									$q = mysqli_query($con,$qry);
									$n1 = mysqli_num_rows($q);
									
									$qry = "select * from marriage where status=''";
									$q = mysqli_query($con,$qry);
									$n2 = mysqli_num_rows($q);
									
									$qry = "select * from death where status=''";
									$q = mysqli_query($con,$qry);
									$n3 = mysqli_num_rows($q);
									
									$n = $n1 + $n2 + $n3 ;
										?>
                                        <div class="huge"><?php echo $n ;?></div>
										
                                        <div>Pending certificates</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left"></span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6
										">
                        <div class="panel panel-green">
                            <div class="panel-heading" style='height:100px;'>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="glyphicon glyphicon-time fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
									<?php
									$qry = "select * from birth";
									$q = mysqli_query($con,$qry);
									$n1 = mysqli_num_rows($q);
									?>
                                        <div class="huge"><?php echo $n1 ;?></div>
                                        <div>Birth Certificates</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left"></span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading" style='height:100px;'>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="glyphicon glyphicon-ok fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
									<?php
									$qry = "select * from marriage ";
									$q = mysqli_query($con,$qry);
									$n2 = mysqli_num_rows($q);
									?>
                                        <div class="huge"><?php echo $n2 ; ?></div>
                                        <div>Marriage Certificates</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left"></span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" >
                        <div class="panel panel-red" >
                            <div class="panel-heading" style='height:100px;'>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="glyphicon glyphicon-remove fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
									<?php
									$qry = "select * from death ";
									$q = mysqli_query($con,$qry);
									$n2 = mysqli_num_rows($q);
									?>
                                        <div class="huge"><?php echo $n2 ; ?></div>
                                        <div>Death Certificates</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left"></span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
				
				<div id='jobs'>
					<table class='table table-bordered table-hover table-striped'>
						<thead>
						<tr>
							<th>
								TYPE
							</th>
							
							<th>
								NAME
							</th>
							<th>
								DATE
							</th>
							
							<th>
								PAYMENT
							</th>
							<th>
								STATUS
							</th>
							<th>
								VIEW DETAILS
							</th>
						</tr>
						</thead>
						<tbody>
						<?PHP
						$qry = "select * from birth where status='' order by id desc";
						$q = mysqli_query($con,$qry);
						while($row = mysqli_fetch_array($q))
						{
							$id=$row['id'];
							echo"
							<tr>
								<th>
									BIRTH
								</th>
								<th>
									$row[Cname]
								</th>
								<th>
									$row[cur_date]
								</th>
								<th>
									SUCCESS
								</th>
								<th>
									PENDING
								</th>
								<th>
									<button onclick='window.location.assign(`birth.php?id=$id`);' class='btn btn-info btn-block'>VIEW DETAILS</button>
								</th>";
						}
						?>
						<?PHP
						$qry = "select * from marriage where status='' order by id desc";
						$q = mysqli_query($con,$qry);
						while($row = mysqli_fetch_array($q))
						{$id=$row['id'];
							echo"
							<tr>
								<th>
									MARRIAGE
								</th>
								<th>
									$row[Gname]
								</th>
								<th>
									$row[cur_date]
								</th>
								<th>
									SUCCESS
								</th>
								<th>
									PENDING
								</th>
								<th>
									<button onclick='window.location.assign(`marriage.php?id=$id`);' class='btn btn-info btn-block'>VIEW DETAILS</button>
								</th>";
						}
						?>
						<?PHP
						$qry = "select * from death where status='' order by id desc";
						$q = mysqli_query($con,$qry);
						while($row = mysqli_fetch_array($q))
						{$id=$row['id'];
							echo"
							<tr>
								<th>
									DEATH
								</th>
								<th>
									$row[name]
								</th>
								<th>
									$row[cur_date]
								</th>
								<th>
									SUCCESS
								</th>
								<th>
									PENDING
								</th>
								<th>
									<button onclick='window.location.assign(`death.php?id=$id`);' class='btn btn-info btn-block'>VIEW DETAILS</button>
								</th>";
						}
						?>
						<?PHP
						$qry = "select * from birth where status='success' order by id desc";
						$q = mysqli_query($con,$qry);
						while($row = mysqli_fetch_array($q))
						{
							$id=$row['id'];
							echo"
							<tr>
								<th>
									BIRTH
								</th>
								<th>
									$row[Cname]
								</th>
								<th>
									$row[cur_date]
								</th>
								<th>
									SUCCESS
								</th>
								<th>
									SUCCESS
								</th>
								<th>
									<button onclick='window.location.assign(`birth.php?id=$id`);' class='btn btn-info btn-block'>VIEW DETAILS</button>
								</th>";
						}
						?>
						<?PHP
						$qry = "select * from marriage where status='success' order by id desc";
						$q = mysqli_query($con,$qry);
						while($row = mysqli_fetch_array($q))
						{$id=$row['id'];
							echo"
							<tr>
								<th>
									MARRIAGE
								</th>
								<th>
									$row[Gname]
								</th>
								<th>
									$row[cur_date]
								</th>
								<th>
									SUCCESS
								</th>
								<th>
									SUCCESS
								</th>
								<th>
									<button onclick='window.location.assign(`marriage.php?id=$id`);' class='btn btn-info btn-block'>VIEW DETAILS</button>
								</th>";
						}
						?>
						<?PHP
						$qry = "select * from death where status='success' order by id desc";
						$q = mysqli_query($con,$qry);
						while($row = mysqli_fetch_array($q))
						{$id=$row['id'];
							echo"
							<tr>
								<th>
									DEATH
								</th>
								<th>
									$row[name]
								</th>
								<th>
									$row[cur_date]
								</th>
								<th>
									SUCCESS
								</th>
								<th>
									SUCCESS
								</th>
								<th>
									<button onclick='window.location.assign(`death.php?id=$id`);' class='btn btn-info btn-block'>VIEW DETAILS</button>
								</th>";
						}
						?>
						</tbody>
						</table>
						
				
             
            </div>
                <!-- /.row -->

            
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	 <script src="js/j.js"></script>
	  <script src="js/jj.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
