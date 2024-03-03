<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class rewardRequest extends FormRequest
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
        'name' => 'required|max:30',
        'description' => 'max:150',
        'nbPoint' => 'required|numeric|min:1',
        'validity' => 'required|date',
        'nb_quota'=> 'required|numeric',
        'expiration' => 'required|numeric',
        'image' => 'image|mimes:jpg,png,jpeg|max:10240',
        ];
    }
}
