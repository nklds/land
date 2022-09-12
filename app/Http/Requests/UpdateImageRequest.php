<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateImageRequest extends FormRequest
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

            'user_id' => 'integer',
            'class_list' => 'string',
            'bem_class' => 'string',
            'visible_text' => 'string',
            'title' => 'string',
            'tag_name' => 'string',
            'extra' => 'string',
            'alt' => 'string',
            'image_url' => 'string',
            'visible_name' => 'string',
            'data_attributes' => 'string',
            'type' => 'string',
            'name' => 'string',
            'fragment_name' => 'string',
            'order' => 'integer',
            'place' => 'string',
            'href' => 'string',
        ];
    }
}
