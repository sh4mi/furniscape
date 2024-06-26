<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\admin\ProductsController;
use App\Http\Controllers\admin\OrdersController;
use App\Http\Controllers\admin\CategoriesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/signin', [WebController::class, 'login'])->name('signin');
Route::get('/signup', [WebController::class, 'register'])->name('signup');

Route::get('/', [WebController::class, 'index'])->name('home');
Route::get('/account', [WebController::class, 'account'])->name('account');

Route::get('/shop', [WebController::class, 'shop'])->name('shop');
Route::get('/product/{id}', [WebController::class, 'product'])->name('product');
Route::get('/foo', function () {
    Artisan::call('storage:link');
    });

Route::middleware(['auth', 'verified','isAdmin'])->prefix('admin')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    });
    Route::get('users', [UsersController::class, 'index'])->name('users.index');
    
    // Products
    Route::get('products', [ProductsController::class, 'index'])->name('products.index');
    Route::get('products/create', [ProductsController::class, 'create'])->name('products.create');
    Route::post('products', [ProductsController::class, 'store'])->name('products.store');
    Route::get('products/{product}/edit', [ProductsController::class, 'edit'])->name('products.edit');
    Route::post('products/{product}', [ProductsController::class, 'update'])->name('products.update');
    Route::delete('products/{product}', [ProductsController::class, 'destroy'])->name('products.destroy');
    
    // Orders
    Route::get('orders', [OrdersController::class, 'index'])->name('orders.index');
    
    // Categories
    Route::get('categories', [CategoriesController::class, 'index'])->name('categories.index');
    Route::get('categories/create', [CategoriesController::class, 'create'])->name('categories.create');
    Route::post('categories', [CategoriesController::class, 'store'])->name('categories.store');
    Route::get('categories/{category}/edit', [CategoriesController::class, 'edit'])->name('categories.edit');
    Route::put('categories/{category}', [CategoriesController::class, 'update'])->name('categories.update');
    Route::delete('categories/{category}', [CategoriesController::class, 'destroy'])->name('categories.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
