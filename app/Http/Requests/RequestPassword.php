<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestPassword extends FormRequest
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
            'password'          => 'required',
            'passwordNew'       => 'required',
            'passwordNewrepeat' => 'required|same:passwordNew',
        ];
    }
    public function messages()
    {
        return [
            'password.required'  => ' trường này không được để trống',
            'passwordNew.required'  => ' trường này không được để trống',
            'passwordNewrepeat.same'  => ' Mật khẩu xác nhận không đúng',
            
        ];
    }
}
