<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\RestController;

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

Route::get('/login', [AuthController::class, 'getLogin']);
Route::post('/login', [AuthController::class, 'postLogin']);
Route::get('/register', [AuthController::class, 'getRegister']);
// Route::get('/register', [AuthController::class, 'postRegister']);
Route::post('/register', [AuthController::class, 'postRegister']);

Route::middleware('auth')->group(function () {
    Route::get('/', [AttendanceController::class, 'getIndex']);
    Route::get('/attendance/start', [AttendanceController::class, 'startAttendance']);
    Route::get('/attendance/end', [AttendanceController::class, 'endAttendance']);
    Route::get('/attendance/{number}', [AttendanceController::class, 'getAttendance']);
    Route::get('/break/start', [RestController::class, 'startRest']);
    Route::get('/break/end', [RestController::class, 'endRest']);
    Route::get('/logout', [AuthController::class, 'getLogout']);
});