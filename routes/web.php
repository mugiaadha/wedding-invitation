<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\InvitationController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/logout', 'logout');
});

Route::get('/apps', function () {
    return view('apps.home');
})->name('home');


Route::get('/invitation/{invite:uniqid}', [InvitationController::class, 'index'])->name('invite');

Route::get('/send-template/{invite:uniqid}', [InvitationController::class, 'sendTemplate'])->name('send-template');