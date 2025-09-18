<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\backApp\PagesController; // ✅ Import correctly

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dash', [PagesController::class, 'dash'])->name('dash'); // ✅ This now works


// Products
Route::get('/products', [PagesController::class, 'products'])->name('products.index');
Route::get('/products/add', [PagesController::class, 'addProduct'])->name('products.add');

// Categories
Route::get('/category/add', [PagesController::class, 'addCategory'])->name('category.add');

// Orders
Route::get('/orders', [PagesController::class, 'orders'])->name('orders.index');

// Customers
Route::get('/customers', [PagesController::class, 'customers'])->name('customers.index');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
