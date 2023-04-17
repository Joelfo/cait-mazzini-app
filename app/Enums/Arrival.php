<?php

namespace App\Enums;

enum Arrival : string
{
    case Fowarded = 'Encaminhado';
    case Referenced = 'Referenciado';
    case SpontaneousDemand = 'Demanda Espontanea';
}

?>