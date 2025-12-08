<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;
    public $table = "appointments";

    protected $fillable = [

        'id',
        'appointment_id',
        'unit',
        'slot',
        'doctor_id',
        'user_id',
    ];
}
