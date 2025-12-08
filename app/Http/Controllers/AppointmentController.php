<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Appointments;
use App\Models\RescheduleAppointment;
class AppointmentController extends Controller
{
    public function bookAppointment()
    { 
        $doctors = User::where('type', 2)->paginate(10);
        return view('book-appointment',compact('doctors'));
    }


    public function saveUserAppointment(Request $request)
    {  
        // dd($request);
        $appointId = $this->appointId(rand(10,200));
        $dataArray          =       array(
            "appointment_id"          =>          $appointId,
            "unit"          =>          $request->unit,
            "slot"         =>          $request->slot,
            "doctor_id"         =>          $request->doctor_id,
            "user_id"       =>          auth()->user()->id,
        );
        $appointment                =       Appointments::create($dataArray);
        return redirect()->back()->with('success', 'your appointment is booked');   
    }

    public function saveUserReappointment(Request $request)
    {  
        $appointment = Appointments::where('appointment_id', $request->appointment_id)->first();
        $appointment->update([
         "unit"          =>          $request->unit,
         "slot"          =>          $request->slot, 
         "doctor_id"         =>          $request->doctor_id,
         "user_id"         =>          $request->user_id, 
        ]);  

        $dataArray          =       array(
            "appointment_id"          =>          $request->appointment_id,
            "doctor_id"          =>          $request->doctor_id,
            "user_id"         =>          $request->user_id,
            "appointment_type"         =>          1,//reshedule
            "reschedule_by"       =>          auth()->user()->id,
        );
        $appointment                =       RescheduleAppointment::create($dataArray);
        return redirect()->back()->with('success', 'Appointment is re-schedule');   
    }

    function appointId ($input,  $pad_len = 8, $prefix = "THDC") {
        if ($pad_len <= strlen($input))
            trigger_error('<strong>$pad_len</strong> cannot be less than or equal to the length of <strong>$input</strong> to generate invoice number', E_USER_ERROR);

        if (is_string($prefix))
            return sprintf("%s%s", $prefix, str_pad($input, $pad_len, "0", STR_PAD_LEFT));

        return str_pad($input, $pad_len, "0", STR_PAD_LEFT);
    }


    function cancelUserAppointment ($id) {
        $appointment=Appointments::where('id', $id)->update(['is_completed' => '2']);
        return redirect()->back()->with('success', 'your appointment is canceled'); 
    }

    function cancelAppointment ($id) {
        $appointment=Appointments::where('id', $id)->update(['is_completed' => '2','canceld_by' => auth()->user()->id]);
        return redirect()->back()->with('success', 'Appointment is canceled'); 
    }

}
