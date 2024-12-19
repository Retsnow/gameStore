<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JeuxController;


Route::get('/', 
[JeuxController::class, 'index']);

Route::get('/jeux', 
[JeuxController::class, 'browse']);

Route::post('/jeux',
[JeuxController::class, 'store'])->name('jeux.store');

Route::get('/jeux/ajouter',
[JeuxController::class, 'create'])->name('jeux.create');

Route::get('/jeux/{jeu}/modifier',
[JeuxController::class, 'edit'])->name('jeux.edit');

Route::patch('/jeux/{jeu}/modifier',
[JeuxController::class, 'update'])->name('jeux.update');
    
Route::get('/jeux/{jeu}/',
[JeuxController::class, 'show'])->name('jeux.show');