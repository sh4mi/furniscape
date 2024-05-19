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

Route::get('/', [WebController::class, 'index'])->name('home');
Route::get('/shop', [WebController::class, 'shop'])->name('shop');

Route::get('users', [UsersController::class, 'index'])->name('users.index');
// ---->PRODUCTS<----
Route::get('products', [ProductsController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');
Route::post('/products', [ProductsController::class, 'store'])->name('products.store');
// Route::resource('products', ProductsController::class);
// ---->END PRODUCTS<----
// ---->ORDERS<----
Route::get('orders', [OrdersController::class, 'index'])->name('orders.index');
// ---->END ORDERS<----
// ---->CATEGORY<----
Route::get('categories', [CategoriesController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoriesController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoriesController::class, 'store'])->name('categories.store');
Route::get('/categories/{category}/edit', [CategoriesController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{category}', [CategoriesController::class, 'update'])->name('categories.update');
Route::delete('/categories/{category}', [CategoriesController::class, 'destroy'])->name('categories.destroy');
// ---->END CATEGORY<----
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
