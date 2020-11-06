<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\{
    ProductController,
    ClientController,
    ProviderController,
    FinancialController,
    ShoppingController,
};


Route::get('/', function () {
    return redirect('/home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/home', function() {
    return view('layouts.home');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->resource('/produtos', ProductController::class)->names('products');

Route::middleware(['auth:sanctum', 'verified'])->resource('/clientes', ClientController::class)->names('clients');

Route::middleware(['auth:sanctum', 'verified'])->resource('/fornecedores', ProviderController::class)->names('providers');

Route::middleware(['auth:sanctum', 'verified'])->resource('/financeiro', FinancialController::class)->names('financials');

Route::middleware(['auth:sanctum', 'verified'])->resource('/compras', ShoppingController::class)->names('shoppings');

Route::get('login/github', [LoginController::class, 'redirectToProvider']);

Route::get('login/github/callback', [LoginController::class, 'handleProviderCallback']);
