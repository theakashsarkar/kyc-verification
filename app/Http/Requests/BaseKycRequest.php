<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class BaseKycRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function commonRules(): array
    {
        return [
            'full_name'   => 'required|string|max:100',
            'nid_number'  => 'required|string|max:30|unique:kycs,nid_number',
            'dob'         => 'required|date|before:today',
            'address'     => 'required|string|max:500',

            //image validation 
            'nid_front' => 'required|image|max:2048',
            'nid_back'  => 'required|image|max:2048',
            'selfi'     => 'required|image|max:2048' 
        ];     
    }
}
