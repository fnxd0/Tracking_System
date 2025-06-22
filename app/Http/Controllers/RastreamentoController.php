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
        $codigoRastreio = $request->input('codigo_rastreio', "");
        $frete = Frete::where('codigo_rastreio', $codigoRastreio)
            ->with('etapas')->first();

        if (!$frete) {
            return redirect()->back()->with('erro', 'Frete não encontrado');
        }
        // dd($frete->etapas);

        return view('frete.show', [
            'frete' => $frete
        ]);
    }
}
