<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\Controller;

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

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'home')->name('app-home');
    Route::get('/about', 'about')->name('app-about');
    Route::match(['get', 'post'], '/dashboard',  'dashboard' )->middleware('auth')->name('app_dashboard');
});
Route::controller(LoginController::class)->group(function(){

   Route::get('/logout', 'logout')->name('app_logout');
   Route::post('/exist_email', 'existEmail')->name('app_exist_email');
   Route::match(['get', 'post'], '/activation_code/{token}', 'activationCode')->name('app_activation_code');
   Route::get('/user_checker', 'userChecker')->name('app_user_checker');
   Route::get('/resend_activation_code/{token}',  'resendActivationCode')->name('app_resend_activation_code');
   Route::get('/activation_account_link/{token}',  'activationAccountLink')->name('app_activation_account_link');
   Route::match(['get', 'post'], '/activation_account_change_email/{token}',  'ActivationAccountChangeEmail')->name('app_activation_account_change_email');
   Route::match(['get', 'post'], '/forgot_password',  'forgotPassword')->name('app_forgot_password');
   Route::match(['get', 'post'], '/change_password/{token}',  'changePassword')->name('app_change_password');

});


/*


 Route::get('/', [HomeController::class, 'home'])
    ->name('app-home');

Route::get('/about', [HomeController::class, 'about'])
    ->name('app-about');

Route::match(['get', 'post'], '/dashboard', [HomeController::class, 'dashboard'] )
    ->middleware('auth')
    ->name('app_dashboard');

Route::get('/logout', [LoginController::class, 'logout'])
    ->name('app_logout');

Route::post('/exist_email', [LoginController::class, 'existEmail'])
    ->name('app_exist_email');

Route::match(['get', 'post'], '/activation_code/{token}', [LoginController::class, 'activationCode'])
    ->name('app_activation_code');

Route::get('/user_checker', [LoginController::class, 'userChecker'])
    ->name('app_user_checker');

Route::get('/resend_activation_code/{token}', [LoginController::class, 'resendActivationCode'])
    ->name('app_resend_activation_code');

Route::get('/activation_account_link/{token}', [LoginController::class, 'activationAccountLink'])
    ->name('app_activation_account_link');

Route::match(['get', 'post'], '/activation_account_change_email/{token}', [LoginController::class, 'ActivationAccountChangeEmail'])
    ->name('app_activation_account_change_email');
*/

