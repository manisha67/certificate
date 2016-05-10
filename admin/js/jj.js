//alert("hai");
sum=0;

function amblur()
{
	for(i=1;i<=10;i++)
	{
		var am = "#amm"+i;
		var am = $(am).val();
		var am = parseInt(am);
		if(am>0)
		{
			sum = sum + am ;
		}
	}
	
	var newam = $("#amnew").val();
	var newam = parseFloat(newam);
	
	if(newam>0)
	{
		sum = sum + newam;
	}
	
	$("#totup").val(sum);
	var adv = $("#advance").val();
	var adv = parseInt(adv);
	var bal = sum - adv ;
	$("#balance").val(bal);
	sum = 0;
}

function advc()
{		
	var total = $("#totup").val();
	var inttot = parseFloat(total);
	var advance = $("#advance").val();
	var intadv = parseFloat(advance);
	var bal = inttot - intadv;
	$("#balance").val(bal);
	
}

function addjob()
{
	$("#newdesc").removeClass("hidden");
	$("#newdesc").slideDown();
	$("#addjobbtn").addClass("hidden");
	$("#norow").addClass("hidden");
}

function copyblur(id)
{
	for(i=1;i<=10;i++)
	{
		var copy = "#copy"+i;
		var copy = $(copy).val();
		var copy = parseFloat(copy);
		
		
		var rate = "#rate"+i;
		var rate = $(rate).val();
		var rate = parseFloat(rate);
		
		if(copy > 0)
		{
			var pro = copy * rate ;
			$("#amm"+i).val(pro);
		}	
	}
	
	var nc = $("#copynew").val();
	var nc = parseFloat(nc);
	
	var nr = $("#ratenew").val();
	var nr = parseFloat(nr);
	
	if((nc>0)&&(nr>0))
	{
	
		$("#amnew").val(nc*nr);	
	}
	
	
	for(i=1;i<=10;i++)
	{
		var am = "#amm"+i;
		var am = $(am).val();
		var am = parseFloat(am);
		if(am>0)
		{
			sum = sum + am ;
		}
	}
	
	var newam = $("#amnew").val();
	var newam = parseFloat(newam);
	
	if(newam>0)
	{
		sum = sum + newam;
	}
	
	$("#totup").val(sum);
	var adv = $("#advance").val();
	var adv = parseFloat(adv);
	var bal = sum - adv ;
	$("#balance").val(bal);
	sum = 0;

	
}


function rateblur(id)
{
	for(i=1;i<=10;i++)
	{
		var copy = "#copy"+i;
		var copy = $(copy).val();
		var copy = parseFloat(copy);
		
		
		var rate = "#rate"+i;
		var rate = $(rate).val();
		var rate = parseFloat(rate);
		
		
		/*var am = "#amm"+i;
		var am = $(am).val();
		var am = parseInt(am);*/
		
		if(copy > 0)
		{
			var pro = copy * rate ;
			$("#amm"+i).val(pro);
			
		}	
	}
	
	var nc = $("#copynew").val();
	var nc = parseFloat(nc);
	
	var nr = $("#ratenew").val();
	var nr = parseFloat(nr);
	
	if((nc>0)&&(nr>0))
	{
		
		$("#amnew").val(nc*nr);
		
	}
	
	
	for(i=1;i<=10;i++)
	{
		var am = "#amm"+i;
		var am = $(am).val();
		var am = parseFloat(am);
		if(am>0)
		{
			sum = sum + am ;
		}
	}
	
	var newam = $("#amnew").val();
	var newam = parseFloat(newam);
	
	if(newam>0)
	{
		sum = sum + newam;
	}
	
	$("#totup").val(sum);
	var adv = $("#advance").val();
	var adv = parseFloat(adv);
	var bal = sum - adv ;
	$("#balance").val(bal);
	sum = 0;

	
}

function deleterow(id,sl,am)
{
	
	if (confirm("Are you sure to delete the "+id+"th job?") == true) {
		
		if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  } else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		  document.getElementById("rows").value=xmlhttp.responseText;
		  
		 window.location.assign("http://localhost/difgra/jobdetails.php?id="+id);
		location.reload();
		}
		   else document.getElementById("rows").innerHTML="";
	  }
	  xmlhttp.open("GET","deleterow.php?id="+id+"&sl="+sl+"&am="+am,true);
	  xmlhttp.send();
       
    } else {
       
    }
}

function deletee(id)
{
	if (confirm("Are you sure to delete the "+id+"th job entirely?") == true) 
	{
		if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  } else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		  document.getElementById("rows").value=xmlhttp.responseText;
		  
		 window.location.assign("http://localhost/difgra/admin");
		
		}
		   else document.getElementById("rows").innerHTML="";
	  }
	  xmlhttp.open("GET","deletejob.php?id="+id,true);
	  xmlhttp.send();
		
	}
	else
	{
		
	}
}



function savepay(id)
{
	var newam = $("#newamount").val();
	var bal = $("#bal").val();
	
	if(newam.length>0)
	{
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  } else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		 
		  
		 location.reload();
		
		}
		   else document.getElementById("").innerHTML="";
	  }
	  xmlhttp.open("GET","newamount.php?newam="+newam+"&id="+id+"&bal="+bal,true);
	  xmlhttp.send();
	}
	else
	{
		alert("Enter the amount");
	}
}




function removepay(jobid,id,am)
{
	if (confirm("Are you sure to delete the "+id+"th payment?") == true) 
	{
		if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  } else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		 location.reload();
		  
		  
		
		}
		   else document.getElementById("rows").innerHTML="";
	  }
	  xmlhttp.open("GET","removepay.php?id="+id+"&am="+am+"&jobid="+jobid,true);
	  xmlhttp.send();
		
	}
	else
	{
		
	}
}



$("#inbox").keyup(function(){

var item = $("#inbox").val();
//alert(item);

if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("indiv").innerHTML=xmlhttp.responseText;
    }
      else
      document.getElementById("indiv").innerHTML="<center><i class='fa fa-spinner fa-spin load'></i></center>";
  }
  xmlhttp.open("GET","insearch.php?item="+item,true);
  $('html, body').stop();
  xmlhttp.send();

});


