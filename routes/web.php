<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 

use App\Http\Controllers\BuilderController; 
use App\Http\Controllers\FactoryController;
use App\Http\Controllers\ProviderController;
use NunoMaduro\Collision\Contracts\Provider;

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


Route::get('/', [UserController::class, 'index']); 
Route::get('/create', [UserController::class, 'store']); 
Route::get('/update/{id}', [UserController::class, 'update']); 
Route::get('/delete/{id}', [UserController::class, 'destroy']); 
Route::get('/show', [BuilderController::class, 'show']); 
Route::get('/factorystore', [FactoryController::class, 'store']); 


Route::get('facades', function(){
    // echo Invoice::companyName().'<br>';
    // echo Invoice::name();

});
Route::get('/provider', [ProviderController::class, 'mail']); 
Route::post('/provider', [ProviderController::class, 'sendEmail'])->name('sendEmail'); 
Route::get('/fg' , [ProvideController::class, 'mail']);






