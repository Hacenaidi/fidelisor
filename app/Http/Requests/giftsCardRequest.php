<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class giftsCardRequest extends FormRequest
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
        'namecard'  => 'required|max:30',
        'description'  => 'max:150',
        'currency' => 'required|max:5',
        'validite' => 'required|date',
        'nb_max'  => 'required|max:4',
        'expiration' => 'required|max:4',
        'image' => 'image|mimes:jpg,png,jpeg|max:10240',
        ];
    }
}
