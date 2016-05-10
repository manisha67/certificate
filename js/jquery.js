 var btn = 3;
$("#tr4").hide();
$("#tr5").hide();
$("#tr6").hide();
$("#tr7").hide();
$("#tr8").hide();
$("#tr9").hide();
$("#tr10").hide();
function newrow()
{
	btn=btn+1;
	var id = "#tr"+btn;
	$(id).slideDown();
}
for(i=1;i<=10;i++)
{
	var id = "#am" + i ;
	$(id).blur(function(){
		var sum = parseInt(0);
		for(j=1;j<=10;j++)
		{
			var value = $("#am" + j).val();
			var intt = parseFloat(value);
			if(intt>0)
			{
			sum = sum + intt;
		
			}
		}
		$("#total").text(sum);
	});
}

$("#advance").blur(function(){
var total = $("#total").text();
alert(total);
var intotal = parseFloat(total);
var advance = $("#advance").val();
var intadvance = parseFloat(advance);
var balance = intotal - intadvance ;
$("#balance").val(balance);
});



//navbar code
$('#li1').hover(function(){
		$("#nm1").text("");
		$("#li1").addClass("hovereffect");
	});
	$('#li1').mouseleave(function(){
		$("#nm1").text(" Dashboard");
		$("#li1").removeClass("hovereffect").addClass("nothovereffect");
		
	});
	$('#li2').hover(function(){
		$("#nm2").text("");
		$("#li2").addClass("hovereffect");
	});
	$('#li2').mouseleave(function(){
		$("#nm2").text(" Content");
		$("#li2").removeClass("hovereffect").addClass("nothovereffect");
		
	});
	$('#li3').hover(function(){
		$("#nm3").text("");
		$("#li3").addClass("hovereffect");
	});
	$('#li3').mouseleave(function(){
		$("#nm3").text(" Administration");
		$("#li3").removeClass("hovereffect").addClass("nothovereffect");
		
	});
	/////////////////////////