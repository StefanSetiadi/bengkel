<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SparepartController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TransactionController;

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

/*
|--------------------------------------------------------------------------
|                                   Public
|--------------------------------------------------------------------------
*/
// Homepage
Route::get('/', [ViewController::class, 'indexView'])->name('index');
Route::get('/about-us', [ViewController::class, 'aboutView'])->name('about-us');

// Login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// Register
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

// Shop
Route::get('/shop', [ShopController::class, 'shopView'])->name('shop');
Route::get('/shop-details{id_sparepart}', [ShopController::class, 'shopDetailsView'])->name('shop-details');

/*
|--------------------------------------------------------------------------
|                                   Customer
|--------------------------------------------------------------------------
*/

Route::middleware('customer')->group(function() {
    // Logout
    Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

    // Shop
    Route::get('/view-cart', [ShopController::class, 'viewCart'])->name('view-cart');
    Route::post('/removeCart', [ShopController::class, 'removeCart'])->name('removeCart');
    Route::post('/actionCheckout', [ShopController::class, 'actionCheckout'])->name('actionCheckout');
    Route::post('/addCart', [ShopController::class, 'addCart'])->name('addCart');
    Route::post('/editCart', [ShopController::class, 'editCart'])->name('editCart');

    // Service
    Route::get('/service', [ServiceController::class, 'serviceView'])->name('service');
    Route::get('/service-details{id_sparepart}', [ServiceController::class, 'serviceDetailsView'])->name('service-details');

    // Transaction
    Route::post('/removeTransaction', [ShopController::class, 'removeTransaction'])->name('removeTransaction');

    // Booking
    Route::get('/booking', [BookingController::class, 'bookingView'])->name('booking');
    Route::post('/addBooking', [BookingController::class, 'addBooking'])->name('addBooking');
    Route::post('/removeBooking', [BookingController::class, 'removeBooking'])->name('removeBooking');

    // History
    Route::get('/historyBooking', [BookingController::class, 'historyBooking'])->name('historyBooking');
    Route::get('/historyTransaction', [PaymentController::class, 'historyTransaction'])->name('historyTransaction');
    Route::post('/detailHistoryTransaction', [PaymentController::class, 'detailHistoryTransaction'])->name('detailHistoryTransaction');
    Route::get('/historyServices', [ServiceController::class, 'historyServices'])->name('historyServices');
    Route::post('/detailHistoryService', [PaymentController::class, 'detailHistoryService'])->name('detailHistoryService');

    // PDF
    Route::get('history/transaction/invoice/{idTransaction}/generate', [PaymentController::class, 'generateInvoiceTransaction'])->name('generateInvoiceTransaction');
    Route::get('history/service/invoice/{idService}/generate', [PaymentController::class, 'generateInvoiceService'])->name('generateInvoiceService');

});


/*
|--------------------------------------------------------------------------
|                                   Admin
|--------------------------------------------------------------------------
*/
// Login
Route::post('actionloginAdmin', [LoginController::class, 'actionloginAdmin'])->name('actionloginAdmin');
Route::get('actionlogoutAdmin', [LoginController::class, 'actionlogoutAdmin'])->name('actionlogoutAdmin');
Route::get('/login-admin', [LoginController::class, 'loginAdmin'])->name('loginAdmin');

// Route::group(['guard' => ['admin']], function() {
Route::middleware('admin')->group(function() {

    Route::view('/index', 'dashboard/index')->name('indexdashboard');
    Route::get('/index', [TransactionController::class, 'dataTransaction'])->name('indexdashboard');


    // Booking
    Route::get('/bookingDashboard', [BookingController::class, 'bookingDashboardView'])->name('bookingDashboard');
    Route::post('/acceptBooking', [BookingController::class, 'acceptBooking'])->name('acceptBooking');
    Route::post('/rejectBooking', [BookingController::class, 'rejectBooking'])->name('rejectBooking');
    
    // Transaction
    Route::get('/dashboardTransaction', [PaymentController::class, 'dashboardTransaction'])->name('dashboardTransaction');

    // Services
    Route::get('/servicesDashboard', [ServiceController::class, 'servicesDashboardView'])->name('servicesDashboard');
    Route::post('/createBill', [ServiceController::class, 'createBill'])->name('createBill');
    Route::post('/setServiceFee', [ServiceController::class, 'setServiceFee'])->name('setServiceFee');
    Route::post('/addSparepartService', [ServiceController::class, 'addSparepartService'])->name('addSparepartService');
    Route::post('/addDataService', [ServiceController::class, 'addDataService'])->name('addDataService');
    Route::post('/setQuantitySparepartService', [ServiceController::class, 'setQuantitySparepartService'])->name('setQuantitySparepartService');
    Route::post('/deleteSparepartService', [ServiceController::class, 'deleteSparepartService'])->name('deleteSparepartService');

    // Sparepart
    Route::get('/spareparts', [SparepartController::class, 'sparepartsView'])->name('spareparts');
    Route::get('/createSparepart', [SparepartController::class, 'createView'])->name('createSparepart');
    Route::get('/editSparepart{id_sparepart}', [SparepartController::class, 'editView'])->name('editSparepart');
    Route::get('/searchSparepart', [SparepartController::class, 'createView'])->name('searchSparepart');
    Route::view('/add-sparepart', 'dashboard/add-sparepart')->name('add-sparepart');

    Route::post('/addSparepart', [SparepartController::class, 'addSparepart'])->name('addSparepart');
    Route::post('/editDataSparepart', [SparepartController::class, 'editDataSparepart'])->name('editDataSparepart');
    Route::post('/deleteDataSparepart', [SparepartController::class, 'deleteDataSparepart'])->name('deleteDataSparepart');

    // Payment
    Route::post('/updateTransaction', [PaymentController::class, 'updateTransaction'])->name('updateTransaction');
    Route::post('/updateService', [PaymentController::class, 'updateService'])->name('updateService');

});

/*
|--------------------------------------------------------------------------
|                                   Unused
|--------------------------------------------------------------------------
*/
// Route::view('/blog-details', 'blog-details')->name('blog-details');
// Route::view('/blog', 'blog')->name('blog');
// Route::view('/checkout', 'checkout')->name('checkout');
// Route::view('/contact', 'contact')->name('contact');
// Route::view('/our-services', 'our-services')->name('our-services');
// Route::view('/wishlist', 'wishlist')->name('wishlist');
// Route::view('/error-404', 'error-pages/error-404')->name('error-404');
// Route::view('/error-500', 'error-pages/error-500')->name('error-500');

// // Dashboard
// Route::view('/account-settings', 'dashboard/account-settings')->name('account-settings');
// Route::view('/add-sparepart', 'dashboard/add-sparepart')->name('add-sparepart');
// Route::view('/calendar', 'dashboard/calendar')->name('calendar');
// Route::view('/checkout', 'dashboard/checkout')->name('checkout');

// Route::view('/customers', 'dashboard/customers')->name('customers');
// Route::view('/error', 'dashboard/error')->name('error');
// Route::view('/forgot-password', 'dashboard/forgot-password')->name('forgot-password');

// Route::view('/login', 'dashboard/login')->name('login');
// Route::view('/maintenance', 'dashboard/maintenance')->name('maintenance');
// Route::view('/orders', 'dashboard/orders')->name('orders');
// Route::view('/profile', 'dashboard/profile')->name('profile');
// Route::view('/reports', 'dashboard/reports')->name('reports');
// Route::view('/reviews', 'dashboard/reviews')->name('reviews');
// Route::view('/signup', 'dashboard/signup')->name('signup');
// Route::view('/tables', 'dashboard/tables')->name('tables');