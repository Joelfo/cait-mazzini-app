<?php

namespace App\Enums;

enum PatientIncomeSource : string {
    case Retired = 'Aposentado';
    case Employed = 'Empregado';
    case Pensioner = 'Pensionista';
    case NoIncome = 'Sem renda';
    case SelfEmployed = 'Autônomo';
    case Other = 'Outro';
}
