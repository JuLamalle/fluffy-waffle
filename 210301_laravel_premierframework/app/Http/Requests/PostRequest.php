<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required|title|max:200',
            'category'=>'required|category|max:200',
            'description'=>'required|description|max:200',
            'picture'=>'required|picture|max:200',
            'price'=>'required|price|max:200',
            'location'=>'required|location|max:200',
                ];
    }
}
