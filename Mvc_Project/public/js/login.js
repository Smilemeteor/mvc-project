$(document).on('blur','#name',function(){
	var res = $(this).val();
	if (res == '')
	{
		$('#names').html('<span id="names" style="color:red; font-size:10px; line-height:25px; float:right;">Can not be empty</span>')
	}
	else
	{
		$('#names').html('<span id="names" style="color:green; font-size:10px; line-height:25px; float:right;">Fill in the correct</span>')
	}

})
$(document).on('blur','#pwd',function(){
	var res = $(this).val();
	if (res == '')
	{
		$('#pwds').html('<span id="pwds" style="color:red; font-size:10px; line-height:25px; float:right;">Can not be empty</span>')
		$('#button').html('<button style="float:right; background:red;" type="submit" class="btn btn-primary" disabled>Execute</button>');
	}
	else
	{
		$('#pwds').html('<span id="pwds" style="color:green; font-size:10px; line-height:25px; float:right;">Fill in the correct</span>')
		$('#button').html('<button style="float:right; background:green;" type="submit" class="btn btn-primary">Execute</button>');
	}

})