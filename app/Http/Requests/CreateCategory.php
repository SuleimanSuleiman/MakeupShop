<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategory extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title_en' => 'required|min:1',
            'title_ar' => 'required|min:1',
            'desc_ar' => 'required|min:10',
            'desc_en' => 'min:10',
            'active' => 'required|in:true,false',
        ];
    }
    public function messages(): array
    {
        return [
            'title_en.required' => __("validation.required"),
            'title_en.min' => __("validation.min"),
            'title_er.required' => __("validation.required"),
            'title_er.min' => __("validation.min"),

            'desc_er.required' =>  __("validation.required"),
            'desc_er.min' =>  __("validation.min"),
            'desc_an.min' => __("validation.min"),

            'active.required' => __('validation.required'),
            'active.boolean' => __('validation.boolean'),
        ];
    }
}