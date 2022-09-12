<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateTextRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'fragment_name' => 'string',
            'class_list' => 'string',
            'bem_class' => 'string',
            'visible_text' => 'string',
            'title' => 'string',
            'tag_name' => 'string',
            'extra' => 'string',
            'data_attributes' => 'string'
        ];
    }
    protected function failedValidation(Validator $validator)
    {
       throw  new HttpResponseException(response()->json([
           'success' => false,
           'message' => 'Validation errors',
           'data' => $validator->errors()
       ]));
    }
}
