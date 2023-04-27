<?php 

namespace App\Enums;

enum TbAppointmentType : string {
    case FirstTime = "1ª Vez";
    case Tracking30Days = "28/28 Dias";
    case Tracking3Months = "Revisão";
}