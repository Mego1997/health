<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfoArticleRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'article_name' => 'required' ,
            'article_body' => 'required' ,
            'article_image' => 'required|mimes:jpg,jpeg,png,bmp,tiff|image' ,
            'cat_id' => 'required' ,
            'tag_id' => 'required' ,
            'doc_id' => 'required' ,
        ];
    }
}
