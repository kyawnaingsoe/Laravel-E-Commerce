<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryCreateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=>'required|unique:categories',
            'image'=>'required'
        ];
    }


    public function messages()
    {
        return [
            'name.required'=>'Category နာမည်ထည့်ပါ',
            'name.unique'=>'Category ရှိပြီးသား',
            'image.required'=>'Category ဓာတ်ပုံလိုတယ်'
        ];
    }
}
