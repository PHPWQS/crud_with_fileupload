<?php

namespace App\Http\Requests\product;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => ['required', 'max:255', 'unique:products'],
            'description' => ['required'],
            'price' => ['numeric', 'min:0', 'max:10000.999','required'],
            'categories' => ['required'],
            'thumbnail' => ['required', 'file']
        ];
    }
}
