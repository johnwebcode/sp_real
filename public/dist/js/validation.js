function validation()
{
	var first_name = $('#first_name').val();
	var last_name = $('#last_name').val();
	var email = $('#email').val();
	var gender = $('#gender').val();
	var username = $('#username').val();
	var password = $('#password').val();
	var confirmPassword = $('#confirmPassword').val();
	var phone = $('#phone').val();
	var state = $('#state').val();
	var regex = /^[a-zA-Z ]*$/;
	var regemail = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
	var illegalChars = /^[a-zA-Z0-9_]+$/;
	var Err=0;

	$('#Errfirst_name').html('');
	$('#Errlast_name').html('');
	$('#Erremail').html('');
	$('#Errusername').html('');
	$('#Errpassword').html('');
	$('#ErrconfirmPassword').html('');
	$('#Errphone').html('');
	$('#Errstate').html('');
	$('#Errterms').html('');

	if(first_name=='' || first_name.length < 4)
	{
		$('#Errfirst_name').html('Should Be Min 4 Character');
		Err = 1;
	}
	else if(!regex.test(first_name))
	{
		$('#Errfirst_name').html('Special Characters are not Allowed');
		Err = 1;
	}

	if(last_name=='' || last_name.length < 4)
	{
		$('#Errlast_name').html('Should Be Min 4 Character');
		Err = 1;
	}
	else if(!regex.test(last_name))
	{
		$('#Errlast_name').html('Special Characters are not Allowed');
		Err = 1;
	}

	if(email=='')
	{
		$('#Erremail').html('Required Field');
		Err = 1;
	}
	else if(!regemail.test(email))
	{
		$('#Erremail').html('Invalid Email');
		Err = 1;
	}

	if(username=='' || username.length < 4 || username.length > 20)
	{
		$('#Errusername').html('Should Be Min 4 & Max 20 Characters');
		Err = 1;
	}
	else if(!illegalChars.test(username))
	{
		$('#Errusername').html('Special Characters are not Allowed');
		Err = 1;
	}

	var regnum = /[0-9]/;
	var regupper = /[A-Z]/;
	var relower = /[a-z]/;

	if(password == '' || password.length < 4 || password.length > 20)
	{
		$('#Errpassword').html('It should be Min 4 & Max 20 Characters');
		Err = 1;
	}
	else if(!regnum.test(password) || !regupper.test(password) || !relower.test(password))
	{
		$('#Errpassword').html('It should Contain one number, uppercase & lowercase letter');
		Err = 1;
	}

	if(confirmPassword!=password)
	{
		$('#ErrconfirmPassword').html('It should be same as password');
		Err = 1;
	}

	if(phone=='' || phone.length > 10 || phone.length < 10)
	{
		$('#Errphone').html('It should be 10 Numbers');
		Err = 1;
	}
	else if(!regnum.test(phone))
	{
		$('#Errphone').html('Only numbers are allowed');
		Err = 1;
	}

	if(state=='' || !regex.test(state))
	{
		$('#Errstate').html('its Required & special Characters not allowed');
		Err = 1;
	}

	if($('input[name=terms]:checked').val()==undefined)
	{
		$('#Errterms').html('Accept terms to complete register');
		Err = 1;
	}
	if(Err==0){
		$.get(baseurl +"check-username?username="+username+"&email="+email,
			function(data){

				if(data==1){
					$('#Errusername').html('Username Already exists');
					$('#Erremail').html('Email already exists');
					Err=1;
					return false;
				}else if(data==2){
					$('#Errusername').html('username already exists');
					Err=1;
					return false;
				}else if(data==3){
					$('#Erremail').html('email already exists');
					Err=1;
					return false;
				}else if(data==0){
					$.ajax({
						type: 'POST',
						url: baseurl +'regcheck',
						data: {"first_name":first_name,"last_name":last_name,"email":email,"username": username,"password":password,"gender":gender,"phone":phone,'state':state},
						dataType: 'json',
						success: function(response)
						{
							alert(response);
							if(response.success=='Registration Success'){
								alert('Registration Success, Contact Admin to Active Account');
								window.location.href = baseurl;
								return false;
							}else{
								alert('Registration Failure, PLease Contact Admin @ Info@aimwindow.com');
							}
						}
					});
				}

			});
	}
	return false;
}


$( document ).ready(function()
{
	$( "#chooseFloor" ).change(function()
	{
		if($('#chooseFloor').val() !='')
		{
			$.get(baseurl + "fetch-slots?id="+$('#chooseFloor').val(),
				function(data)
				{
					$('#showParkList').html(data);
				});
		}
	});
});

function ajaxGetParkDetails(id)
{
	$('#ErrpsName').html('');
	$('#ErrpsCarNo').html('');
	$('#ErrpsMobile').html('');
	$('#ErrparkStatus').html('');
	$('#psErrorMsg').html('');
	$('#ErrpsImage').html('');
	$('#SucpsImage').html('');

	$('#returnHide').css('display','none');
	$('#parkHide').css('display','none');

	if(id!='')
	{
		$('#ps_hiddenId').val(id); //Store ID on Hidden Input
		$.get(baseurl + "fetch-slots-details?id="+id+"&floor_id="+$('#currentFloor_id').val(),
			function(data)
			{
				if(data.error!=true)//Return
				{
					$('#returnHide').css('display','none');
					$('#parkHide').css('display','block');

					$('#returnIt').prop('checked',true);
					$('#returnIt').prop('disabled',false);
					$('#parkIt').prop('disabled',true);

					$('#psName').prop('disabled',true);
					$('#psCarNo').prop('disabled',true);
					$('#psMobile').prop('disabled',true);


					var now = formatDate(new Date());
					var outTime = '';
					var duration=data.difference;

					if(duration.days==0)
					{
						if(duration.h==0)
						{
							outTime = duration.i+" mins "+duration.s+" seconds";
						}
						else if(duration.h==1)
						{
							outTime = duration.h+" hour "+duration.i+" mins "+duration.s+" seconds";
						}
						else
						{
							outTime = duration.h+" hours "+duration.i+" mins "+duration.s+" seconds";
						}
					}
					else if(duration.days==1)
					{
						if(duration.h==0)
						{
							outTime = duration.days+" day "+duration.i+" mins";
						}
						else if(duration.h==1)
						{
							outTime = duration.days+" day "+duration.h+" hour "+duration.i+" mins "+duration.s+" seconds";
						}
						else
						{
							outTime = duration.days+" day "+duration.h+" hours "+duration.i+" mins "+duration.s+" seconds";
						}
					}
					else
					{
						if(duration.h==0){
							outTime = duration.days+" days "+duration.i+" mins";
						}else if(duration.h==1){
							outTime = duration.days+" days "+duration.h+" hour "+duration.i+" mins "+duration.s+" seconds";
						}else{
							outTime = duration.days+" days "+duration.h+" hours "+duration.i+" mins "+duration.s+" seconds";
						}
					}

					$('#parkButton').css('display','none');
					$('#returnButton').css('display','block');

					$('#psName').val(data.parking.name);
					$('#psInTime').val(data.in_time);
					$('#psDuration').val(outTime);
					$('#psCarNo').val(data.parking.car_number);
					$('#psMobile').val(data.parking.mobile);

					console.log(data.difference);
					if(data.image_name!='')
					{
						$('#showImage').html("<img src='upload/"+data.parking.image_name+"' width='50px' height='50px' />");
					}
					else
					{
						$('#showImage').html('');
					}
				}
				else//Park
				{
					$('#returnHide').css('display','block');
					$('#parkHide').css('display','none');

					$('#parkButton').css('display','block');
					$('#returnButton').css('display','none');

					$('#parkIt').prop('checked',true);
					$('#parkIt').prop('disabled',false);
					$('#returnIt').prop('disabled',true);

					$('#psName').val('');
					$('#psCarNo').val('');
					$('#psMobile').val('');
					$('#psImageNameUploaded').val('');
					$('#psCarImage').val('');
					$('#showImage').html('');
					$('#psInTime').val('');
					$('#psDuration').val('');
				}
			});
	}
}

function ajaxCreatePark()
{
	var name=$('#psName').val();
	var number=$('#psCarNo').val();
	var phone=$('#psMobile').val();
	var type=$('input[name=parkStatus]:checked').val();

	var image1 = document.getElementById('psCarImage');
	var imageName = image1.value;
	var formData = new FormData($('form')[0]);
	formData.append('image', $('input[type=file]')[0].files[0]);

	var slot_no = $('#ps_hiddenId').val();
	var token=$('#psToken').val();
	var err=0;
	var regex = /^[a-zA-Z ]*$/;
	var regexNo = /^[0-9a-zA-Z_-]+$/;

	$('#ErrpsName').html('');
	$('#ErrpsCarNo').html('');
	$('#ErrpsMobile').html('');
	$('#ErrparkStatus').html('');

	if(name=='')
	{
		$('#ErrpsName').html('Required Field');
		err=1;
	}
	else if(!regex.test(name))
	{
		$('#ErrpsName').html('Special Character or Number not allowed');
		err=1;
	}

	if(number=='')
	{
		$('#ErrpsCarNo').html('Required Field');
		err=1;
	}
	else if(!regexNo.test(number))
	{
		$('#ErrpsCarNo').html('Special Character Not Allowed.');
	}

	if(phone=='' || isNaN(phone))
	{
		$('#ErrpsMobile').html('Required Field');
		err=1;
	}
	else if((phone.toString().length) < 10 || (phone.toString().length) > 10)
	{
		$('#ErrpsMobile').html('Enter Min & Max 10');
		err=1;
	}

	if(type==undefined)
	{
		$('#ErrparkStatus').html('Choose a Radio');
		err=1;
	}

	var ext = imageName.substring(imageName.lastIndexOf('.') + 1);
	if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" || ext == "png" || ext == "PNG")
	{
		var imgSize = parseInt(Math.round((image1.files[0].size)/1024));
		if(imgSize < 1 || imgSize > 50 )
		{
			$('#ErrpsImage').html('Image Size Too Large...');
			err=1;
		}
	}
	else
	{
		$('#ErrpsImage').html('Upload PNG,GIF or JPG Images Only');
		err=1;
	}



	if(err==0)
	{
		$.get(baseurl + "check-car-exist?number="+number,
			function(data)
			{
				if(data.error==true)
				{
					$('#psErrorMsg').html('This Car Has Been Parked Earlier');
					return false;
				}
				else
				{
					$("#psCancelButton").trigger('click');//Close the Model

					$.post(baseurl + "create-or-return-park",
						{
							car_number: number,
							name: name,
							phone: phone,
							status: type,
							image: $('#psImageNameUploaded').val(),
							floor_id: $('#currentFloor_id').val(),
							slot_no: $('#ps_hiddenId').val()
						},
						function(data)
						{
							$('#showParkList').html(data);
						});
				}
			});
	}
	else
	{
		return false;
	}
}

function image()
{
	var image1 = document.getElementById('psCarImage');
	var imageName = image1.value;
	var formData = new FormData($('form')[0]);
	formData.append('image', $('input[type=file]')[0].files[0]);

	var ext = imageName.substring(imageName.lastIndexOf('.') + 1);
	if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" || ext == "png" || ext == "PNG")
	{
		var imgSize = parseInt(Math.round((image1.files[0].size)/1024));
		if(imgSize < 1 || imgSize > 50 )
		{
			$('#ErrpsImage').html('Image Size Too Large...');
			return false;
		}
	}
	else
	{
		$('#ErrpsImage').html('Upload PNG,GIF or JPG Images Only');
		return false;
	}

	$.ajax({
		beforeSend: function()
		{},
		url: baseurl+'ajaxLoadImage',
		type: 'POST',
		xhr: function()
		{
			var myXhr = $.ajaxSettings.xhr();
			return myXhr;
		},
		success: function(data)
		{
			if(data.success==true)
			{
				$('#SucpsImage').html('Success');
				$('#psImageNameUploaded').val(data.image);
			}
			else if(data.error==false)
			{
				$('#ErrpsImage').html('error');
			}
		},
		data: formData,
		cache: false,
		contentType: false,
		processData: false
	});
}

function formatDate(date)
{
	var hours = date.getHours();
	var minutes = date.getMinutes();
	var ampm = hours >= 12 ? 'pm' : 'am';
	hours = hours % 12;
	hours = hours ? hours : 12; // the hour '0' should be '12'
	minutes = minutes < 10 ? '0'+minutes : minutes;
	var strTime = hours + ':' + minutes + ' ' + ampm;
	return date.getMonth()+1 + "/" + date.getDate() + "/" + date.getFullYear() + "  " + strTime;
}


