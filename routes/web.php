<?php

use App\Http\Controllers\Form;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
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

/**
 *
 *@return UploadedFile
 */
Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::controller(Form::class)->group(function () {
        Route::get('show', 'show');
        Route::post('submit-form', 'check')->name('submit_form');
        Route::get('multi-step-form', function () {return view('multi_step_form');})->name('multi_step_form');
    });

});
Route::post('/dashboard/send_email', [Form::class, 'send_email']);
Route::get('/dashboard', [Form::class, 'dashboard']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {return view('welcome');})->name('welcome');
Route::view('second_page', 'second_page');
Route::view('message', 'message');
