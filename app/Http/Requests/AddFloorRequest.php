<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddFloorRequest extends Request
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
            'name' => array('required','unique:floor,name','max:10'),
            'project_area' => array('required','max:10','alpha'),
            'number' => array('required','max:100','min:1','integer'),
            'location' => array('required'),
            'taluk' => array('required'),
            'district' => array('required'),
            'land_register_office' => array('required')
              ];
    }
}
