<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEtapaRequest;
use App\Models\Etapa;

class EtapaController extends Controller
{
    public funCtion store(StoreEtapaRequest $request)
    {
        $etapa = Etapa::create($request->validated());

        return $etapa;
    }
}
