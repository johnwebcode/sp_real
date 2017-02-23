<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Floors;
use App\ParkingDetails;
use App\Amount;
use DateTime;
use DB;
use Redirect;
use Carbon\Carbon;
use Validator;
use Input;
use Session;
use Hash;
use Auth;
class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    	
    
		$amount = Amount::all()->toArray();	
		
		$floor=Floors::select(array('id', 'name'))->get();
		        
      return view('admin.report_all', compact('floor','amount'))
            ->with('title','View All Reports');
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
    public function store(Requests\ReportRequest $request)
    {
        $input=Input::all();
        $from_date = new DateTime(str_ireplace("/","-",$input['date_from']));
        $from_date = $from_date->format('Y-m-d');
        $from_to = new DateTime(str_ireplace("/","-",$input['date_to']));
        $from_to = $from_to->format('Y-m-d');

        $floor=Floors::select(array('id', 'name'))->get();
        
        $amount = Amount::all()->toArray();	

        if($input['floor']==0)
        {
//            $parking=ParkingDetails::whereBetween('in_time', array($from_date, $from_to))->get()->toArray();
            $parking=DB::table('parking_details')
                ->Join('floor','parking_details.floor_id','=','floor.id')
                ->whereBetween('parking_details.in_time', array($from_date, $from_to))
                ->select('parking_details.id',
                    'parking_details.name as p_name',
                    'parking_details.car_number',
                    'parking_details.mobile',
                    'parking_details.in_time',
                    'parking_details.out_time',
                    'parking_details.status',
                    'parking_details.parking_type',
                    'parking_details.out_time',
                    'parking_details.cost',
                    'floor.name',
                    'floor.project_area')
                ->get();
        }
        else
        {
            $parking=DB::table('parking_details')
                ->Join('floor','parking_details.floor_id','=','floor.id')
                ->whereBetween('parking_details.in_time', array($from_date, $from_to))
                ->where('floor.id','=',$input['floor'])
                ->select('parking_details.id',
                    'parking_details.name as p_name',
                    'parking_details.car_number',
                    'parking_details.mobile',
                    'parking_details.in_time',
                    'parking_details.out_time',
                    'parking_details.status',
                    'parking_details.parking_type',
                    'parking_details.out_time',
                    'parking_details.cost',
                    'floor.name',
                    'floor.project_area')
                ->get();
        }
       return view('admin.report_all', compact('floor','parking','amount'))
            ->with('title','View All Reports');
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
}
