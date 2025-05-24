<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Frete extends Model
{
    protected $fillable = [
        'codigo_rastreio',
        'descricao',
        'data_envio',
        'data_entrega',
        'status'
    ];

    public function etapas(): HasMany
    {
        return $this->hasMany(Etapa::class);
    }

}
