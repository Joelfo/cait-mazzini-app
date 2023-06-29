<?php  

namespace App\Enums;

enum SpecialPopulation : string{
    case None = "Nenhum";
    case Prisoner = "Presidiário";
    case Immigrant = "Imigrante";
    case Homeless = "Morador de rua";
    case HealthProfessional = "Profissional de saúde";
    case Other = "Outro";
}