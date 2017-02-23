<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Floors;
use App\Amount;
use App\ParkingDetails;
use DB;
use Auth;
use Session;
use Input;
use Redirect;
use Carbon\Carbon;
use DateTime;


class ParkingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
				
		$floor = DB::table('user_floors')
            ->join('floor', 'user_floors.floor_id', '=', 'floor.id')
			->where('user_floors.user_id', Auth::user()->id)
            ->select('floor.name', 'floor.id')
            ->get();
			
			if($floor){
				return view('staff.parking_area', ['floors' => $floor]);
			}else{
				Session::flash('error', "you don't have Any assigned Floor, Contact Admin !!!");
				return Redirect::back();
			}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */

    public function store(Requests\ParkingRequest $request)
	{
		$input=$request->except('image');
		$input_file=$request->file();
		
		$temp_path= Input::file('image')->getpathName();
		$OriginalName= Input::file('image')->getClientOriginalName();
		$newName = $request->car_number.''.strtotime('now').''.$OriginalName;
		$upload = Input::file('image')->move('images/upload/',$newName);
		
		if($upload){
		    $parking = ParkingDetails::create($input);
			
			$parking->in_time = Carbon::now();
			$parking->image = $newName;
			$parking->status = 1;
			$parking->created_by = Auth::user()->id;
			
			if($parking->save()){
				$msg='booking Allocated Successfully.....';
				Session::flash('success', $msg);
				return Redirect::to('parking-list');
			}else{
				$msg='Process Failed...';
				Session::flash('error', $msg);
				return Redirect::back();
			}
		}else{
			$msg='Image Upload Failed & Please Enter datas Again...';
			Session::flash('error', $msg);
			return Redirect::back();
		}
	}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
		echo "update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
	
	public function FindMySlot(){
		$id = \Request::get('id');
		$data = Floors::find($id);
				
		if($data){
			$parking = ParkingDetails::where('floor_id', $id)
									->where('status', 1)
									->lists('slot_no');
			
			if($parking){
				$parking = $parking->toArray();
			}
			
			return view('staff.parking_list',['floor' => $data->toArray(), 'parking' => $parking]);
		}else{
			return "Error !!! Contact Admin..";
		}
		
	}
	
	public function ViewSlot($fid, $id){
		$ParkingDetails = ParkingDetails::where('floor_id', $fid)
										->where('slot_no', $id)
										->where('status', 1)
										->get();
										
			
		
		$cost = 0;
			
			if(count($ParkingDetails)==1){
				$datetime1 = new DateTime(date('Y-m-d H:i:s', strtotime($ParkingDetails[0]->in_time)));
				$datetime2 = new DateTime(date('Y-m-d H:i:s'));
				$oDiff = $datetime1->diff($datetime2);
				
				if($oDiff->y==0){
					$year='';
				}else if($oDiff->y==1){
					$year=$oDiff->y.' year ';
				}else{
					$year=$oDiff->y.' years ';
				}
				
				if($oDiff->m==0){ $month=''; }else if($oDiff->m==1){	$month=$oDiff->m.' month '; }else{ $month=$oDiff->m.' months '; }
				
				if($oDiff->d==0){ $day=''; }else if($oDiff->d==1){	$day=$oDiff->d.' day '; }else{ $day=$oDiff->d.' days '; }
				
				if($oDiff->h==0){ $hour=''; }else if($oDiff->h==1){	$hour=$oDiff->h.' hour '; }else{ $hour=$oDiff->h.' hours '; }
				
				if($oDiff->i==0){ $min=''; }else if($oDiff->i==1){	$min=$oDiff->i.' min '; }else{ $min=$oDiff->i.' mins '; }
				
				$out_time = $year.$day.$month.$hour.$min;
				
			$amount = Amount::all();
				
				foreach($amount as $row){
					if($row->duration_type==1){
						if($oDiff->h!=0){
							if($row->upto==$oDiff->h){
								if($oDiff->i!=0 && $oDiff->i <= 30){
									$cost = $cost + $row->cost;
								}else if($oDiff->i!=0 && $oDiff->i > 30){
									$cost = $cost + $row->cost + 10;
								}
								
							}
						}else{
							$cost = 10;
						}
						
						if($oDiff->d!=0){
							if($row->upto==$oDiff->d){
								$cost = $cost + $row->cost;
							}
						}
					}
				}
				
				return view('staff.parking_return',['ParkingDetails' => $ParkingDetails[0]->toArray(), 'out_time' => $out_time, 'cost' => $cost]);
			}else{
				return view('staff.parking_detail',['floor_id' => $fid,'id' => $id]);
			}							
										
										
		
	}
	
	public function PayBill(Request $request){
		$input=$request->all();
		
		$ParkingDetails = ParkingDetails::find($input['id']);
		$ParkingDetails->status = 2;
		$ParkingDetails->out_time = Carbon::now();
		$ParkingDetails->cost = $input['cost'];
		
		if($ParkingDetails->save()){
			
				$msg='Parking Released Successfully.....';
				Session::flash('success', $msg);
				return Redirect::to('booking');
			}else{
				$msg='Proccess Failed...';
				Session::flash('error', $msg);
				return Redirect::back();
		}
		
		
	}
	
	 public function ParkingList(){
        
        if(Auth::user()->id && Auth::user()->id!=''){
                                
                                    
            $parking = DB::table('parking_details')
                        ->join('floor', 'floor.id', '=', 'parking_details.floor_id')
                        ->where('created_by', Auth::user()->id)
                        ->select('parking_details.*', 'floor.name as floor_name', 'floor.project_area')
                        ->paginate(10);

                        
            $parking_list=array();  
                foreach($parking as $row){
                    $result = $this->calculateAmount($row->in_time);
                    
                    $parking_list[]=array(
                                        'id' => $row->id,
                                        'name' => $row->name,
                                        'car_number' => $row->car_number,
                                        'mobile' => $row->mobile,
                                        'status' => $row->status,
                                        'floor_id' => $row->floor_id,
                                        'floor_name' => $row->floor_name,
                                        'project_area' => $row->project_area,
                                        'slot_no' => $row->slot_no,
                                        'in_time' => $row->in_time,
                                        'out_time' => $result['out_time'],
                                        'cost' => $result['cost']
                                    );
                }
                    
            if($parking_list){
                return view('staff.parking_list_bycreated', ['parking' => $parking_list, 'park' => $parking]);              
            }else{
                $msg='Whoa..!! No Data Found..';
                Session::flash('error', $msg);
                return Redirect::back();
            }
        }
    }
    
	
	public function calculateAmount($intime){
		$datetime1 = new DateTime(date('Y-m-d H:i:s', strtotime($intime)));
		$datetime2 = new DateTime(date('Y-m-d H:i:s'));
		$oDiff = $datetime1->diff($datetime2);
		$cost = 0;		
			if($oDiff->y==0){
				$year='';
			}else if($oDiff->y==1){
				$year=$oDiff->y.' year ';
			}else{
				$year=$oDiff->y.' years ';
			}
				
			if($oDiff->m==0){ $month=''; }else if($oDiff->m==1){	$month=$oDiff->m.' month '; }else{ $month=$oDiff->m.' months '; }
			
			if($oDiff->d==0){ $day=''; }else if($oDiff->d==1){	$day=$oDiff->d.' day '; }else{ $day=$oDiff->d.' days '; }
			
			if($oDiff->h==0){ $hour=''; }else if($oDiff->h==1){	$hour=$oDiff->h.' hour '; }else{ $hour=$oDiff->h.' hours '; }
			
			if($oDiff->i==0){ $min=''; }else if($oDiff->i==1){	$min=$oDiff->i.' min '; }else{ $min=$oDiff->i.' mins '; }
				
			$out_time = $year.$day.$month.$hour.$min;
				
			$amount = Amount::all();
				
				foreach($amount as $row){
					if($row->duration_type==1){
						if($oDiff->h!=0){
							if($row->upto==$oDiff->h){
								if($oDiff->i!=0 && $oDiff->i <= 30){
									$cost = $cost + $row->cost;
								}else if($oDiff->i!=0 && $oDiff->i > 30){
									$cost = $cost + $row->cost + 10;
								}
								
							}
						}else{
							$cost = 10;
						}
						
						if($oDiff->d!=0){
							if($row->upto==$oDiff->d){
								$cost = $cost + $row->cost;
							}
						}
					}
			}
			
			return array('out_time' => $out_time, 'cost' => $cost);
	}
	
}
