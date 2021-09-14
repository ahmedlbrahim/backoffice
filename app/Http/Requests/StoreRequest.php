<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'CAT_Custom_1' => 'required',
            'CAT_Custom_2' => 'required',
            'CAT_Custom_3' => 'required',
            'CAT_Custom_4' => 'required',
            'CAT_Custom_5' => 'required',
            'CAT_Custom_6' => 'required',
        ];
    }
}
