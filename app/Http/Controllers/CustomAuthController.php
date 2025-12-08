<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class CustomAuthController extends Controller
{
    public function index()
    {
        return view('signin');
    }

    public function indexAdmin()
    {
        return view('admin.signin');
    } 

     public function indexDoctor()
    {
        return view('doctor.signin');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'type' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password','type');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('user-dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function customAdminLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'type' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password','type');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin/admin-dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("admin/login")->withSuccess('Login details are not valid');
    }

    public function customDoctorLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'type' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password','type');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('doctor/doctor-dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("doctor/login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }

    public function signOutAdmin() {
        Session::flush();
        Auth::logout();
  
        return Redirect('admin/login');
    }

    public function signOutDoctor() {
        Session::flush();
        Auth::logout();
  
        return Redirect('doctor/login');
    }
}