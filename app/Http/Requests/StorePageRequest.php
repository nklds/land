<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StorePageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
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
            'site_name' => 'string',
            'language' => 'string',

            'favicon' => 'string`',
            'slug' => 'string',
            'visible_name' => 'string',

            'extra' => 'string',
            'common_head_styles' => 'string',
            'common_head_scripts' => 'string',
            'common_after_body_scripts' => 'string',

            'title' => 'string',
            'description' => 'string',
            'keywords' => 'string',

            'og_title' => 'string',
            'og_description' => 'string',
            'og_type' => 'string',
            'og_image' => 'string',
            'og_url' => 'string',
            'og_locale' => 'string',

            'excerpt' => 'string'
        ];
    }

    /**
     *  This method works if validation fails
     * @return \Illuminate\Http\JsonResponse
     */
    public function failedValidation(Validator $validator): \Illuminate\Http\JsonResponse
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'message' => 'Validation errors',
            'data' => $validator->errors()
        ]));
    }
}
