<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\TitleController;



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
    return view('dashboard');
})->name('dashboard');

Route::prefix('client')->group(function()
{
    Route::get('list' , [ClientController::class , 'list'])->name('client-list');
    Route::get('create' , [ClientController::class , 'create'])->name('client-create');
    Route::post('/' , [ClientController::class , 'store'])->name('client-store');
    Route::post('/{idclient}/edit' , [ClientController::class , 'edit'])->name('client-edit');


}) ;

Route::prefix('title')->group(function()
{

    Route::get('/' , [titleController::class , 'index'])->name('title-index');
    Route::get('list' , [titleController::class , 'list'])->name('title-list');
    Route::get('create' , [titleController::class , 'create'])->name('title-create');
    Route::post('/' , [titleController::class , 'store'])->name('title-store');

}) ;

Route::prefix('rent')->group(function()
{
    Route::get('list' , [RentController::class , 'list'])->name('rent-list');
    Route::get('create' , [RentController::class , 'create'])->name('rent-create');
    Route::get('/' , [RentController::class , 'store'])->name('rent-store');


});

