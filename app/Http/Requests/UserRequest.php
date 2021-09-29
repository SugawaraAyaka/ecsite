<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     *
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
            'last_name'    => 'required|max:10',
            'first_name'   => 'required|max:10',
            'email'        => 'required|email|unique:users',
            'zipcode'      => 'required|integer|digits:7',
            'prefecture'   => 'required|max:5',
            'municipality' => 'required|max:10',
            'address'      => 'required|max:15',
            'apartments'   => 'max:10',
            'phone_number' => 'required|integer:max:20',
        ];
    }

    public function attributes()
    {
        return [
            'last_name'    => '姓',
            'first_name'   => '名',
            'email'        => 'メールアドレス',
            'zipcode'      => '郵便番号',
            'prefecture'   => '都道府県',
            'municipality' => '市町村',
            'address'      => '番地',
            'apartments'   => 'マンション部屋番号',
            'phone_number' => '電話番号',
        ];
    }
}
