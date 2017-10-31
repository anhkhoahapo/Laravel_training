<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudent extends FormRequest
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

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
                'required' => ':attribute là trường bắt buộc',
                'max' => ':attribute không quá :max ký tự',
                'birthday.date_format' => 'Ngày sinh phải có dạng năm-tháng-ngày ex: 1997-08-05',
        ];
    }
}
