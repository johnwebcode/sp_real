<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Floors;
use App\Amount;
use App\landbooking;
use App\ParkingDetails;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Auth;
use Session;

use Redirect;
use Carbon\Carbon;
use DateTime;




class BookingplotController extends Controller
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
            ->where('user_floors.status', Auth::user()->id)
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

   public function store(Request $request)
    {
        //
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
    
    
    
}


