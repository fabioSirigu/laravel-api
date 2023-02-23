<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:projects,title|min:5|max:100',
            'cover_image' => 'nullable|image|max:5000',
            'gitHubUrl' => 'nullable|unique:projects,gitHubUrl|max:300',
            'type_id' => 'nullable|exists:types,id',
            'technologies' => 'exists:technologies,id',
            'description' => 'nullable',
            'date' => 'nullable|max:10'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo é obbligatorio',
            'title.min' => 'Il titolo deve avere minimo :min caratteri',
            'title.max' => 'Il titolo deve avere massimo :max caratteri',
            'date.max' => 'Il prezzo deve avere massimo :max caratteri'
        ];
    }
}
