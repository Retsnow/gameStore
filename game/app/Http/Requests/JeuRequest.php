<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JeuRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
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
            'nom' => 'required|min:3|max:50',
            'genres_id' => 'required',
            'date_sortie' => 'required|date',
            'nb_download' => 'required|integer',
            'image' => 'required|max:1024',
            'image_gameplay1' => 'max:1024',
            'image_gameplay2' => 'max:1024',
            'image_gameplay3' => 'max:1024',
            'video' => 'required|max:1024',
            'lien' => 'required|max:1024'

        ];
    }
}
