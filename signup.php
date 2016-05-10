<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login/Sign-In</title>
    
    
    <link rel="stylesheet" href="css/normalize.css">

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/styless.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
     <style>
	body
	{
		background:#64b5f6;
	}
	</STYLE>
    
  </head>

  <body>
<?php
if(isset($_GET['success']))
{
	if($_GET['success']==1)
	{
		echo "
		<div class='alert alert-success'><center>Congrats! </strong>You have been successfully registered.Kindly login now</center></div>
		";
	}
	if($_GET['success']==2)
	{
		echo "
		<div class='alert alert-danger'><center>Sorry! </strong>Try registering again</center></div>
		";
	}
}
?>
    <div class="logmod">
  <div class="logmod__wrapper">
   
    <div class="logmod__container">
      <ul class="logmod__tabs">
        <li data-tabtar="lgm-2"><a href="#">Login</a></li>
        <li data-tabtar="lgm-1"><a href="#">Sign Up</a></li>
      </ul>
      <div class="logmod__tab-wrapper">
      <div class="logmod__tab lgm-1">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Enter your personal details <strong>to create an acount</strong></span>
        </div>
        <div class="logmod__form">
          <form id='signUp' onsubmit='signup();return false;' accept-charset="utf-8" action="sign.php" class="simform" method='post'>
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Your Name*</label>
                <input class="form-control" onblur='checkssn();' maxlength="255" name='name' id="name" placeholder="Name" type="text" size="50" />
              </div>
            </div>
			<div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Email*</label>
                <input class="form-control" onblur='checkemail();' maxlength="255" name='email' id="email" placeholder="Email" type="email" size="50" />
              </div>
            </div>
			<div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">SSN No.*</label>
                <input class="form-control" onblur='checkssn();' maxlength="255" name='ssn' id="ssn" placeholder="SSN No." type="text" size="50" />
              </div>
            </div>
            <div class="sminputs">
              <div class="input string optional">
                <label class="string optional" for="user-pw">Password *</label>
                <input class="form-control" maxlength="255" name='pass' id="pass" placeholder="Password" type="password" size="50" />
              </div>
              <div class="input string optional">
                <label class="string optional" for="user-pw-repeat">Repeat password *</label>
                <input class="form-control" maxlength="255" name='cpass' id="cpass" placeholder="Repeat password" type="password" size="50" />
              </div>
            </div>
            <div class="simform__actions">
              <input class="sumbit" name="commit" type="submit" value="Create Account" />
              <span class="simform__actions-sidetext">By creating an account you agree to our <a class="special" target="_blank" role="link">Terms & Privacy</a></span>
            </div> 
          </form>
        </div> 
        <div class="logmod__alter">
          
        </div>
      </div>
      <div class="logmod__tab lgm-2">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Enter your email and password <strong>to sign in</strong></span>
        </div> 
        <div class="logmod__form">
         
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Email or SSN*</label>
                <input class="form-control"  maxlength="255" id="lemail" placeholder="Email or SSN" type="text" size="50" />
              </div>
            </div>
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-pw">Password *</label>
                <input class="form-control" maxlength="255"  id="lpass" placeholder="Password" type="password" size="50" />
                						<span class="hide-password">Show</span>
              </div>
            </div>
            <div class="simform__actions">
              <input onclick='login();' class="sumbit" name="commit" type="submit" value="Log In" />
              
            </div> 
          </form>
        </div> 
        
          </div>
      </div>
    </div>
  </div>
</div>

<div id="alM" class="modal fade" role="dialog">
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

<div id="lS" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login Successfull</h4>
      </div>
      <div class="modal-body">
        <p id=''>You will be redirected to the main page...</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


   

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
<script>
function signup()
{
	var name = $("#name").val();
	var email = $("#email").val();
	var ssn = $("#ssn").val();
	var pass = $("#pass").val();
	var cpass = $("#cpass").val();
	
	if(email.length==0)
	{
		$("#alText").text("Enter the email ID");
			$("#alM").modal('show');
			return false;
	}
	if(name.length==0)
	{
		$("#alText").text("Enter Your Name");
			$("#alM").modal('show');
			return false;
	}
	else if(ssn.length==0)
	{
		$("#alText").text("Enter the SSN No.");
			$("#alM").modal('show');
			return false;
	}
	else if((pass.length==0)||(cpass.length==0))
	{
		$("#alText").text("Enter the Password");
			$("#alM").modal('show');
			return false;
	}
	else if((pass!=cpass)&&(pass.length>0))
	{
		$("#alText").text("Enter the Passwords again");
			$("#alM").modal('show');
			return false;
	}
	else
	{
		$("#signUp").submit();
	}
}

function login()
{
	var email = $("#lemail").val();
	var pass = $("#lpass").val();
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  } else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			if(xmlhttp.responseText=="error")
			{
				$("#alText").text("Username or Password Incorrect");
				$("#alM").modal('show');
			}
			if(xmlhttp.responseText=="success")
			{	
				$("#lS").modal('show');
				window.setInterval(function(){
				  window.location.assign('index.php');
				}, 2000);
				
			}
			
		}
		   else {document.getElementById("rows").innerHTML="";}
	  }
	  xmlhttp.open("GET","checklog.php?email="+email+"&pass="+pass,true);
	  xmlhttp.send();
	
}

function checkemail()
{
	var email = $("#email").val();
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  } else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			if(xmlhttp.responseText=="error")
			{
				$("#alText").text("Sorry,The email address you entered is already registered,try using another email");
				$("#alM").modal('show');
			}
			
		}
		   else {document.getElementById("rows").innerHTML="";}
	  }
	  xmlhttp.open("GET","checkemail.php?email="+email,true);
	  xmlhttp.send();
	
}

function checkssn()
{
	var ssn = $("#ssn").val();
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  } else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			if(xmlhttp.responseText=="error")
			{
				$("#alText").text("Sorry,The SSN No you entered is already registered");
				$("#alM").modal('show');
			}
			
		}
		   else {document.getElementById("rows").innerHTML="";}
	  }
	  xmlhttp.open("GET","checkssn.php?ssn="+ssn,true);
	  xmlhttp.send();
}
</script>