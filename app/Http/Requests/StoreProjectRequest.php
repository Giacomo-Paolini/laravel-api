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
            "title" => "required|min:4|max:160",
            "content" => "max:65535",
            "image" => "nullable|image|max:2048",
            "type_id" => "exists:types,id",
            "technology" => "required|exists:technologies,id"
        ];
    }
    
    public function messages() {
        return [
            "title.required" => "Ogni nuovo progetto deve avere un titolo"
        ];
    }
}
