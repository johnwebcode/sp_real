<?php

namespace App\Http\Controllers;
use App\Http\Requests;

use App\Amount;
use App\User;
use App\UserFloor;
use App\Floors;
use App\ParkingDetails;
use File;
use Auth;
use DB;
use Illuminate\Http\Request;
use Redirect;
use Session;
use Validator;
use Hash;
use Carbon\Carbon;
use DateTime;

class ApiController extends Controller
{

    public function index()
    {

    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }

    /*
     * API Login
     */
	public function apiLogin()
	{
        if (Auth::attempt(['email' => \Request::get('email'), 'password' => \Request::get('password')]))
        {
            if(Auth::user()->status=='Active')
            {
                $userDetails=User::where('email', '=' ,\Request::get('email'))->get();
				return response()->json(array('status'=> 1,'data' => $userDetails, 'msg' => 'success'));
			}
			else
			{
				Auth::logout();
				return response()->json(array('status'=> 0,'data' => [], 'msg' => 'error'));
			}
        }
        else
        {
            return response()->json(array('status'=> 0,'data' => [], 'msg' => 'Invalid Credentails'));
        }
	}
	
	/*
	 * API Logout
	 */
	public function apiLogout()
	{
		Auth::logout();
		return response()->json(array('status' => 1, 'data' => [], 'msg' => 'success'));
	}

   /*
    * API Create New Staff
    */
    public function apiAgent()
    {
		if(Auth::check()){
        $input = \Request::all();
        $floorArray = explode(',', isset($input['floor']));
        $input=\Request::except('floor');
        $input['password'] = Hash::make(\Request::get('password'));

        $emailCheck = Validator::make($input, array('email' => array('unique:users,email')));

        if ($emailCheck->fails())
        {
            return response()->json(array('status' => 1, 'data' => [], 'msg' => 'Email Exists'));
        }
        else
        {
			if(Auth::user()->id==1){
				$staffAdd = User::create($input);
				if($staffAdd)
				{
					foreach($floorArray as $row)
					{
						$user_floor = new UserFloor();
						$user_floor->user_id = $staffAdd->id;
						$user_floor->floor_id = $row;
						$user_floor->save();
					}
					return response()->json(array('status' => 1, 'data' => $staffAdd, 'msg' => 'New Agent Added Successfully'));
				}
				else
				{
					return response()->json(array('status' => 0, 'data' => [], 'msg' => 'error'));
				}
			}else{
				return response()->json(array('status' => 0, 'data' => [], 'msg' => 'Not Authorised'));
			}
        }
		}else{
			return response()->json(array('status' => 0, 'data' => [], 'msg' => 'login Required'));
		}
    }
	
	

    /*
     * API Staff Details View
     */
    public function apiStaffView()
    {
        $staffView = User::where('id', '!=', 1)->get()->toArray();
        return response()->json(array('status' => 0, 'data' => $staffView, 'msg' => 'success'));
    }

    /*
     * API Add New Floor
     */
    public function apiAddFloor()
    {
        $input=\Request::all();

        $floorNameCheck = Validator::make($input, array('name' => array('unique:floor,name')));
        if ($floorNameCheck->fails())
        {
            return response()->json(array('status' => 0, 'data' => [],'msg' => 'floor name already exists'));
        }
        else
        {
            $addFloor=Floors::create($input);
            if($addFloor)
            {
                return response()->json(array('status' => 1, 'data' => [],'msg' => "success"));
            }
            else
            {
                return response()->json(array('status' => 0, 'data' => [], 'msg' => "error"));
            }
        }
    }

    /*
     * API View Floor
     */
    public function apiViewFloor()
    {
        $floorView = Floors::all();
        if($floorView)
        {
            return response()->json(array('status'=> 1,'data'=>$floorView, 'msg' => 'success'));
        }
        else
        {
            return response()->json(array('status'=> 0,'data'=> [], 'msg' => 'error'));
        }
    }

    /*
     * API Delete Floor
     */
    public function apiDeleteFloor()
    {
        $id=\Request::get('id');
        $checkStatus = ParkingDetails::where('floor_id', $id)
            ->where('status', 1)
            ->get();

        if(count($checkStatus)>0)
        {
            return response()->json(array('status'=>0,'data'=>[],'msg' => 'floor in use.. cannot delete floor'));
        }
        else
        {
            $checkStatusNew = ParkingDetails::where('floor_id', $id)
                ->where('status', 2)
                ->get();
            if(count($checkStatusNew)>0)
            {
                return response()->json(array('status'=> 0,'data'=> [],'msg' => "Whoa...!! some data have in used this floor..."));
            }
            else
            {
                if(Floors::where('id', $id)->delete())
                {
                    return response()->json(array('status'=> 1,'data'=> [],'msg' => 'success'));
                }
                else
                {
                    return response()->json(array('status'=> 0,'data'=> [],'msg' => "invalid arguments"));
                }
            }
        }
    }

    /*
     * Edit Floor ID
     */
    public function apiEditFloor()
    {
        $id=\Request::get('id');
        $input=\Request::all();

        $checkName = Floors::where('name', \Request::get('name'))->where('id', '!=', $id)->get();

        if (count($checkName) == 0)
        {
            $floor = Floors::find($id);

            $floor->name = \Request::get('name');
            $floor->project_area = \Request::get('project_area');
            $floor->number =\Request::get('number');

            if ($floor->save())
            {
                return response()->json(array('status'=> 1,'data'=> [],'msg' => 'success' ));
            }
            else
            {
                return response()->json(array('status'=> 0,'data'=> [], 'msg' => 'error'));
            }
        }
        else
        {
            return response()->json(array('status'=> 0,'data'=> [], 'msg' => 'name exists'));
        }
    }

    /*
     * API Park In
     * Image Skip because now using get method
     */
    public function apiParkIN()
    {
	if(Auth::check()) {

        $input = \Request::all();
        $floor = Floors::find(\Request::get('floor_id'));
        if ($floor->number >= \Request::get('slot_no')) {

            $checkPark = ParkingDetails::where('status', 1)
                ->where('floor_id', \Request::get('floor_id'))
                ->where('slot_no', \Request::get('slot_no'))
                ->get();
            if (count($checkPark) > 0) {
                return response()->json(array('status' => 0, 'data' => [], 'msg' => 'error, Already car exist in Parking'));
            } else {
                $parking = ParkingDetails::create($input);
                $parking->in_time = Carbon::now();
                $parking->status = 1;
                $parking->created_by = 1; //Auth::user()->id;
                if ($parking->save()) {
                    return response()->json(array('status' => 1, 'data' => $parking, 'msg' => 'success'));
                } else {
                    return response()->json(array('status' => 0, 'data' => [], 'msg' => 'error'));
                }
            }
         } else {
            return response()->json(array('status' => 0, 'data' => [], 'msg' => 'invalid slot number'));
         }
        }else{
            return response()->json(array('status' => 0, 'data' => [], 'msg' => 'login Required'));
        }
    }

    /*
     * API Park Out
     */
    public function apiParkOut()
    {
	   if(Auth::check()){
        $input=\Request::all();
        $amount = Amount::all()->toArray();
        foreach($amount as $amtVal) {
            $narmalAmt = $amtVal['narmal_park'];
            $bankerAmt = $amtVal['banker_park'];
            $dayAmt = $amtVal['day_park'];
            $monthlyAmt = $amtVal['monthly_park'];
        }

        $checkOut = ParkingDetails::where('status', 1)
            ->where('id', \Request::get('id'))
            ->get();

        if(count($checkOut)>0)
        {
            $ParkingDetails = ParkingDetails::find(\Request::get('id'));

            if($ParkingDetails->parking_type==1) {
                $normalCheck=Carbon::createFromTimeStamp(strtotime($ParkingDetails->in_time))->diffInMinutes()/60;
                $normalDur= ceil($normalCheck);
                if($normalDur<1) { $normalDur=1; }
                $TotalCast=$normalDur*$narmalAmt; }

            elseif($ParkingDetails->parking_type==2) {
                $bankerCheck=Carbon::createFromTimeStamp(strtotime($ParkingDetails->in_time))->diffInMinutes()/60;
                if(($bankerCheck*60)<60) { $bankerDur=0; }
                else { $bankerDur= ceil($bankerCheck)-1; }
                $TotalCast=$bankerDur*$bankerAmt; }

            elseif($ParkingDetails->parking_type==3) {
                $dayDur=Carbon::createFromTimeStamp(strtotime($ParkingDetails->in_time))->diffInDays();
                if($dayDur==0){ $bankerDur=1;}
                $TotalCast=$dayDur*$dayAmt; }

            else{
                $monthlyDur=Carbon::createFromTimeStamp(strtotime($ParkingDetails->in_time))->diffInMinutes()/60;
                $monthlyDur=$monthlyDur/24;
                $monthlyDur=$monthlyDur/30;
                $monthlyDur=ceil($monthlyDur);
                $TotalCast=$monthlyDur*$monthlyAmt; }

            $ParkingDetails->status = 2;
            $ParkingDetails->out_time = Carbon::now();
            $ParkingDetails->cost = $TotalCast;

            if($ParkingDetails->save())
            {
                return response()->json(array('status'=> 1,'data'=> $ParkingDetails, "msg" => 'success'));
            }
            else
            {
                return response()->json(array('status'=> 0,'data'=> [], 'msg' => 'error'));
            }
        }
        else
        {
            return response()->json(array('status'=> 0,'data'=> [], 'msg' => 'error'));
        }
		}else{
			return response()->json(array('status' => 0, 'data' => [], 'msg' => 'login Required'));
		}
    }

    /*
     * API Amount Set
     */
    public function apiAmountSet()
    {
        $input=\Request::all();

        $amountSet = Amount::updateOrCreate(['id' => 1],$input);

        if($amountSet){
            return response()->json(array('status'=> 1,'data' => [], 'msg' => 'success'));
        }else{
            return response()->json(array('status'=> 0,'data' => [],'msg' => 'error'));
        }

    }
    
    
     public function apiViewDetails(){
       $floor =  Floors::all();
        $data = [];
        foreach($floor as $row){
            $parking = ParkingDetails::where('floor_id', $row->id)->lists('slot_no');
            $data[] = array(
                            'id' => $row->id,
                            'name' => $row->name,
                            'shortName' => $row->short_name,
                            'slots' => $row->number,
                            'status' => $row->status,
                            'occupied' => $parking
                    );
        }

        if($data){
            return response()->json(array('status'=> 1,'data'=> $data, 'msg' => 'success'));
        }else{
            return response()->json(array('status'=> 0,'data'=> [], 'msg' => 'error'));
        }

    }

    public function apiFloorsDetailsById($id){
        $floor = Floors::find($id);
        if(count($floor)){
            $parking = ParkingDetails::where('floor_id', $floor->id)->get();

            if(count($parking)){
                $data = array(
                                'id' => $floor->id,
                                'name' => $floor->name,
                                'shortName' => $floor->short_name,
                                'slots' => $floor->number,
                                'status' => $floor->status,
                                'occupied' => $parking

                         );

                if(count($data)){
                    return response()->json(array('status' => 1, 'data' => $data, 'msg' => 'success'));
                }else{
                    return response()->json(array('status' => 0, 'data' => [], 'msg' => 'error'));
                }
            }

        }else{
            return response()->json(array('status' => 0, 'data' => [],'msg' => 'invalid argument'));
        }

    }
    
    public function searchCar($car_number){

        $amount = Amount::all()->toArray();
        foreach($amount as $amtVal) {
            $narmalAmt = $amtVal['narmal_park'];
            $bankerAmt = $amtVal['banker_park'];
            $dayAmt = $amtVal['day_park'];
            $monthlyAmt = $amtVal['monthly_park'];
        }


        $ParkingDetails = ParkingDetails::where('car_number', $car_number)->where('status', 1)->get();

    if(count($ParkingDetails)>0){
        if($ParkingDetails[0]->parking_type==1) {
            $normalCheck=Carbon::createFromTimeStamp(strtotime($ParkingDetails[0]->in_time))->diffInMinutes()/60;
            $normalDur= ceil($normalCheck);
            if($normalDur<1) { $normalDur=1; }
            $TotalCast=$normalDur*$narmalAmt; }

        elseif($ParkingDetails[0]->parking_type==2) {
            $bankerCheck=Carbon::createFromTimeStamp(strtotime($ParkingDetails[0]->in_time))->diffInMinutes()/60;
            if(($bankerCheck*60)<60) { $bankerDur=0; }
            else { $bankerDur= ceil($bankerCheck)-1; }
            $TotalCast=$bankerDur*$bankerAmt; }

        elseif($ParkingDetails[0]->parking_type==3) {
            $dayDur=Carbon::createFromTimeStamp(strtotime($ParkingDetails[0]->in_time))->diffInDays();
            if($dayDur==0){ $bankerDur=1;}
            $TotalCast=$dayDur*$dayAmt; }

        else{
            $monthlyDur=Carbon::createFromTimeStamp(strtotime($ParkingDetails[0]->in_time))->diffInMinutes()/60;
            $monthlyDur=$monthlyDur/24;
            $monthlyDur=$monthlyDur/30;
            $monthlyDur=ceil($monthlyDur);
            $TotalCast=$monthlyDur*$monthlyAmt; }

        $duration = Carbon::createFromTimeStamp(strtotime($ParkingDetails[0]->in_time))->diffInMinutes()/60;
        foreach($ParkingDetails as $row) {
            $data = array(
                        'id' => $row->id,
                        'name' => $row->name,
                        'car_number' => $row->car_number,
                        'mobile' => $row->mobile,
                        'status' => $row->status,
                        'floor_id' => $row->floor_id,
                        'floor_name' => Floors::where('id', $row->floor_id)->pluck('name'),
                        'slot_no' => $row->slot_no,
                        'cost' => $TotalCast,
                        'in_time' => $row->in_time,
                        'duration' => date('Y-m-d H:i:s',strtotime(ceil($duration)))

            );
        }

        if($data)
        {
            return response()->json(array('status'=> 1,'data'=> $data, 'msg' => 'success'));
        }
        else
        {
            return response()->json(array('status'=> 0,'data' => [], 'msg' => 'error'));
        }
    }
        else
        {
        return response()->json(array('status'=> 0,'data'=> [], 'msg' => 'car not found'));
        }
    }
	
	public function apiCurrentUserFloor($id){
		if(Auth::check()){
		$floor = UserFloor::join('floor', 'floor.id', '=', 'user_floors.floor_id')
					->where('user_id', $id)->get();
			
		if(count($floor) > 0){
			 return response()->json(array('status'=> 1,'data'=> $floor, 'msg' => 'success'));
		}else{
			return response()->json(array('status'=> 0,'data'=> [], 'msg' => 'error'));
		}
		}else{
			return response()->json(array('status' => 0, 'data' => [], 'msg' => 'login Required'));
		}
	}
	
	public function apiCurrentFloor($id){
		
		if(Auth::check()){
		$floor = Floors::find($id);
		
		if(count($floor) > 0){
			$parking = ParkingDetails::where('floor_id', $floor->id)->where('status', 1)->select('slot_no','id')->get();
			
			if(count($parking) > 0){
                $data = array(
                                'id' => $floor->id,
                                'name' => $floor->name,
                                'shortName' => $floor->short_name,
                                'slots' => $floor->number,
                                'status' => $floor->status,
                                'occupied' => $parking

                         );

                if(count($data) > 0){
                    return response()->json(array('status' => 1, 'data' => $data, 'msg' => 'success'));
                }else{
                    return response()->json(array('status' => 0, 'data' => [], 'msg' => 'error'));
                }
            }else{
				
				$data = array(
                                'id' => $floor->id,
                                'name' => $floor->name,
                                'shortName' => $floor->short_name,
                                'slots' => $floor->number,
                                'status' => $floor->status,
                                'occupied' => []

                         );
				 return response()->json(array('status' => 1, 'data' => $floor, 'msg' => 'success'));
			}
		}else{
			
			 return response()->json(array('status' => 0, 'data' => [], 'msg' => 'error'));
		}
		}else{
			return response()->json(array('status' => 0, 'data' => [], 'msg' => 'login Required'));
		}
	}
	
	public function apiRemoveImage($id){
		
		 $parking = ParkingDetails::find($id);
		
		if(count($parking) > 0){
			File::delete('/path/to/image/'.$parking->image);
			
			$parking->image = null;
			if($parking->save()){
				  return response()->json(array('status' => 0, 'data' => [], 'msg' => 'success'));
			}else{
				  return response()->json(array('status' => 1, 'data' => [], 'msg' => 'error'));
			}
		}else{
			  return response()->json(array('status' => 1, 'data' => [], 'msg' => 'error'));
		}
	}


    public function findDetailsBySlot($floor_id, $slot_id){

        $amount = Amount::all()->toArray();
        foreach($amount as $amtVal) {
            $narmalAmt = $amtVal['narmal_park'];
            $bankerAmt = $amtVal['banker_park'];
            $dayAmt = $amtVal['day_park'];
            $monthlyAmt = $amtVal['monthly_park'];
        }


        $ParkingDetails = ParkingDetails::where('floor_id', $floor_id)->where('slot_no', $slot_id)->where('status', 1)->get();

        if(count($ParkingDetails)>0){
            if($ParkingDetails[0]->parking_type==1) {
                $normalCheck=Carbon::createFromTimeStamp(strtotime($ParkingDetails[0]->in_time))->diffInMinutes()/60;
                $normalDur= ceil($normalCheck);
                if($normalDur<1) { $normalDur=1; }
                $TotalCast=$normalDur*$narmalAmt; }

            elseif($ParkingDetails[0]->parking_type==2) {
                $bankerCheck=Carbon::createFromTimeStamp(strtotime($ParkingDetails[0]->in_time))->diffInMinutes()/60;
                if(($bankerCheck*60)<60) { $bankerDur=0; }
                else { $bankerDur= ceil($bankerCheck)-1; }
                $TotalCast=$bankerDur*$bankerAmt; }

            elseif($ParkingDetails[0]->parking_type==3) {
                $dayDur=Carbon::createFromTimeStamp(strtotime($ParkingDetails[0]->in_time))->diffInDays();
                if($dayDur==0){ $bankerDur=1;}
                $TotalCast=$dayDur*$dayAmt; }

            else{
                $monthlyDur=Carbon::createFromTimeStamp(strtotime($ParkingDetails[0]->in_time))->diffInMinutes()/60;
                $monthlyDur=$monthlyDur/24;
                $monthlyDur=$monthlyDur/30;
                $monthlyDur=ceil($monthlyDur);
                $TotalCast=$monthlyDur*$monthlyAmt; }

            $duration = Carbon::createFromTimeStamp(strtotime($ParkingDetails[0]->in_time))->diffInMinutes()/60;
            foreach($ParkingDetails as $row) {
                $data = array(
                    'id' => $row->id,
                    'name' => $row->name,
                    'car_number' => $row->car_number,
                    'mobile' => $row->mobile,
                    'status' => $row->status,
                    'floor_id' => $row->floor_id,
                    'floor_name' => Floors::where('id', $row->floor_id)->pluck('name'),
                    'slot_no' => $row->slot_no,
                    'cost' => $TotalCast,
                    'in_time' => $row->in_time,
                    'duration' => date('H:i:s',strtotime(ceil($duration)))

                );
            }

            if($data)
            {
                return response()->json(array('status'=> 1,'data'=> $data));
            }
            else
            {
                return response()->json(array('status'=> 0,'data'=> [], 'msg' => 'error'));
            }
        }
        else
        {
            return response()->json(array('status'=> 0,'data'=> [], 'msg' => 'invalid arguments'));
        }
    }



    public function pagination(Request $request){
        $count = ParkingDetails::where('status', $request->get('status'))->count();

        if($count > 0 && $count <= $request->get('perpage') || $count==$request->get('perpage')){

            $pages = 1;
            $parking = ParkingDetails::where('status', $request->get('status'))->get();
            return response()->json(['status' => 1,'data' => $parking, 'pages' => ceil($pages), 'msg' => 'success']);

        }else if($count > 10 && $count <= $request->get('perpage')){

            $pages = $count/$request->get('perpage');
            $skip = $request->get('pageno') * $request->get('perpage');
             $parking = ParkingDetails::where('status', $request->get('status'))->take($request->get('perpage'))->skip($skip)->get();
             return response()->json(['status' => 1,'data' => $parking, 'pages' => ceil($pages), 'msg' => 'success']);
        }else if($count > 0 && $count > $request->get('perpage')){

            $pages = $count/$request->get('perpage');
            $skip = ($request->get('pageno') * $request->get('perpage')) - $request->get('perpage');
            $parking = ParkingDetails::where('status', $request->get('status'))->take($request->get('perpage'))->skip($skip)->get();
            return response()->json(['status' => 1,'data' => $parking, 'pages' => ceil($pages), 'msg' => 'success', 'a' => $skip]);
        }else{
            return response()->json(['status' => 0,'data' => [],'msg' => 'error']);
        }
    }

    public function repark(){
        if(Auth::check()){

            $input=\Request::all();

            $check_slot = ParkingDetails::where('status', 2)
                ->where('car_number', \Request::get('car_number'))
                ->orderBy('id', 'desc')
                ->take(1)
                ->get();

           // print_r($check_slot->toArray()); die;

            if(count($check_slot) > 0){
                $checkPark = ParkingDetails::where('status', 1)
                    ->where('floor_id', $check_slot[0]->floor_id)
                    ->where('slot_no', $check_slot[0]->slot_no)
                    ->get();
                if(count($check_slot)>0)
                {
                    return response()->json(array('status'=> 0,'data'=> [], 'msg' => 'error, Already car exist in slot'));
                }
                else
                {
                    $check_car = ParkingDetails::where('status', 1)
                        ->where('car_number', \Request::get('car_number'))
                        ->orderBy('id', 'desc')
                        ->take(1)
                        ->get();
                    if(count($check_car) > 0){
                        return response()->json(array('status' => 0, 'data' => [], 'msg' => 'car already in park'));
                    }else {

                        $parking = ParkingDetails::create($input);
                        $parking->in_time = Carbon::now();
                        $parking->status = 1;
                        $parking->created_by = 1; //Auth::user()->id;
                        if ($parking->save()) {
                            return response()->json(array('status' => 1, 'data' => $parking, 'msg' => 'success'));
                        } else {
                            return response()->json(array('status' => 0, 'data' => [], 'msg' => 'error'));
                        }
                    }
                }
            }else{
                return response()->json(array('status' => 0, 'data' => [], 'msg' => 'cant repark this car'));
            }


        }else{
            return response()->json(array('status' => 0, 'data' => [], 'msg' => 'login Required'));
        }
    }

    public function findCarBySlotFloor($floor,$id){

        echo $floor.'---'.$id;
    }
}
