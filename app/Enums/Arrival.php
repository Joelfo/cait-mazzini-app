<?php

namespace App\Enums;

enum Arrival : string
{
    case Fowarded = 'ENCAMINHADO';
    case Referenced = 'REFERENCIADO';
    case SpontaneousDemand = 'DEMANDA ESPONTÂNEA';
}

?>
