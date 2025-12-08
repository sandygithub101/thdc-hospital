<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Appointments;
use App\Models\User;
class UserController extends Controller

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
    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */
    public function index()

    {

        $appointments = Appointments::where(['user_id' => auth()->user()->id,'is_completed' => 0])
        ->select('appointments.id','appointment_id','unit','slot','users.name','users.email')
        ->join('users', 'users.id', '=', 'appointments.doctor_id')
        ->get(); 
        if(count($appointments) == 0){
            $appointmentsDetails = [];
        }else{

            $appointmentsDetails = $appointments;
        } 
        return view('user-dashboard',compact('appointmentsDetails'));

    } 

    public function userDetails(Request $request)
    {
        $users = User::where('id', $request->userId)->get();
        return response()->json($users); 
    } 
}