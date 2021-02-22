<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use App\Models\User;
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
Route::get('/',function(){
    return view('welcome');
});

// Users
Route::get('/users/all', [UserController::class, 'index']);
Route::get('/users/show/{id}', [UserController::class, 'show']);
Route::get('/users/edit/{id}', [UserController::class, 'edit']);
Route::post('/users/delete/{id}', [UserController::class, 'destroy']);
Route::post('/users/update/{id}', [UserController::class, 'update']);
// Companies
Route::get('/companies/all', [CompanyController::class, 'index']);
Route::get('/companies/show/{id}', [CompanyController::class, 'show']);
Route::get('/companies/edit/{id}', [CompanyController::class, 'edit']);
Route::post('/companies/delete/{id}', [CompanyController::class, 'destroy']);
Route::post('/companies/update/{id}', [CompanyController::class, 'update']);
