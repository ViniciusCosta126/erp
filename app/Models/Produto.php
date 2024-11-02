<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table = 'produtos';
    protected $fillable = ['categoria_id', 'nome', 'descricao', 'preco', 'preco_custo', 'status', 'quantidade_estoque', 'quantidade_minima_estoque'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
