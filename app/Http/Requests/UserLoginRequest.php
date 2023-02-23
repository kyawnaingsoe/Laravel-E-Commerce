<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'phone'=>'required|digits_between:7,11',
            'password'=>'required|min:8'
        ];
    }

    public function messages()
    {
        return [
            'phone.required'=> 'Phone နံပါတ် မထည့်လို့မရပါ',
            'phone.didits_between'=> 'Phone နံပါတ်အနည်းဆုံး ရလုံး အများဆုံး ၁၁လုံး ထည့်ပါ',
            'password.required'=> 'password မထည့်လို့မရပါ',
            'password.min'=> 'password အနည်းဆုံး ၈ လုံးထည့်ပါ'
        ];
    }
}
