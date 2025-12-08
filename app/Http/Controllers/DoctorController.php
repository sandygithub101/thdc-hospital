<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;  
use App\Models\User;
use App\Models\Appointments;
class DoctorController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('auth');

    }

    public function doctorHome()
    {

        $appointments = Appointments::where(['is_completed' => 0])
        ->select('appointment_id','unit','slot','users.name','users.email','users.id')
        ->join('users', 'users.id', '=', 'appointments.user_id')
        ->get(); 

        $doctors = User::where('type', 2)->get();
        if(count($appointments) == 0){
            $appointmentsDetails = [];
        }else{

            $appointmentsDetails = $appointments;
        } 
        return view('doctor.doctor-dashboard',compact('appointmentsDetails','doctors')); 

    }


    public function docDetails(Request $request)
    {
        $doctors = User::where('id', $request->docId)->get();
        return response()->json($doctors); 
    } 
}