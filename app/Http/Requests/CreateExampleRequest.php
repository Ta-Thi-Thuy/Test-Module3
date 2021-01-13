<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateExampleRequest extends FormRequest
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
            'id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'managerName' => 'required',
            'status' => 'required',


        ];
    }


    public function message()
    {
        $messages = [
            'name.required' => 'Yêu cầu nhập tên',
            'id.required' => 'Yêu cầu nhập mã số',
            'phone.required' => 'Yêu cầu nhập số điện thoại',
            'email.required' => 'Yêu cầu nhập email',
            'address.required' => 'Yêu cầu nhập địa chỉ',
            'managerName.required' => 'Yêu cầu nhập tên người quản lý',
            'status.required' => 'Yêu cầu chọn trạng thái',
        ];
        return $messages;


    }
}
