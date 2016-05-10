function marriageForm()
{

	var date = $("#date").val();
	
		if(date.length==0)
	{
		$("#alText").text("Enter the date of marriage");
		$("#alM").modal('show');
		return false;
	}
	return false;
}

$(document).ready(function(){
	alert("hai");
});