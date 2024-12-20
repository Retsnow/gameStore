<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JeuxController;


Route::get('/', 
[JeuxController::class, 'index'])->name('jeux.index');

Route::get('/jeux', 
[JeuxController::class, 'browse'])->name('jeux.browse');

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

Route::delete('/jeux/{id}',
[JeuxController::class, 'destroy'])->name('jeux.destroy');

Route::get('login',
[UsagersController::class, 'showLoginForm'])->name('jeux.login');

Route::post('login',
[UsagersController::class, 'login']);