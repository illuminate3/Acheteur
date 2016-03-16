<?php

namespace App\Http\Requests\Preference;

use App\Configuration;
use App\Http\Requests\Request;

class EditEmailRequest extends Request
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
    public function rules(){
        $rules = array(
            'code' => 'required',
        );

        return $rules;
    }
}