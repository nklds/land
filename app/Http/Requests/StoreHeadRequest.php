<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpKernel\Exception\HttpException;

class StoreHeadRequest extends FormRequest
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
            'page_id' => 'integer|string',
            'visible_name' => 'string',
            'tag_manager_id' => 'string',
            'google_analytics_id' => 'string',
            'yandex_metrika_id' => 'string',
            'vk_pixel_id' => 'string',
            'facebook_pixel_id' => 'string',
            'my_target_id' => 'string',
            'main' => 'boolean',
            'extra' => 'string',
            'order' => 'integer'
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'message' => 'Validation errors',
            'data' => $this->validator->errors()
        ]));
    }
}
