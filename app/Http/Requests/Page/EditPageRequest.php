<?php

namespace App\Http\Requests\Page;

use App\Configuration;
use App\Http\Requests\Request;

class EditPageRequest extends Request
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
            'title' => 'required',
        );

        return $rules;
    }
}
