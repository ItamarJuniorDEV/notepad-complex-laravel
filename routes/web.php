<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\CheckIsLogged; 
use App\Http\Middleware\CheckIsNotLogged;
use Illuminate\Support\Facades\Route;

// Se o usuário não estiver logado, cairá em alguma das rotas abaixo
Route::middleware([CheckIsNotLogged::class])->group(function () {
  Route::get('/login',  [AuthController::class, 'login']);
  Route::post('/loginSubmit', [AuthController::class, 'loginSubmit']);
});


// Middleware para verificar se o usuário está logado
Route::middleware([CheckIsLogged::class])->group(function () {
    // Se o usuário estiver logado, cairá em uma das rotas abaixo
    Route::get('/', [MainController::class, 'index'])->name('home');
    Route::get('/newNote', [MainController::class, 'newNote'])->name('new');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});


