<?php 

Route::get('/', function () {
	if(Auth::check()){
		return Redirect::to('dashboard')
			->with('title','Admin Dashboard');
	}else{
		return view('admin.login');
	}
});




Route::post('attempt-login','UserController@Login');
Route::get('add-project', ['middleware' => 'auth', function()
{  return view('admin.add_flot')
	->with('title','Add New Floor');
}]);
Route::get('dashboard', ['middleware' => 'auth', function()
{	
	if(Auth::user()->id=='1'){
		$title = "Admin Dashboard";
    }else{
		$title = "Agent Dashboard";
	}
	return view('admin.adminDashboard')
		->with('title' ,$title);
}]);

Route::group(['middleware'=>'auth'], function()
{
	
	Route::resource('floor', 'FloorController');
	Route::resource('new-agent', 'UserController');
	Route::resource('agent-form', 'AgencyController');
	Route::resource('agent-details', 'UserController@staffList');
	Route::resource('set-status', 'UserController@ChangeStatus');
	Route::resource('project-details', 'FloorController@FloorView');
	Route::get('edit-floor', 'FloorController@show');
	Route::get('ajax-floor', 'FloorController@AjaxFloor');
	Route::get('choose-duration', 'AmountController@AjaxDuration');
	Route::resource('amount', 'AmountController');

    Route::resource('booking', 'BookingplotController');
    Route::get('find-mySlot', 'BookingplotController@FindMyadminSlot');
    Route::post('pay-bill', 'BookingplotController@PayadminBill');
    Route::get('parking-list', 'BookingplotController@ParkingList');
     Route::get('parking_detail', 'ParkingController@index');
    Route::resource('view-slot/{floor_id}/{id}/', 'BookingplotController@ViewadminSlot');


    Route::get('spm-create', 'SripathiController@index');
    Route::post("store", "SripathiController@store");
    Route::get("spm-view", "SripathiController@spmshow");
    Route::get("spc-view", "SripathiController@spcshow");
    Route::get("spm-view-more/{id}", "SripathiController@edit");

     Route::post("plan_booking_a", "SripathiController@plan_booking_a");
      Route::post("plan_booking_b", "SripathiController@plan_booking_b");
       Route::post("plan_booking_c", "SripathiController@plan_booking_c");
        Route::post("plan_booking_d", "SripathiController@plan_booking_d");
        Route::post("spmstore", "SripathiController@spmstore");

         Route::get("bookspm", "SripathiController@spmbookshow");
          Route::get("pdfview/{id}", "SripathiController@pdfview");

    Route::get('pdfview',array('as'=>'pdfview','uses'=>'SripathiController@pdfview'));

     
});


