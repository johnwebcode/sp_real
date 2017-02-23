<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParkingDetails extends Model
{
    protected $table = 'parking_details';
    protected $fillable = ['project_area','buyer_name', 'father_name','dob','age','address','mobile_no','landline_no','email','occupation','nominee_name','nominee_father_name','relationship','nominee_age','nominee_mobile','nominee_landline','mode_sheme','project_name','location','city','village','Taluk','district','land_and_register_office','agent_code','agent_name','image','slot_no'];
}
