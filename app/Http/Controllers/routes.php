<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

require(__DIR__ . "/Admin/AdminPath.php");
require(__DIR__ . "/Staff/StaffPath.php");

Route::get('SignOut','UserController@getSignOut');


/*
 * Car Parking API Route
 */
Route::get('api/login','ApiController@apiLogin');
Route::get('api/logout','ApiController@apiLogout');

Route::get('api/{floor}/{slot}','ApiController@findCarBySlotFloor');

Route::post('api/new-agent','ApiController@apiAgent');
Route::get('api/staff-view','ApiController@apiStaffView');

Route::post('api/add-flot','ApiController@apiAddFloor');
Route::get('api/view-floor','ApiController@apiViewFloor');
Route::get('api/delete-floor','ApiController@apiDeleteFloor');
Route::get('api/edit-floor','ApiController@apiEditFloor');

Route::post('api/park/in','ApiController@apiParkIN');
Route::get('api/park/out','ApiController@apiParkOut');

Route::post('api/amount-set','ApiController@apiAmountSet');

Route::get('api/floors/','ApiController@apiViewDetails');
Route::get('api/floor/{id}','ApiController@apiFloorsDetailsById');

Route::get('api/search/{number}','ApiController@searchCar');

Route::get('api/floor/view/{id}','ApiController@apiCurrentUserFloor');

Route::get('api/current/floor/{id}','ApiController@apiCurrentFloor');

Route::get('api/remove/image/{id}','ApiController@apiRemoveImage');




Route::post('api/upload', function () {
    $file = Input::file('file');
    if ($file) {
        $destinationPath = public_path() . '/uploads/';
        $filename = $file->getClientOriginalName();
        $newName = value(function () use ($file) {
            $filename = $file->getClientOriginalName() . time() . '.' . $file->getClientOriginalExtension();
            return strtolower($filename);
        });
        $upload_success = Input::file('file')->move($destinationPath, $newName);

        if ($upload_success) {

            return Response::json(['status' => 0, 'data' => ['url' => url('uploads/' . $newName), 'file' => $newName], 'msg' => 'success']);
        } else {
            return Response::json(['status' => 1, 'data' => [], 'msg' => 'error']);
        }
    }else{
		 return Response::json(['status' => 1, 'data' => [], 'msg' => 'error, No File']);
	}
});
