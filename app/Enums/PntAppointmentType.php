<?php 

namespace App\Enums;

enum PntAppointmentType : string {
    case FirstTime = "1ª vez";
    case Tracking28Day = "28/28 Dias";
    case Revision = "3 Meses";
}