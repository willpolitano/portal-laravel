<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\FinancialController;
use App\Http\Controllers\ShoppingController;

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function() {
    return view('layouts.home');
})->name('home');

Route::resource('/produtos', ProductController::class)->names('products');

Route::resource('/clientes', ClientController::class)->names('clients');

Route::resource('/fornecedores', ProviderController::class)->names('providers');

Route::resource('/financeiro', FinancialController::class)->names('financials');

Route::resource('/compras', ShoppingController::class)->names('shoppings');


