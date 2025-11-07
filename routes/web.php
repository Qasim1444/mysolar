<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/calculator/utility-provider', function () {
    return view('Calculator.utilityprovider');
})->name('calculator.utility-provider');

Route::get('/calculator/utility-bill', function () {
    return view('Calculator.utilitybill');
})->name('calculator.utility-bill');

Route::view('/calculator/address', 'Calculator.address')->name('calculator.address');

Route::view('/calculator/map', 'Calculator.map')->name('calculator.map');

Route::get('/calculator/building', function () {
    return view('Calculator.building');
})->name('calculator.building');

Route::get('/calculator/shade', function () {
    return view('Calculator.shade');
})->name('calculator.shade');

Route::get('/calculator/prepare', function () {
    return view('Calculator.prepare');
})->name('calculator.prepare');

Route::get('/calculator/currently', function () {
    return view('Calculator.currently');
})->name('calculator.currently');

Route::get('/calculator/situations', function () {
    return view('Calculator.situations');
})->name('calculator.situations');

Route::get('/calculator/describe', function () {
    return view('Calculator.describe');
})->name('calculator.describe');

Route::get('/calculator/type', function () {
    return view('Calculator.type');
})->name('calculator.type');

Route::get('/calculator/roof', function () {
    return view('Calculator.roof');
})->name('calculator.roof');

Route::get('/calculator/repairs', function () {
    return view('Calculator.repairs');
})->name('calculator.repairs');

Route::get('/calculator/estimate', function () {
    return view('Calculator.estimate');
})->name('calculator.estimate');

Route::get('/calculator/interested', function () {
    return view('Calculator.interested');
})->name('calculator.interested');

Route::get('/calculator/report', function () {
    return view('Calculator.report');
})->name('calculator.report');

// Static pages: About, Contact, Piracy Policy
Route::view('/about', 'about')->name('about');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::view('/piracy-policy', 'piracy-policy')->name('piracy.policy');
