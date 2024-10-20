<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
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
            "categoria_id" => "required|exists:categorias,id",
            "nome" => "required|string|max:255",
            "descricao" => "required|string|max:255",
            "preco" => "required|numeric|min:0.01",
            "preco_custo" => "required|numeric|min:0.01",
            "status" => "required",
            "quantidade_estoque" => "required|integer|min:1",
            "quantidade_minima_estoque" => "required|integer|min:1"
        ];
    }
    public function messages(): array
    {
        return [
            "categoria_id.required" => "A categoria é obrigatória.",
            "categoria_id.exists" => "A categoria selecionada não existe.",

            "nome.required" => "O nome do produto é obrigatório.",
            "nome.string" => "O nome do produto deve ser uma string.",
            "nome.max" => "O nome do produto deve ter no máximo 255 caracteres.",

            "descricao.required" => "A descrição do produto é obrigatória.",
            "descricao.string" => "A descrição do produto deve ser uma string.",
            "descricao.max" => "A descrição do produto deve ter no máximo 255 caracteres.",

            "preco.required" => "O preço do produto é obrigatório.",
            "preco.numeric" => "O preço deve ser um número.",
            "preco.min" => "O preço deve ser no mínimo 0.01.",

            "preco_custo.required" => "O preço de custo do produto é obrigatório.",
            "preco_custo.numeric" => "O preço de custo deve ser um número.",
            "preco_custo.min" => "O preço de custo deve ser no mínimo 0.01.",

            "status.required" => "O status do produto é obrigatório.",

            "quantidade_estoque.required" => "A quantidade em estoque é obrigatória.",
            "quantidade_estoque.integer" => "A quantidade em estoque deve ser um número inteiro.",
            "quantidade_estoque.min" => "A quantidade em estoque deve ser no mínimo 1.",

            "quantidade_minima_estoque.required" => "A quantidade mínima em estoque é obrigatória.",
            "quantidade_minima_estoque.integer" => "A quantidade mínima em estoque deve ser um número inteiro.",
            "quantidade_minima_estoque.min" => "A quantidade mínima em estoque deve ser no mínimo 1."
        ];
    }
}
