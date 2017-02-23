<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Floors;
use App\ParkingDetails;
use Session;
use Redirect;
use Illuminate\Pagination\LengthAwarePaginator;

class FloorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Requests\AddFloorRequest $request)
    {
        $input=$request->all();
        $check=Floors::create($input);
		
		if($check){
			$msg='Project Added Successfully.....';
            Session::flash('success', $msg);
			return Redirect::to('project-details');
            
		}else{
			$msg='Proccess Failed...';
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
    public function show()
    {
      $floorDetails = Floors::where('id', \Request::get('id'))->get();
	  
	  $checkStatus = ParkingDetails::where('floor_id', \Request::get('id'))
										->where('status', 1)
										->get();
										
		
		if(count($checkStatus)>0){
				$msg='Whoa...!! Project already Exists...';
				Session::flash('error', $msg);
				return Redirect::back();
		}
		
	  if($floorDetails){
		  $floorDetails = $floorDetails->toArray();
       return view('admin.edit_floor', ['floorDetails' => $floorDetails[0]]);
	  }else{
		 $msg='Proccess Failed...';
         Session::flash('error', $msg);
         return Redirect::back(); 
	  }
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
		echo "edit";
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
		$checkName = Floors::where('name', $request->get('name'))->where('id', '!=', $id)->get();
		
		
		if(count($checkName)==0){
			
		$floor = Floors::find($id);

        $floor->name = $request->get('name');
        $floor->project_area = $request->get('project_area');
        $floor->number = $request->get('number');
		
			if( $floor->save()){
				$msg='Updated Successfully...';
				Session::flash('success', $msg);
				return Redirect::to('project-details');
			}else{
				$msg='Updation Failed...';
				Session::flash('error', $msg);
				return Redirect::back();
			}
		}else{
			$msg='Name already Exists';
			Session::flash('error', $msg);
			return Redirect::back();
		}
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
		$checkStatus = ParkingDetails::where('floor_id', $id)
										->where('status', 1)
										->get();
										
		
		if(count($checkStatus)>0){
				$msg='Whoa...!! Project already Exists...';
				Session::flash('error', $msg);
				return Redirect::back();
		}else{
			$checkStatusNew = ParkingDetails::where('floor_id', $id)
										->where('status', 2)
										->get();
			if(count($checkStatusNew)>0){
				$msg='Whoa...!! Some Data have In use this Project...';
				Session::flash('error', $msg);
				return Redirect::back();
			}else{							
										
				if(Floors::where('id', $id)->delete()){
					$msg='Deleted Successfully...';
						Session::flash('success', $msg);
						return Redirect::to('project-details');
				}else{
					$msg='Something Wrong';
					Session::flash('error', $msg);
					return Redirect::back();
				}
			}
		}
    }
	
	
	public function FloorView()
    {
        $floor = Floors::paginate(10);
		return view('admin.view_floor', ['floor' => $floor]);
    }
	
	public function AjaxFloor(){
		$floor = Floors::all();
		return response()->json($floor);
	}
}
