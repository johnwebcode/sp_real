<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('staff.Land-Booking-Application');
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
    public function store(Request $request)
    {
          $Booking = new agencyapplication;
        $Booking ->agencycode = Input::get("agencycode");
        $Booking ->rate = Input::get("rate");
        $Booking ->date = Input::get("date");
        $Booking ->applicantname = Input::get("applicantname");
        $Booking ->fathername = Input::get("fathername");
        $Booking ->permanentaddress = Input::get("permanentaddress");
        $Booking ->pin = Input::get("pin");
        $Booking ->phonenum = Input::get(" phonenum");
        $Booking ->mob = Input::get("  mob");
        $Booking ->save();

        \Session::flash('message','Store Successfully');
        return redirect('show');

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
