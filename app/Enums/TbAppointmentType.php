<?php 

namespace App\Enums;

enum TbAppointmentType : string {
    case FirstTime = "1ª vez";
    case Tracking30Days = "28/28 dias";
    case Tracking3Months = "Revisão";
}