<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BrandController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BrandController::class, 'index'])->name('index');


//Brands
Route::get(
    'brands/trash/{id}',
    [BrandController::class, 'trash']
    )->name('brands.trash');

Route::get(
    'brands/trashed/',
    [BrandController::class, 'trashed']
    )->name('brands.trashed');

Route::get(
    'brands/restore/{id}',
    [BrandController::class, 'restore']
    )->name('brands.restore');

//Cars
Route::get(
    'cars/trash/{id}',
    [CarController::class, 'trash']
    )->name('cars.trash');

Route::get(
    'cars/trashed/',
    [CarController::class, 'trashed']
    )->name('cars.trashed');

Route::get(
    'cars/restore/{id}',
    [CarController::class, 'restore']
    )->name('cars.restore');

Route::resource('brands', BrandController::class)->middleware(['auth', 'verified']);
Route::resource('cars', CarController::class)->middleware(['auth', 'verified']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
