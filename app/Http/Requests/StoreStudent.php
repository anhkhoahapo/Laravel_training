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
                'name.required' => 'Họ tên là trường bắt buộc',
                'name.max' => 'Họ tên không quá 50 ký tự',
                'birthday.required' => 'Birthday là trường bắt buộc',
                'birthday.date_format' => 'Ngày sinh phải có dạng năm-tháng-ngày ex: 1997-08-05',
                'address.required' => 'Địa chỉ là trường bắt buộc',
                'address.max' => 'Địa chỉ không quá 50 ký tự',
                'class.required' => 'Lớp là trường bắt buộc',
                'class.max' => 'Tên lớp không quá 50 ký tự',
        ];
    }
}
