<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/dashboard',[EmployeeController::class, 'index'])->name('dashboard');

    Route::get('/employee',[EmployeeController::class, 'add']);
    Route::post('/employee',[EmployeeController::class, 'create']);
    
    Route::get('/employee/{employee}', [EmployeeController::class, 'edit']);
    Route::post('/employee/{employee}', [EmployeeController::class, 'update']);
});
