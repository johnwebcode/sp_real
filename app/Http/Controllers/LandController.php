
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\landbooking;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\DB;
class LandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.bookingland");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new landbooking;
        $user ->id = Input::get("id");
        $user ->name = Input::get("name");
        $user ->fhname = Input::get("fhname");
        $user ->nameapplicant = Input::get("nameapplicant");
        $user ->fhname = Input::get("fhname");
        $user ->dob = Input::get("dob");
        $user ->age = Input::get("age");
        $user ->address = Input::get("address");
        $user ->mob = Input::get("mob");
        $user ->lln = Input::get("lln");
        $user ->email = Input::get("email");
        $user ->occupation = Input::get("occupation");
        $user ->nname = Input::get("nname");
        $user ->nfhname = Input::get("nfhname");
        $user ->relationship = Input::get("relationship");
        $user ->nage = Input::get("nage");
        $user ->nmob = Input::get("nmob");
        $user ->nln = Input::get("nln");
        $user ->scheme_mode = Input::get("scheme_mode");
        $user ->plotno = Input::get("plotno");
        $user ->tot_amount = Input::get("tot_amount");
        $user ->apa = Input::get("apa");
        $user ->balanceamount = Input::get("balanceamount");
        $user ->yr = Input::get("yr");
        $user ->totalamount = Input::get("totalamount");
        $user ->adv_amount = Input::get("adv_amount");
        $user ->bal_amount = Input::get("bal_amount");
        $user ->ins_amount = Input::get("ins_amount");
        $user ->pname = Input::get("pname");
        $user ->arank = Input::get("arank");
        $user ->loc = Input::get("loc");

         $user ->city = Input::get("city");
        $user ->village = Input::get("village");
        $user ->taluk = Input::get("taluk");
        $user ->district = Input::get("district");
        $user ->ins_amount = Input::get("ins_amount");
        $user ->lro = Input::get("lro");
        $user ->date = Input::get("date");
        $user ->acode = Input::get("acode");
         $user ->aname = Input::get("aname");
        $user ->save();

        \Session::flash('message','Store Successfully');
          return view("admin.bookingland");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
 