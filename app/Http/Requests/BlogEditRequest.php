<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogEditRequest extends FormRequest
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
            'title' => 'required',
            'content' => 'required',
            'thumbnail' => 'image|mimes:jpg,jpeg,png|max:10240',
        ];
    }

    function messages()
    {
        return [
            'title.required' => 'Judul wajib diisi!',
            'content.required' => 'Konten wajib diisi!',
            'thumbnail.image' => 'Thumbnail harus berupa gambar!',
            'thumbnail.mimes' => 'Ekstensi yang diperbolehkan hanya untuk format jpeg, jpg, dan png!',
            'thumbnail.max' => 'Ukuran gambar tidak boleh melebihi 10MB',
        ];
    }
}
