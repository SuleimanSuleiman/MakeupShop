<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProduct extends FormRequest
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
            'name' => 'required',
            'desc' => 'required|min:10',
            'category_id' => 'required',
            'price' => 'required',
            'Quantity' => 'required|integer',
            'statusSale' => 'required',
            'files' => 'required',
            'files.*' => 'required|mimes:png,jpg',
            'Color' => 'required|array',
            'Concerns' => 'required|array',
            'Finish' => 'required|array',
            'Formulation' => 'required|array',
            'Skin' => 'required|array',
        ];
    }
}