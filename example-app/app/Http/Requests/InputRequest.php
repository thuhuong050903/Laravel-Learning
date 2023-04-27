<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Summary of FormRequest
 */
class InputRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     */
    public function rules(): array
    {
            return [
                'name' => 'required|max:255',
                'age' => 'required|numeric|min:18',
                'date' => 'required|date',
                'phone' => 'required|regex:/^0[0-9]{9}$/',
                'web' => 'required|url',
                'address' => 'required',
            ];
    }

     public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'name.max' => 'Tên không được quá 255 ký tự',
            'age.required' => 'Tuổi không được để trống',
            'age.numeric' => 'Tuổi phải là số',
            'age.min' => 'Tuổi phải lớn hơn hoặc bằng 18',
            'date.required' => 'Ngày sinh không được để trống',
            'date.date' => 'Ngày sinh không đúng định dạng',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.regex' => 'Số điện thoại không đúng định dạng',
            'web.required' => 'Website không được để trống',
            'web.url' => 'Website không đúng định dạng',
            'address.required' => 'Địa chỉ không được để trống'
        ];
    }
}
