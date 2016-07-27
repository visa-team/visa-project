<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request
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
            'title' => 'required',
            'image' => 'required',
            'summary' => 'required',
            'content'=> 'required'
        ];
    }

    public function messages(){
        return [
            'title.required' => 'Vui lòng nhập vào trường này',
            'image.required' => 'vui lòng nhập vào trường này',
            'summary.required' => 'vui lòng nhập vào trường này',
            'content.required' => 'vui lòng nhập vào trường này'
        ];
    }
}
