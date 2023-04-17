<?php 

namespace App\Enums;

enum TbAppointment : string {
    case FirstTime = "1ª Vez";
    case Tracking30Days = "30/30 Dias";
    case Tracking3Months = "3 Meses";
}