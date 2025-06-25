<?php

namespace App\Http\Controllers;

use App\Models\Etapa;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEtapaRequest;

class EtapaController extends Controller
{
    public function store(StoreEtapaRequest $request)
    {
        $etapa = Etapa::create($request->all());
        return $etapa;
    }
}
