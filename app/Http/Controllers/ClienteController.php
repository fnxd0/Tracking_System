<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClienteRequest;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function store(StoreClienteRequest $request)
    {
        // dd($request->all());
        $cliente = Cliente::create($request->all());
        return $cliente;
    }

    public function searchByCpf(string $cpf)
    {
        $cpf = preg_replace('/\D/', '', $cpf);

        $cliente = Cliente::where('cpf', $cpf)->first();

        if (!$cliente) {
            return response()->json(['message' => 'Cliente não encontrado'], 404);
        }

        return response()->json($cliente);
    }
}
