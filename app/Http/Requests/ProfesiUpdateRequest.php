<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfesiUpdateRequest extends FormRequest
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
            'nama_profesiUpdate' => 'string|max:50',
            'minimal_gaji_bulananUpdate' => 'string|max:100',
            'fotoUpdate' => 'mimes:png,jpg,jpeg|max:10240',
        ];
    }

    public function messages()
    {
        return[
            'namaUpdate.string' => 'Nama harus bertipe string',
            'namaUpdate.max' => 'Nama maximal 50 karakter',
            'minimal_gaji_bulananUpdate.string' => 'Minimal gaji bulanan harus bertipe string',
            'minimal_gaji_bulananUpdate.max' => 'Minimal gaji bulanan maximal 100 karakter',
            'fotoUpdate.mimes' => 'Foto harus berformat png, jpg atau jpeg',
            'fotoUpdate.max' => 'Foto maximal 10 MB',
        ];
    }

    public function withValidator($validator)
    {
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Data inputan salah, Periksa inputan anda');
        }
    }
}
