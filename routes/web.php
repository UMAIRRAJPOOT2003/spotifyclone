<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Authcontroller;
use Illuminate\Support\Facades\DB;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('registration',[Authcontroller::class, 'Registration'])->name('registration')->middleware('alreadyLoggedin');
Route::get('login',[Authcontroller::class, 'Login'])->name('login')->middleware('alreadyLoggedin');
Route::get('dashboard',[Authcontroller::class, 'Dashboard'])->name('dashboard')->middleware('isLoggedin');
Route::post('dataInsert',[Authcontroller::class, 'DataInsert']);
Route::post('dataLogin',[Authcontroller::class, 'DataLogin']);
Route::get('logout',[Authcontroller::class, 'logout'])->name('logout');
Route::get('songs',[Authcontroller::class, 'Songs'])->name('songs');
Route::get('artist2',[Authcontroller::class, 'Artist2'])->name('artist2');
Route::get('artist3',[Authcontroller::class, 'Artist3'])->name('artist3');
Route::get('artist4',[Authcontroller::class, 'Artist4'])->name('artist4');
Route::get('artist5',[Authcontroller::class, 'Artist5'])->name('artist5');
Route::get('subcription',[Authcontroller::class, 'subcription'])->name('subcription');
Route::get('pricingform',[Authcontroller::class, 'pricingform'])->name('pricingform');
Route::post('pricingform',[Authcontroller::class, 'store'])->name('send.php.mailer.submit');


