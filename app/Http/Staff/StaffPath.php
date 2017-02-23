<?php 

Route::group(['middleware'=>'auth'], function()
{
	Route::resource('plot-plan', 'ParkingController');
	Route::get('find-mySlot', 'ParkingController@FindMySlot');
	Route::post('pay-bill', 'ParkingController@PayBill');
	Route::get('parking-list', 'ParkingController@ParkingList');
	Route::resource('view-slot/{floor_id}/{id}/', 'ParkingController@ViewSlot');
	Route::get('report-all', 'ReportController@index');
	Route::post('report-all', 'ReportController@store');
		Route::get('parking_detail', 'BookingplotController@option');
	
   
});