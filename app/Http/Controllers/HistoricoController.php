<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class HistoricoController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $cpf = $request->input("cpf", "");
        $cliente = Cliente::where('cpf', $cpf)
            ->with('enviados', 'recebidos')->first();

        if (! $cliente) {
            return redirect()->back()->with('erro', 'Cliente não encontrado');
        }
        return view('frete.historic', [
            'cliente' => $cliente
        ]);
    }
}
