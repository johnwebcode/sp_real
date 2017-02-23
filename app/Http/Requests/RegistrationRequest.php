<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegistrationRequest extends Request
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


            'name_applicant' =>  array('required','alpha'),
            'father_husband_name' =>  array('required','alpha'),
            'dob' => array('required'),
            'age' => array('required','max:100','min:1','integer'),
            'pan_id' => array('required'),
            'mobile' =>array('required','digits_between:8,10','numeric'),
            'phone' => array('required','digits_between:8,10','numeric'),
            'permenent_address' => array('required'),
            'pincode' =>array('required','min:6','integer'),
            'nominee_name' => array('required'),
            'nominee_dob' => array('required'),
            'nominee_age' =>array('required','max:100','min:1','integer'),
            'nominee_gender' => array('required'),
            'agent_role' => array('required'),
            'agent_code' => array(''),
            'agent_rank' => array('required'),
            'introducer_name' => array('required','alpha'),
            'introducer_code' => array('required'),
            'introducer_rank' =>array('required','max:20'),
            'image' => array('required'),
            'email' => array('required','unique:users,email','email'),
            'gender' => array('required'),
            'password' => array('required','min:4','max:20'),
            'floor' => array('required')

      
              ];
    }
}
