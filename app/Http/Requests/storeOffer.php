<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeOffer extends FormRequest
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
            'OfferName_en' => 'required',
            'OfferName_ar' => 'required',
            'desc_en' => 'required|min:6',
            'desc_ar' => 'required|min:6',
            'startdate' => 'required|date_format:Y-m-d\TH:i|before:EndDate',
            'EndDate' => 'required|date_format:Y-m-d\TH:i',
            'DiscountPercentage' => 'required|numeric'
        ];
    }
}