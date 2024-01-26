<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\DaftarHajiController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('enduser.index');
});


Route::resource('package', PackageController::class);
Route::post('/package/EditForm', [PackageController::class, 'EditForm'])->name('package.EditForm');

Route::resource('registration', RegistrationController::class);
Route::get('/registration/detail/{id}', [RegistrationController::class, 'show'])->name('registration.detail');
Route::post('/registration/accept', [RegistrationController::class, 'accept'])->name('registration.accept');
Route::post('/registration/decline', [RegistrationController::class, 'decline'])->name('registration.decline');

Route::resource('daftar-haji', DaftarHajiController::class);