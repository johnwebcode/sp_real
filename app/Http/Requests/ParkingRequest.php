<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ParkingRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
		
        return [
            'project_area' => array('required'),
             'buyer_name' => array('required'),
             'father_name' => array('required'),
          
             'dob' => array('required'),
            'age' => array('required'),
            'address' => array('required'),
             'mobile_no' => array('required'),
          'landline_no' => array('required'),
            'email' => array('required'),
             'occupation' => array('required'),
             'nominee_name' => array('required'),
             'nominee_father_name' => array('required'),
                'relationship' => array('required'),
             'nominee_age' => array('required'),
             'nominee_mobile' => array('required'),
             'nominee_landline' => array('required'),
             'mode_sheme' => array('required'),
             'project_name' => array('required'),
             'agent_code' => array('required'),
            'agent_name' => array('required'),
          
            
//            'image' => array('required','image','mimes:jpeg,jpg,bmp,png'),
            'image' => array('required')

            
            ];
    }
}
