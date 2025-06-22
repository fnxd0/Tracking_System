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
        $frete = Frete::where('codigo_rastreio', 'nJFNre69%Ml')
        ->with('etapas')->first();
        dd($frete->etapas);

        return view('frete.show', [
            'frete' => $frete
        ]);
    }
}
