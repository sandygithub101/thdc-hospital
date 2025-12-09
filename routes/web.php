<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 
use App\Http\Controllers\AdminController; 
use App\Http\Controllers\CustomAuthController; 
use App\Http\Controllers\DoctorController; 
use App\Http\Controllers\AppointmentController; 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('email-test', function(){
    $details['email'] = ' ';
    dispatch(new App\Jobs\SendEmailJob($details));
    dd('done');
});


/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
Route::post('/custom-login', [CustomAuthController::class, 'customLogin'])->name('user-login');

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/user-dashboard', [UserController::class, 'index'])->name('home');
    Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
    Route::get('book-appointment', [AppointmentController::class, 'bookAppointment'])->name('book-appointment');
    Route::get('cancel-appointment/{id}', [AppointmentController::class, 'cancelUserAppointment']);
    Route::post('save-user-appointment', [AppointmentController::class, 'saveUserAppointment']);
    Route::prefix('ajax')->group(function () {
        Route::post('/doc-detail', [DoctorController::class, 'docDetails']);
    });
});


/*------------------------------------------ 
-------------------------------------------- 
All Admin Routes List 
-------------------------------------------- 
--------------------------------------------*/
Route::group(['prefix' => '/admin'], function()
{
    Route::get('/', [CustomAuthController::class, 'indexAdmin'])->name('admin.login');
    Route::get('/login', [CustomAuthController::class, 'indexAdmin'])->name('admin.login');
    Route::post('/custom-login', [CustomAuthController::class, 'customAdminLogin'])->name('login.custom');
    Route::middleware(['auth', 'user-access:admin'])->group(function () { 
        Route::get('/admin-dashboard', [AdminController::class, 'adminHome'])->name('admin.dashboard'); 
        Route::get('/admin-signout', [CustomAuthController::class, 'signOutAdmin'])->name('admin-signout'); 
        Route::get('/doctors-list', [AdminController::class, 'docList']); 
        Route::get('/employee-list', [AdminController::class, 'empList']); 
    });
});


/*------------------------------------------ 
-------------------------------------------- 
All doctor Routes List 
-------------------------------------------- 
--------------------------------------------*/
Route::group(['prefix' => '/doctor'], function()
{
    Route::get('/', [CustomAuthController::class, 'indexDoctor'])->name('doctor.login');
    Route::get('/login', [CustomAuthController::class, 'indexDoctor'])->name('doctor.login');
    Route::post('/custom-login', [CustomAuthController::class, 'customDoctorLogin'])->name('login.docotr');
    Route::middleware(['auth', 'user-access:doctor'])->group(function () {
        Route::get('/doctor-dashboard', [DoctorController::class, 'doctorHome'])->name('doctor.dashboard');
        Route::get('/doctor-signout', [CustomAuthController::class, 'signOutDoctor'])->name('doctor-signout');
        Route::post('save-user-reappointment', [AppointmentController::class, 'saveUserReappointment']); 
        Route::get('cancel-appointment/{id}', [AppointmentController::class, 'cancelAppointment']); 
        Route::prefix('ajax')->group(function () {
        Route::post('/user-detail', [UserController::class, 'userDetails']);
    });
    });
});
