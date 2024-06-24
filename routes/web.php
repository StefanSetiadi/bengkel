<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SparepartController;


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

Route::view('/', 'index')->name('index');
Route::view('/about-us', 'about-us')->name('about-us');
Route::view('/blog-details', 'blog-details')->name('blog-details');
Route::view('/blog', 'blog')->name('blog');
Route::view('/cart', 'cart')->name('cart');
Route::view('/checkout', 'checkout')->name('checkout');
Route::view('/contact', 'contact')->name('contact');
Route::view('/our-services', 'our-services')->name('our-services');
Route::view('/wishlist', 'wishlist')->name('wishlist');
Route::view('/error-404', 'error-pages/error-404')->name('error-404');
Route::view('/error-500', 'error-pages/error-500')->name('error-500');

// Dashboard
Route::view('/index', 'dashboard/index')->name('indexdashboard');
Route::view('/account-settings', 'dashboard/account-settings')->name('account-settings');
Route::view('/add-sparepart', 'dashboard/add-sparepart')->name('add-sparepart');
Route::view('/calendar', 'dashboard/calendar')->name('calendar');
Route::view('/checkout', 'dashboard/checkout')->name('checkout');

Route::view('/customers', 'dashboard/customers')->name('customers');
Route::view('/bookings', 'dashboard/bookings')->name('bookings');
Route::view('/error', 'dashboard/error')->name('error');
Route::view('/forgot-password', 'dashboard/forgot-password')->name('forgot-password');

Route::view('/login', 'dashboard/login')->name('login');
Route::view('/maintenance', 'dashboard/maintenance')->name('maintenance');
Route::view('/orders', 'dashboard/orders')->name('orders');
Route::view('/profile', 'dashboard/profile')->name('profile');
Route::view('/reports', 'dashboard/reports')->name('reports');
Route::view('/reviews', 'dashboard/reviews')->name('reviews');
Route::view('/signup', 'dashboard/signup')->name('signup');
Route::view('/tables', 'dashboard/tables')->name('tables');
Route::view('/view-cart', 'dashboard/view-cart')->name('view-cart');

// Shop
Route::get('/shop', [ShopController::class, 'shopView'])->name('shop');
Route::get('/shop-details{id_sparepart}', [ShopController::class, 'shopDetailsView'])->name('shop-details');

// Product
Route::get('/spareparts', [SparepartController::class, 'sparepartsView'])->name('spareparts');
Route::get('/createSparepart', [SparepartController::class, 'createView'])->name('createSparepart');
Route::get('/editSparepart{id_sparepart}', [SparepartController::class, 'editView'])->name('editSparepart');
Route::get('/searchSparepart', [SparepartController::class, 'createView'])->name('searchSparepart');

Route::post('/addSparepart', [SparepartController::class, 'addSparepart'])->name('addSparepart');
Route::post('/editDataSparepart', [SparepartController::class, 'editDataSparepart'])->name('editDataSparepart');



