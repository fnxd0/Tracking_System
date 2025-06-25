<?php

namespace App\Http\Controllers;

use App\Enums\FreteStatus;
use App\Models\Etapa;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEtapaRequest;
use App\Models\Frete;

class EtapaController extends Controller
{
    public function store(StoreEtapaRequest $request)
    {
        $frete = Frete::find($request->frete_id);
        if ($frete->status == FreteStatus::ENTREGUE) {
            return response()->json(
                ["message" => "não é possível adicionar etapas a um frete já entregue"],
                400
            );
        }
        $etapa = Etapa::create($request->all());
        $tipoFreteStatus = FreteStatus::fromName($request->tipo_etapa);

        $frete->update(['status' => $tipoFreteStatus]);
        return $etapa;
    }
}
