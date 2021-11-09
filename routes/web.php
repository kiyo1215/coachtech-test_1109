<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test_1109Controller;

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
Route::get('/building', [Test_1109Controller::class, 'index']);
Route::get('/building/{room}', [Test_1109Controller::class, 'bind']);
