<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Retirada extends Model
{

    use HasFactory;
    protected $fillable = [
        'data',
        'medicamento_id',
        'farmaceutico_id',
        'receita',
        'quantidade',
    ];

    // Relacionamento com o modelo Medicamento
    public function medicamento()
    {
        return $this->belongsTo(Medicamento::class, 'medicamento_id');
    }

    // Relacionamento com o modelo Farmaceutico
    public function farmaceutico()
    {
        return $this->belongsTo(Farmaceutico::class, 'farmaceutico_id');
    }
}
