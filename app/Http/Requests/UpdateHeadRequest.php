<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHeadRequest extends FormRequest
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
            'page_id' => 'integer',
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
}
