<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|Route::get('{any}', function(){
    return view('welcome');
})->where('any', '.*');
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




use App\Http\Controllers\LoginController;

Route::group(['prefix' => 'login'], function() {

    Route::get('/', [LoginController::class, 'index'])->name('login');

    Route::post('/store', [LoginController::class, 'store'])->name('login.store');

    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

});




//Registration Route<--------------------------------------------------------------------------------------->


use App\Http\Controllers\RegistrationController;

Route::group(['prefix' => 'registration'], function() {

    Route::get('/', [RegistrationController::class, 'index'])->name('registration');

    Route::post('/store', [RegistrationController::class, 'store'])->name('registration.store'); 
      
});



//License Route<---------------------------------------------------------------------------------------------------->


use App\Http\Controllers\LicenseController;

Route::group(['prefix' => 'license'], function() {

    Route::get('/', [LicenseController::class, 'index'])->name('license.index');
    
    Route::post('/store', [LicenseController::class, 'store'])->name('license.store');
    
    Route::get('/activate', [LicenseController::class, 'activate'])->name('license.activate');

    Route::post('/activate/store', [LicenseController::class, 'activestore'])->name('license.activate.store');
      
});