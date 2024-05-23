<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title'=>'required',
            'years'=>'nullable|integer',
            'pages'=>'nullable|integer',
            'image'=>'nullable|mimes:jpeg,jpg,bpm,png'
        ];
    }
    public function messages(): array
    {
        return [
            'title.required'=>'Il titolo del libro è obbligatorio',
            'years.integer'=>'l\'anno di pubblicazione deve essere un numero intero',
            'pages.integer'=>'Il numero delle pagine deve essere un numero intero',
            'image.mimes'=>'Formato file errato, formati possibili: jpeg,jpg,png,bpm'
        ];
    }
}
