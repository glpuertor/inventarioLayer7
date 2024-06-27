<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();



Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', [App\Http\Controllers\articulosController::class, 'index'])->name('home');
    Route::get('/crearArticulo', [App\Http\Controllers\articulosController::class, 'store'])->name('crearArticulo');
    Route::get('/editArticulo', [App\Http\Controllers\articulosController::class, 'edit'])->name('editArticulo');
    Route::post('/guardaproducto', [App\Http\Controllers\articulosController::class, 'create'])->name('guardaproducto');
    Route::put('/editarInventario/{id}', [App\Http\Controllers\articulosController::class, 'update'])->name('editarInventario');
    Route::delete('elimiararticulo/{id}', [App\Http\Controllers\articulosController::class, 'destroy'])->name('elimiararticulo');
});



