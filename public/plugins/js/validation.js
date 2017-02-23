$( document ).ready(function() {
	
	 $("#login").click(function(){
		var email = $('#email').val();
		var password = $('#password').val();
		var Err=0;
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		
		$('#Erremail').html('');
		$('#Errpassword').html('');
		
		if(email==''){
			$('#Erremail').html('Required Field');
			Err=1;
		}else if(!emailReg.test(email)){
			$('#Erremail').html('Invalid Email');
			Err=1;
		}
		
		if(password==''){
			$('#Errpassword').html('Required Field');
			Err=1;
		}
		
		if(Err==0){
			return ture;
		}else{
			return false;
		}
	});
	
	
	$("#addNewAmount").click(function(){
		$('#setAmount').css('display','block');
		$('#addNewAmount').css('display','none');
	});	
	
	$( "#chooseFloor" ).change(function()
	{
		if($('#chooseFloor').val() !='')
		{
			$.get(baseurl + "find-mySlot?id="+$('#chooseFloor').val(),
			function(data)
			{
					
				 $('#showParkList').html(data);
			});
		}
	});
	
	$( "#duration_type" ).change(function()
	{
		
			$.get(baseurl + "choose-duration?type="+$('#duration_type').val(),
			function(data)
			{
					
				 $('#upto').html(data);
			});
		
	});
	
	
	
});



