<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nomStore' => 'required|max:20',
            'location' => 'max:50',
            'url' => 'required|max:100',
            'logo' => 'image|max:10240|mimes:jpg,png,jpeg',
            'countryCode' => 'required',
            'point' => 'numeric'
            
        ];
    }
}
