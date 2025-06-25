<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
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
            'cpf' => ['required', 'string', 'size:11', 'unique:clientes,cpf'],
            'nome' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:clientes,email'],
            'telefone' => ['required', 'string', 'regex:/^\d{10,11}$/']
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'cpf' => preg_replace('/\D/', '', $this->cpf),
            'telefone' => preg_replace('/\D/', '', $this->telefone),
        ]);
    }
}
