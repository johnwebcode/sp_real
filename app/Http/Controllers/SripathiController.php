<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\AddPlanA;
use App\Http\Requests;
use App\spmproject;
use Redirect;
use Session;
use DB;
use PDF;

class SripathiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.spm-create'); 
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
        $user = new spmproject;
        $user ->prj_name = Input::get("prj_name");
        $user ->prj_des = Input::get("prj_des");
        $user ->prj_id = Input::get("prj_id");
        $user ->plan_a_emi_amount = Input::get("plan_a_emi_amount");
        $user ->plan_a_total_duration = Input::get("plan_a_total_duration");
        $user ->plan_a_emi_month = Input::get("plan_a_emi_month");
        $user ->plan_a_no_of_emi = Input::get("plan_a_no_of_emi");
        $user ->plan_a_total_payable_amount = Input::get("plan_a_total_payable_amount");
        $user ->plan_a_total_benifit_amount = Input::get("plan_a_total_benifit_amount");
        $user ->plan_b_emi_amount = Input::get("plan_b_emi_amount");
        $user ->plan_b_total_duration = Input::get("plan_b_total_duration");
        $user ->plan_b_emi_month = Input::get("plan_b_emi_month");
        $user ->plan_b_no_of_emi = Input::get("plan_b_no_of_emi");
        $user ->plan_b_total_payable_amount = Input::get("plan_b_total_payable_amount");
        $user ->plan_b_total_benifit_amount = Input::get("plan_b_total_benifit_amount");
        $user ->plan_c_emi_amount = Input::get("plan_c_emi_amount");
        $user ->plan_c_total_duration = Input::get("plan_c_total_duration");
        $user ->plan_c_emi_month = Input::get("plan_c_emi_month");
        $user ->plan_c_no_of_emi = Input::get("plan_c_no_of_emi");
        $user ->plan_c_total_payable_amount = Input::get("plan_c_total_payable_amount");
        $user ->plan_c_total_benifit_amount = Input::get("plan_c_total_benifit_amount");
        $user ->plan_d_emi_amount = Input::get("plan_d_emi_amount");
        $user ->plan_d_total_duration = Input::get("plan_d_total_duration");
        $user ->plan_d_emi_month = Input::get("plan_d_emi_month");
        $user ->plan_d_no_of_emi = Input::get("plan_d_no_of_emi");
        $user ->plan_d_total_payable_amount = Input::get("plan_d_total_payable_amount");
        $user ->plan_d_total_benifit_amount = Input::get("plan_d_total_benifit_amount");
        $user ->save();

        \Session::flash('message','Store Successfully');
        return Redirect::back();
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

        $row = DB::table('sp_add_project') -> where('id',$id)-> first();
        return view('admin.spm-view-more') -> with('row',$row);
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
    public function spmshow()
    {
        $sp_add_project = spmproject::all();
        return view('admin.spm-view', ['sp_add_project' => $sp_add_project]);
        
    }
     public function spcshow()
    {
         return view('admin.spc-view'); 
    }

     public function plan_booking_a(Request $request)
    {
         return view('admin.plan_booking_a'); 
    }

     public function plan_booking_b(Request $request)
    {
         return view('admin.plan_booking_b'); 
    }

     public function plan_booking_c(Request $request)
    {
         return view('admin.plan_booking_c'); 
    }

     public function plan_booking_d(Request $request)
    {
         return view('admin.plan_booking_d'); 
    }

    public function spmstore(Request $request)
    {
        $user = new AddPlanA;
        $user ->plan_aggrement_no = Input::get("plan_aggrement_no");
        $user ->plan_booking_id = Input::get("plan_booking_id");
        $user ->plan_start_date = Input::get("plan_start_date");
        $user ->plan_end_date = Input::get("plan_end_date");
        $user ->plan_buyer_name = Input::get("plan_buyer_name");
        $user ->plan_Fat_hus_name = Input::get("plan_Fat_hus_name");
        $user ->plan_DOB_Buyer = Input::get("plan_DOB_Buyer");
        $user ->plan_buyer_age = Input::get("plan_buyer_age");
        $user ->plan_buyer_address = Input::get("plan_buyer_address");
        $user ->plan_buyer_mobile = Input::get("plan_buyer_mobile");
        $user ->plan_buyer_landline = Input::get("plan_buyer_landline");
        $user ->plan_buyer_email = Input::get("plan_buyer_email");
        $user ->plan_buyer_occupation = Input::get("plan_buyer_occupation");
        $user ->plan_nom_name = Input::get("plan_nom_name");
        $user ->plan_nom_f_h_name = Input::get("plan_nom_f_h_name");
        $user ->plan_nom_relationship = Input::get("plan_nom_relationship");
        $user ->plan_nom_mobile = Input::get("plan_nom_mobile");
        $user ->plan_landline_no = Input::get("plan_landline_no");
        $user ->plan_nom_age = Input::get("plan_nom_age");
        $user ->plan_land_value  = Input::get("plan_land_value");
        $user ->plan_advance = Input::get("plan_advance");
        $user ->plan_balance = Input::get("plan_balance");
        $user ->plan_agent_name = Input::get("plan_agent_name");
        $user ->plan_agent_address = Input::get("plan_agent_address");
        $user ->plan_agent_code = Input::get("plan_agent_code");
        $user ->plan_agent_commision = Input::get("plan_agent_commision");
        $user ->plan_agent_tds = Input::get("plan_agent_tds");
        $user ->plan_agent_no = Input::get("plan_agent_no");
        $user ->plan_agent2_name = Input::get("plan_agent2_name");
        $user ->plan_agent2_address = Input::get("plan_agent2_address");
        $user ->plan_agent2_code = Input::get("plan_agent2_code");
        $user ->plan_agent2_commision = Input::get("plan_agent2_commision");
        $user ->plan_agent2_tds = Input::get("plan_agent2_tds");
        $user ->plan_agent2_no = Input::get("plan_agent2_no");
        $user ->save();

        \Session::flash('message','Store Successfully');
         return view('admin.plan_booking_a'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function spmbookshow()
    {
        $spm_plan = AddPlanA::all();
        return view('admin.bookspm', ['spm_plan' => $spm_plan]);
        
    }

    public function pdfview(Request $request, $id)
    {
        $spm_plan = DB::table("spm_plan")->where('id', $id)->get();
        view()->share('spm_plan',$spm_plan);

        if($request->has('download')){
            $pdf = PDF::loadView('pdfview/{id}');
             $pdf->setPaper('A4', 'portrait');
            return $pdf->download('pdfview/{id}.pdf');
        }

        return view('pdfview');
    }


}

