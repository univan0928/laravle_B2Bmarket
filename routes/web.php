<?php

use App\Http\Controllers\SignupController;
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
    return redirect('stepOne');
});
Route::get('/stepOne', function () {
    return view('stepOne');
});
Route::get('/stepTwo', function () {
    return view('stepTwo');
});
Route::get('/stepThree', function () {
    return view('stepThree');
});
Route::get('/stepFour', function () {
    return view('/stepFour');
});
Route::get('/stepFive', function () {
    return view('/stepFive');
});
Route::get('/stepSix', function () {
    return view('/stepSix');
});
Route::get('/stepSeven', function () {
    return view('/stepSeven');
});
Route::get('/stepEight', function () {
    return view('/stepEight');
});

Route::get('/send_otp', function () {
    return view('/send_otp');
});






// Route::get('/stepOne', [SignupController::class, 'index']);

Route::post('/stepOne', [SignupController::class, 'stepOne'])->name('stepOne');
Route::post('/stepTwo', [SignupController::class, 'stepTwo'])->name('stepTwo');
Route::post('/stepThree', [SignupController::class, 'stepThree'])->name('stepThree');
Route::post('/stepFour', [SignupController::class, 'stepFour'])->name('stepFour');

Route::post('/stepSix', [SignupController::class, 'stepSix'])->name('stepSix');
Route::post('/stepSeven', [SignupController::class, 'stepSeven'])->name('stepSeven');
