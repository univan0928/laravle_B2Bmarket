<?php



use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
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


// ------Register Route------
Route::get('/', function() {
    return redirect('/auth/register/step1');
});

Route::prefix('/auth/register')->middleware('check.progress')->group(function() {
    Route::get('/step1', function() {
        return view('/auth/register/step1');
    });
    Route::get('/step2', function() {
        return view('/auth/register/step2');
    });
    Route::get('/step3', function() {
        return view('/auth/register/step3');
    });
    Route::get('/step4', function() {
        return view('/auth/register/step4');
    });
    Route::get('/step5', function() {
        return view('/auth/register/step5');
    });
    Route::get('/step6', function() {
        return view('/auth/register/step6');
    });
    Route::get('/step7', function() {
        return view('/auth/register/step7');
    });
    Route::get('/step8', function() {
        return view('/auth/register/step8');
    });
});

Route::get('/auth/register/step9', function() {
    return view('/auth/register/step9');
})->name('auth.register.step9');

Route::prefix('/auth/register')->group(function() {
    Route::post('/step1', [RegisterController::class, 'step1'])->name('auth.register.step1');
    Route::post('/step2', [RegisterController::class, 'step2'])->name('auth.register.step2');
    Route::post('/step3', [RegisterController::class, 'step3'])->name('auth.register.step3');
    Route::post('/step4', [RegisterController::class, 'step4'])->name('auth.register.step4');
    Route::post('/step5', [RegisterController::class, 'step5'])->name('auth.register.step5');
    Route::post('/step6', [RegisterController::class, 'step6'])->name('auth.register.step6');
    Route::post('/step7', [RegisterController::class, 'step7'])->name('auth.register.step7');
    Route::post('/step8', [RegisterController::class, 'step8'])->name('auth.register.step8');
});

Route::get('/sendPhone', [RegisterController::class, 'sendPhone'])->name('sendPhone');
Route::get('/sendEmail', [RegisterController::class, 'sendEmail'])->name('sendEmail');
Route::post('/auth/register/otp', function () {
    return view('/auth/register/otp');
});



// ------Login Route------


Route::get('/signin/step1', function () {
    return view('/signin/step1');
});
Route::get('/signin/step2', function () {
    return view('/signin/step2');
});
Route::get('/signin/step3', function () {
    return view('signin.step3');
});

Route::get('/user-dashboard', function () {
    return view('/user-dashboard');
});

Route::post('/signin/step1', [LoginController::class, 'step1'])->name('signin.step1');
Route::post('/signin/step2', [LoginController::class, 'step2'])->name('signin.step2');
