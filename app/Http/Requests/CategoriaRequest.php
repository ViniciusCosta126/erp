<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaRequest extends FormRequest
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
            "nome_categoria" => "required|string|max:255",
            "status" => "required",
            "descricao" => "required|string|max:255",
            "ordem" => "required|integer|min:1"
        ];
    }

    public function messages(): array
    {
        return [
            "nome_categoria.required" => "O nome da categoria é obrigatório",
            "nome_categoria.string" => "O nome da categoria deve ser uma string.",
            "nome_categoria.max" => "O nome da categoria deve ter no maximo 255 caracteres",
            "status.required" => "O status é obrigatório",
            "descricao.required" => "A descrição da categoria é obrigatória.",
            "descricao.string" => "A descrição deve ser uma string.",
            "descricao.max" => "A descrição deve ter no maximo 255 caracteres.",
            "ordem.required" => "A ordem da categoria é obrigatória",
            "ordem.integer" => "A ordem da categoria deve ser um numero.",
            "ordem.min" => "O valor minimo para ordem é 1."
        ];
    }
}
