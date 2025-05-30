<?php

namespace App\Http\Controllers;

use App\Models\Frete;
use Illuminate\Http\Request;

class RastreamentoController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $codigoRastreio = $request->input('codigo_rastreio');

        $frete = Frete::where('codigo_rastreio', $codigoRastreio)
                       ->with('etapas')
                       ->first();

        return view('fretes.rastreamento', [
            'frete' => $frete
        ]);
    }
}
