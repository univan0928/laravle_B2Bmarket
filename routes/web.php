<?php

use App\Http\Controllers\SignupController;
use App\Http\Controllers\SMSController;
use Illuminate\Support\Facades\Route;

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
    return redirect('step1');
})->middleware('initial');

Route::get('/step1', function () {
    return view('step1');
})->middleware('initial');

Route::get('/step2', function () {
    return view('step2');
})->middleware('check.progress');

Route::get('/step3', function () {
    return view('step3');
})->middleware('check.progress');

Route::get('/step4', function () {
    return view('/step4');
})->middleware('check.progress');

Route::get('/step5', function () {
    return view('/step5');
})->middleware('check.progress');

Route::get('/step6', function () {
    return view('/step6');
})->middleware('check.progress');

Route::get('/step7', function () {
    return view('/step7');
})->middleware('check.progress');

Route::get('/step8', function () {
    return view('/step8');
})->middleware('check.progress');

Route::get('/step9', function () {
    return view('/step9');
})->middleware('check.progress');

Route::get('/step9', function () {
    return view('step9');
})->name('step9')->middleware('check.progress');

Route::post('otp', function () {
    return view('/otp');
});



Route::post('/step1', [SignupController::class, 'step1'])->name('step1');
Route::post('/step2', [SignupController::class, 'step2'])->name('step2');
Route::post('/step3', [SignupController::class, 'step3'])->name('step3');
Route::post('/step4', [SignupController::class, 'step4'])->name('step4');
Route::post('/step5', [SignupController::class, 'step5'])->name('step5');
Route::post('/step6', [SignupController::class, 'step6'])->name('step6');
Route::post('/step7', [SignupController::class, 'step7'])->name('step7');
Route::post('/step8', [SignupController::class, 'step8'])->name('step8');
Route::get('/resendEmail', [SignupController::class, 'resendEmail'])->name('resendEmail');
Route::get('/resendPhone', [SignupController::class, 'resendPhone'])->name('resendPhone');
Route::get('/upload', [SignupController::class, 'upload'])->name('upload');

Route::get('/signin/step1', function () {
    return view('signin.step1');
});