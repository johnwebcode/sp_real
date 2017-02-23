<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ReportRequest extends Request
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
            'floor' => array('required'),
            'date_from' => array('required','date_format:d/m/Y'),
            'date_to' => array('required','date_format:d/m/Y','after:date_from')
        ];
    }
}
