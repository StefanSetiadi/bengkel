<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SparepartController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ViewController;


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

Route::view('/blog-details', 'blog-details')->name('blog-details');
Route::view('/blog', 'blog')->name('blog');
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

// View
Route::get('/', [ViewController::class, 'indexView'])->name('index');
Route::get('/about-us', [ViewController::class, 'aboutView'])->name('about-us');

// Service
Route::get('/service', [ServiceController::class, 'serviceView'])->name('service');
Route::get('/service-details{id_sparepart}', [ServiceController::class, 'serviceDetailsView'])->name('service-details');


// Shop
Route::get('/shop', [ShopController::class, 'shopView'])->name('shop');
Route::get('/shop-details{id_sparepart}', [ShopController::class, 'shopDetailsView'])->name('shop-details');
Route::get('/view-cart{id_customer}', [ShopController::class, 'viewCart'])->name('view-cart');
Route::post('/removeCart', [ShopController::class, 'removeCart'])->name('removeCart');

Route::post('/addCart', [ShopController::class, 'addCart'])->name('addCart');


// Booking
Route::post('/booking', [BookingController::class, 'bookingView'])->name('booking');
Route::post('/addBooking', [BookingController::class, 'addBooking'])->name('addBooking');

Route::get('/bookingDashboard', [BookingController::class, 'bookingDashboardView'])->name('bookingDashboard');


// Sparepart
Route::get('/spareparts{id_service}', [SparepartController::class, 'sparepartsView'])->name('spareparts');

Route::get('/spareparts', [SparepartController::class, 'sparepartsView'])->name('spareparts');
Route::get('/createSparepart', [SparepartController::class, 'createView'])->name('createSparepart');
Route::get('/editSparepart{id_sparepart}', [SparepartController::class, 'editView'])->name('editSparepart');
Route::get('/searchSparepart', [SparepartController::class, 'createView'])->name('searchSparepart');

Route::post('/addSparepart', [SparepartController::class, 'addSparepart'])->name('addSparepart');
Route::post('/editDataSparepart', [SparepartController::class, 'editDataSparepart'])->name('editDataSparepart');
Route::post('/deleteDataSparepart', [SparepartController::class, 'deleteDataSparepart'])->name('deleteDataSparepart');


