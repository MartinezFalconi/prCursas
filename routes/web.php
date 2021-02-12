<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('incripcionView', [UserController::class, 'incripcionView']);
Route::get('volverHome', [UserController::class, 'volverHome']);
Route::post('inscripcionUser', [UserController::class, 'inscripcionUser']);