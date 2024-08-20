<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PizzaController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('pizza/index', [PizzaController::class,"index"])->name("pizza.index");
Route::get("pizza/create",[PizzaController::class,"create"])->name("pizza.create")->middleware("auth");
Route::get("pizza/show/{id}",[PizzaController::class,"show"])->name("pizza.show");
Route::post("pizza/store",[PizzaController::class,"store"])->name("pizza.store");
Route::delete("pizza/destroy/{id}",[PizzaController::class,"destroy"])->name("pizza.destroy");
require __DIR__.'/auth.php';
