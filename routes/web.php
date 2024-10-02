<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EventosController::class, 'index']);

Route::match(['post'],'newEvento', function(){
    return view('creaEvento');

});

Route::post('nuevoEvento',[EventosController::class,'create']);

Route::post('eventoBorrate',[EventosController::class,'destroy']);

Route::get('evento/{evento}/edita', [EventosController::class, 'edit'])->name('evento.editar');

Route::put('evento/{evento}', [EventosController::class, 'update'])->name('evento.update');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
