<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RescheduleAppointment extends Model
{
    use HasFactory;
     public $table = "reschedule_appointments";

    protected $fillable = [

        'id',
        'appointment_id',
        'doctor_id',
        'user_id',
        'appointment_type',
        'reschedule_by',
    ];
}
