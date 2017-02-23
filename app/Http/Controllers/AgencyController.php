<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\agentform;
use Illuminate\Support\Facades\Validator;
use Session;
use Redirect;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\DB;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view("admin.agent-form");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          echo "create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request\AgentRequest $request)
    {
        $input=$request->except('agencyapplication');
 
         $user=User::create($input);

         if($user){
            foreach($request->agencyapplication as $row){

        $user = new agentform();
        $user ->agencycode = Input::get("agencycode");
        $user ->rank = Input::get("rank");
        $user ->date = Input::get("date");
        $user ->nameapplicant = Input::get("nameapplicant");
        $user ->fhname = Input::get("fhname");
        $user ->address = Input::get("address");
        $user ->pin = Input::get("pin");
        $user ->phone = Input::get("phone");
        $user ->mobile = Input::get("mobile");
        $user ->dob = Input::get("dob");
        $user ->age = Input::get("age");
        $user ->sex = Input::get("sex");
        $user ->pan = Input::get("pan");
        $user ->nname = Input::get("nname");
        $user ->ndob = Input::get("ndob");
        $user ->nage = Input::get("nage");
        $user ->nsex = Input::get("nsex");
        $user ->noaname = Input::get("noaname");
        $user ->nrank = Input::get("nrank");
        $user ->ncode = Input::get("ncode");
        $user ->sum = Input::get("sum");
        $user ->um = Input::get("um");
        $user ->sm = Input::get("sm");
        $user ->co = Input::get("co");
        $user ->sa = Input::get("sa");
        $user ->ad = Input::get("ad");
        $user ->fcun = Input::get("fcun");
        $user ->noa = Input::get("noa");
        $user ->acode = Input::get("acode");
        $user ->arank = Input::get("arank");
        $user ->adate = Input::get("adate");
        $user ->save();

}
        $msg='Agent Created Successfully.....';
             Session::flash('success', $msg);
             return view('admin.agent-form');
          
            
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
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
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
