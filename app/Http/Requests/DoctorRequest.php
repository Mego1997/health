<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'doc_name' => 'required' ,
            'doc_spec' => 'required' ,
            'doc_address' => 'required' ,
            'doc_phone' => 'required|numeric' ,
            'doc_mail' => 'required' ,
            'doc_summary' => 'required' ,
            'doc_exp' => 'required' ,
            'doc_skills' => 'required' ,
            'doc_edu' => 'required' ,
            'doc_image' => 'required|mimes:jpg,jpeg,png,bmp,tiff' ,
        ];
    }
}
