<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model
{
    protected $fillable = ['cpf', 'nome', 'email', 'telefone'];
    public function enviados(): HasMany
    {
        return $this->HasMany(Frete::class, 'remetente_id');
    }

    public function recebidos(): HasMany
    {
        return $this->HasMany(Frete::class, 'destinatario_id');
    }
}
