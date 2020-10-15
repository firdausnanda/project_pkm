<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'prodi' => 'required',
            'name' => 'required|min:3',
            'nim' => 'required|numeric',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'no_hp' => 'required|numeric|between:9,13',
            'jk' => 'required'
        ];
    }
}
