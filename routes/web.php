<?php
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
use App\Complainer;
use App\SMS\SmsController;
use App\User;
use App\UserProfile;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {

    $user_id =  Auth::id();
    $color = DB::table('users')
        ->select('color_code')
        ->join('colors','colors.color_id','=','users.color_id')
        ->where('id',$user_id)
        ->first();


    echo   $color->color_code;

});


// get default url
Route::get('/','Auth\LoginController@index');
Route::get('logout', 'Auth\LoginController@logout');


Auth::routes();
Route::get('api/complaints/count', 'HomeController@complaintsStatus');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

//user route
Route::get('user/register','Admin\UserController@create');
Route::get('user/edit','Admin\UserController@create');
Route::get('user/delete','Admin\UserController@create');



Route::resource('user','Admin\UserController');

//Role route
Route::get('role/All','Admin\RoleController@getAllRole');
Route::resource('role','Admin\RoleController');
Route::post('role/update','Admin\RoleController@updates');

//Role Profile
Route::get('roleProfile/assign/role/{id}','Admin\RoleProfileController@assignRole');
Route::resource('roleProfile','Admin\RoleProfileController');
Route::post('user/login','UserController@store');
Route::post('user/update','Admin\UserController@updates');

//profile
Route::get('profile/create','Admin\ProfileController@create');
Route::get('profile/edit','Admin\ProfileController@edit');
Route::get('profile/delete','Admin\ProfileController@create');

Route::resource('profile','Admin\ProfileController');

Route::post('profile/update','Admin\ProfileController@updates');


//user profile
Route::get('userProfile/create','Admin\UserProfileController@create');
Route::get('userProfile/edit','Admin\UserProfileController@edit');
Route::get('userProfile/delete','Admin\UserProfileController@create');

Route::get('userProfile/assign/profile/{id}','Admin\UserProfileController@assignProfile');

Route::resource('userProfile','Admin\UserProfileController');

Route::post('userProfile/update','Admin\UserProfileController@updates');

//Report Controller
Route::get('report/select','Report\ReportController@selectReport');
Route::get('report/get/{id}','Report\ReportController@getReport')->name('report_get');
Route::post('report/params','Report\ReportController@paramReport');


//Error Controller

Route::get('error/response','ErrorController@errorRedirect');


//email auth
Route::get('auth/email-authenticate/{token}', [
    'as' => 'auth.email-authenticate',
    'uses' => 'Mail\EmailAuthController@create'
]);

Route::post('auth/create-password/{token}','Mail\EmailAuthController@store');


//configuration controller

Route::get('config-scheme/create','Configuration\SchemeController@create');
Route::resource('config-scheme','Configuration\SchemeController');

//color cONTROLLER
Route::get('config-color/get-color','Configuration\ColorController@getColor');
Route::get('config-color/color/create','Configuration\ColorController@createColor');
Route::post('config-color/color/change','Configuration\ColorController@changeColor');
Route::get('config-color/color/default','Configuration\ColorController@defaultColor');


