<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreHabitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // sem regra mudar pra true, default é false
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'min:3', 'max:255', 'string'],
        ];
    }

    // /**
    //  * Handle a passed validation attempt.
    //  *
    //  * @return void
    //  */
    // protected function passedValidation(): void
    // {
    //     $this->merge(['uuid' => Str::uuid()]);
    // }
}
