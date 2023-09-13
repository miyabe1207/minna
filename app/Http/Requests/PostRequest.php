<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'post.disease_name' => 'required|string|max:100',
            'post.therapeutic_method' => 'required|string|max:4000',
            'post.hospital_name' => 'required|string|max:100',
            'post.doctor_name' => 'required|string|max:100',
        ];
    }
}
