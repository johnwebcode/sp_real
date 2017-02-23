<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class spmproject extends Model
{
    protected $table = 'sp_add_project';
	
	protected $fillable = ['prj_name','prj_des','prj_id','plan_a_emi_amount','plan_a_total_duration','plan_a_emi_month','plan_a_no_of_emi','plan_a_total_payable_amount','plan_a_total_benifit_amount', 
'plan_b_emi_amount','plan_b_total_duration','plan_b_emi_month','plan_b_no_of_emi','plan_b_total_payable_amount','plan_b_total_benifit_amount','plan_c_emi_amount',
'plan_c_total_duration','plan_c_emi_month','plan_c_no_of_emi','plan_c_total_payable_amount','plan_c_total_benifit_amount','plan_d_emi_amount','plan_d_total_duration','plan_d_emi_month','plan_d_no_of_emi','plan_d_total_payable_amount','plan_d_total_benifit_amount'];
}



