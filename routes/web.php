<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/calculator/utility-provider', function () {
    return view('Calculator.utilityprovider');
})->name('calculator.utility-provider');

Route::get('/calculator/utility-bill', function () {
    return view('Calculator.utilitybill');
})->name('calculator.utility-bill');
