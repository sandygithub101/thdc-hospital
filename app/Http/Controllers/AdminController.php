<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
class AdminController extends Controller

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

    public function adminHome()

    {

        return view('admin.admin');

    }

    public function docList(Request $request)
    {
       $doctors = User::where('type', 2)->paginate(10);
        return view('admin.doctors-list',compact('doctors')); 
    }

    public function empList(Request $request)
    {
       $Employees = User::where('type', 0)->paginate(10);
        return view('admin.employee-list',compact('Employees')); 
    } 
}