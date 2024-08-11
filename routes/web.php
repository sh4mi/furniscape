<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\admin\DriversController;
use App\Http\Controllers\admin\ProductsController;
use App\Http\Controllers\admin\OrdersController;
use App\Http\Controllers\admin\RatingController;
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
Route::get('/wishlist', [WebController::class, 'showWishlist'])->name('wishlist');
Route::get('/wishlist-products', [WebController::class, 'getWishlistProducts'])->name('wishlist-products');
Route::get('/track-order', [OrdersController::class, 'trackOrder'])->name('track.order');
Route::post('/track-order', [OrdersController::class, 'searchOrder'])->name('search.order');

Route::get('/shop', [WebController::class, 'shop'])->name('shop');
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('addToCart');

Route::get('/checkout', [WebController::class, 'checkout'])->name('checkout');
Route::get('/product/{id}', [WebController::class, 'product'])->name('product');
Route::get('/foo', function () {
    Artisan::call('storage:link');
    });

Route::middleware(['auth', 'verified','isAdmin'])->prefix('admin')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    });
    // Users
    Route::get('users', [UsersController::class, 'index'])->name('users.index');
    Route::get('/users/{id}/edit', [UsersController::class, 'edit'])->name('users.edit');
    Route::post('/users/{id}', [UsersController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [UsersController::class, 'destroy'])->name('users.destroy');
    
    //Delivery Person
    Route::get('riders', [DriversController::class, 'index'])->name('riders.index');
    Route::get('riders/create', [DriversController::class, 'create'])->name('riders.create');
    Route::post('riders', [DriversController::class, 'store'])->name('riders.store');
    Route::get('/riders/{id}/edit', [DriversController::class, 'edit'])->name('riders.edit');
    Route::post('/riders/{id}', [DriversController::class, 'update'])->name('riders.update');
    Route::delete('/riders/{id}', [DriversController::class, 'destroy'])->name('riders.destroy');

    // Products
    Route::get('products', [ProductsController::class, 'index'])->name('products.index');
    Route::get('products/create', [ProductsController::class, 'create'])->name('products.create');
    Route::post('products', [ProductsController::class, 'store'])->name('products.store');
    Route::get('products/{product}/edit', [ProductsController::class, 'edit'])->name('products.edit');
    Route::post('products/{product}', [ProductsController::class, 'update'])->name('products.update');
    Route::delete('products/{product}', [ProductsController::class, 'destroy'])->name('products.destroy');
    
    // Orders
    Route::get('orders', [OrdersController::class, 'index'])->name('orders.index');
    Route::get('orders/{order}/edit', [OrdersController::class, 'edit'])->name('orders.edit');
    Route::post('orders/{order}', [OrdersController::class, 'update'])->name('orders.update');
    Route::delete('orders/{order}', [OrdersController::class, 'destroy'])->name('orders.destroy');

    // Categories
    Route::get('categories', [CategoriesController::class, 'index'])->name('categories.index');
    Route::get('categories/create', [CategoriesController::class, 'create'])->name('categories.create');
    Route::post('categories', [CategoriesController::class, 'store'])->name('categories.store');
    Route::get('categories/{category}/edit', [CategoriesController::class, 'edit'])->name('categories.edit');
    Route::put('categories/{category}', [CategoriesController::class, 'update'])->name('categories.update');
    Route::delete('categories/{category}', [CategoriesController::class, 'destroy'])->name('categories.destroy');

    //Manage Delivery
    Route::get('manage-delivery', [OrdersController::class, 'manageDelivery'])->name('manage-delivery');
    Route::post('orders/{order}/assign-rider', [OrdersController::class, 'assignRider']);
    Route::post('orders/{order}/update-status', [OrdersController::class, 'updateStatus'])->name('orders.updateStatus');

    //Rating
    Route::get('ratings', [RatingController::class, 'index'])->name('ratings.index');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/cart', [CartController::class, 'viewCart'])->name('cart');
    Route::post('/update-cart', [CartController::class, 'updateItem']);
    Route::post('/delete-cart-item', [CartController::class, 'deleteItem']);

    Route::get('/checkout', [CheckoutController::class, 'viewCheckout'])->name('checkout');
    Route::post('/place-order', [CheckoutController::class, 'placeOrder'])->name('place-order');
    Route::get('/view-order/{id}', [WebController::class, 'viewOrder']);
    Route::post('/ratings', [RatingController::class, 'store'])->name('ratings.store');
});

require __DIR__.'/auth.php';
