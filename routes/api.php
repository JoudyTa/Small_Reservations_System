<?php

use App\Http\Controllers\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
 */

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::view('/tt', 'tt');

Route::controller(Form::class)->group(function () {
    Route::post('submit_form', 'submit');
    // Route::get('show', 'show');
    //   Route::get('multi-step-form', function () {return view('multi_step_form');})->name('multi_step_form');
    //Route::get('', '');
});
Route::group(['middleware' => ['auth:sanctum']], function () {

});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

//Auth::routes();
