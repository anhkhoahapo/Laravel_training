<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidStudent extends FormRequest
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
                'name' => 'required|max:50',
                'birthday' => 'required|date_format:"Y-m-d"',
                'address' => 'required|max:100',
                'class' => 'required|max:20',
        ];
    }
}
