<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:20', 'string'],
            'description' => ['required', 'max:255', 'string'],
            'category' => ['required'],
            'director' => ['string'],
            'actor' => ['string'],
            'technitian' => ['string'],
            'producer' => ['string'],
            'screenwriter' => ['string'],
            'tag' => ['max:255', 'unique:tags'],
            'coordinates' => ['max:255', 'between:-90, 90'],
        ];
    }
}
