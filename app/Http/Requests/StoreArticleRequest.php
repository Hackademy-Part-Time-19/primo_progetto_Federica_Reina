<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
           'title' => 'required|max:50',
           'category' => 'required|max:20',
           'description' => 'required|max:150',
           'body' => 'required|max:5000',
        ];
    }

    public function messages(): array
    {
        return [
           'title.required' => 'Il titolo deve esistere',
           'title.max' => 'Il titolo non deve superare i 50 caratteri',
           'category.required' => 'Devi selezionare una categoria dove inserire il tuo articolo',
           'category.max' => 'La gategoria non deve superare i 20 caratteri',
           'description.required' => "Devi inserire una breve descrizione come anteprima dell'articolo",
           'description.max' => 'La descrizione non deve superare i 150 caratteri',
           'body.required' => 'Devi inserire una descrizione completa del tuo articolo',
           'body.max' => 'Il body non deve superare i 5000 caratteri',
        ];
    }
}
