<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
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
Route::redirect('/','/users');

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/add', [UserController::class, 'add']);
Route::get('/users/edit/{id}', [UserController::class, 'add']);
Route::post('/users/add', [UserController::class, 'saveUser']);

Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/add', [StudentController::class, 'add']);
Route::get('/students/edit/{id}', [StudentController::class, 'add']);
Route::post('/students/add', [StudentController::class, 'saveStudent']);
