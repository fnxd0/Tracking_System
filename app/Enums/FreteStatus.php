<?php

namespace App\Enums;

enum FreteStatus: string
{
    case EM_TRANSITO = "Em trânsito";
    case SAIU_PARA_ENTREGA = "Saiu para entrega";
    case ENTREGUE = "Entregue";

    public function pegarCorEtiqueta(): string
    {
        return match ($this) {

            self::EM_TRANSITO => 'bg-danger',
            self::SAIU_PARA_ENTREGA => 'bg-primary',
            self::ENTREGUE => 'bg-success',
        };
    }

    public static function fromName(string $name): ?FreteStatus
{
    foreach (FreteStatus::cases() as $case) {
        if ($case->name === $name) {
            return $case;
        }
    }

    return null;
}

}
