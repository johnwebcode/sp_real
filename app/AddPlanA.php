<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddPlanA extends Model
{
    protected $table = 'spm_plan';
	
	protected $fillable = ['plan_aggrement_no', 'plan_booking_id','plan_start_date','plan_end_date','plan_buyer_name','plan_Fat_hus_name','plan_DOB_Buyer','plan_buyer_age','plan_buyer_address','plan_buyer_mobile','plan_buyer_landline','plan_buyer_email','plan_buyer_occupation','plan_nom_name','plan_agent_address','plan_nom_f_h_name','plan_nom_relationship','plan_nom_mobile','plan_landline_no','plan_nom_age','plan_land_value','plan_advance','plan_balance','plan_agent_name','plan_agent_code','plan_agent_commision','plan_agent_tds','plan_agent_no','plan_agent2_name','plan_agent2_address','plan_agent2_code','plan_agent2_commision','plan_agent2_tds','plan_agent2_no'];
}
