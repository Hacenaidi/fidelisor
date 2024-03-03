<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class variationRequest extends FormRequest
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
            'variation_name'=> 'required|max:30',
            'description' => 'required|max:150',
            'new_price' => 'required|numeric',
            'old_price' => 'required|numeric',
        ];
    }
}
