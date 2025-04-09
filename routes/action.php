<?php

// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GetData;
use App\Http\Controllers\Search;
use App\Http\Controllers\Action;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
// use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;


Route::post('/register_C', [RegisteredUserController::class, 'store'])->name('register_C');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

Route::post('/search_client', [Search::class, 'search_client'])->name('search_client');

Route::post('/addClient', [Action::class, 'addClient'])->name('addClient');

Route::post('/addEmployee', [Action::class, 'addEmployee'])->name('addEmployee');
