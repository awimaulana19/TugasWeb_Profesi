<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfesiCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (!$this->user()->admin) {
            return false;
        }
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
            'nama_profesi' => 'string|max:50',
            'minimal_gaji_bulanan' => 'string|max:100',
            'foto' => 'mimes:png,jpg,jpeg|max:10240',
        ];
    }

    public function messages()
    {
        return [
            'nama_profesi.string' => 'Nama profesi harus bertipe string',
            'nama_profesi.max' => 'Nama profesi maximal 50 karakter',
            'minimal_gaji_bulanan.string' => 'Minimal gaji bulanan harus bertipe string',
            'minimal_gaji_bulanan.max' => 'Minimal gaji bulanan maximal 100 karakter',
            'foto.mimes' => 'Foto harus berformat png, jpg atau jpeg',
            'foto.max' => 'Foto maximal 10 MB',
        ];
    }

    public function withValidator($validator)
    {
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Data inputan salah, Periksa inputan anda');
        }
    }
}
