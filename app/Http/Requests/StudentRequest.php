<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'major_id' => 'required',
            'nama' => 'required|min:3',
            'nim' => 'required|numeric',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'no_hp' => 'required|numeric|digits_between:9,13',
            'jk' => 'required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'major_id.required' => 'A prodi field is required',
        ];
    }
}
