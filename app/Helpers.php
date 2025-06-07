<?php

namespace App;

use App\Models\Frete;
use Illuminate\Support\Str;

class Helpers
{
    static function geraCodigoRastreioUnico(): string
    {
        do {
            $codigo = Str::upper(Str::random(8));

            $existeCodigoComEsseCodigo = Frete::where('codigo_rastreio', $codigo)->exists();
        } while ($existeCodigoComEsseCodigo);

        return $codigo;
    }
}
