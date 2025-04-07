<?php

// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GetData;
use App\Http\Controllers\Search;
use App\Http\Controllers\Action;
use Illuminate\Support\Facades\Route;

Route::post('/search_client', [Search::class, 'search_client'])->name('search_client');

Route::post('/addClient', [Action::class, 'addClient'])->name('addClient');

Route::post('/addEmployee', [Action::class, 'addEmployee'])->name('addEmployee');
